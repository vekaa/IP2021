<?php
	require_once '../model/DAO.php';
	
	$dao = new DAO();
	$lv = $dao->selectVozilaByProizvodjac('bmw');
	$lv1 = $dao->selectVozilaByZemljaporekla('nemacka');
	$lv2 = $dao->selectVozilaByKategorijaTrajanje(10);
	$lv3 = $dao->selectVozilaByVozac(2);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Select <?php echo $n ?> proizvodjac</title>
</head>
<body>
	<h2>Vozila po proizvodjacu</h2>
	<?php 
		foreach ($lv as $pom)
			echo "$pom[idvzl] $pom[imepro]  $pom[model] $pom[kategorija] $pom[godiste] $pom[kubikaza] $pom[cena]<br>";
	?>
	<h2>Vozila po zemlji porekla 1-*</h2>
	<?php 
		foreach ($lv1 as $pom)
			echo "$pom[idvzl] $pom[imepro]  $pom[model] $pom[kategorija] $pom[godiste] $pom[kubikaza] $pom[cena] $pom[zemljaporekla]<br>";
	?>
	<h2>Vozila po kategorija trajanje 1-*</h2>
	<?php 
		foreach ($lv2 as $pom)
			echo "$pom[idvzl] $pom[imepro]  $pom[model] $pom[kategorija] $pom[godiste] $pom[kubikaza] $pom[cena] $pom[opis] $pom[trajanje]<br>";
	?>
	<h2>Vozila po vozacu *-*</h2>
	<?php 
	//var_dump($lv3);
		foreach ($lv3 as $pom)
			echo "$pom[idvoz] $pom[ime] $pom[prezime] $pom[4] $pom[vremedodele] $pom[idvzl] $pom[imepro] $pom[model] $pom[kategorija] <!-- [11] je godste vozila-->/$pom[11] $pom[kubikaza] $pom[cena]<br>";
	?>
</body>
</html>