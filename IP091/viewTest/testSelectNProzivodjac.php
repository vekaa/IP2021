<?php
	require_once '../model/DAO.php';
	
	$dao = new DAO();
	$n = 3;
	$lp = $dao->selectFirstNProizvodjac($n);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Select <?php echo $n ?> proizvodjac</title>
</head>
<body>
	<?php 
		foreach ($lp as $pom)
			echo "$pom[imepr] $pom[zemljaporekla]<br>";
	?>
</body>
</html>