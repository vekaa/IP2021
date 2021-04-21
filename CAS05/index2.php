<?php
$a = array();
$a[0] = 3;
$a[1] = 4;
$a[2] = 'test';
$a[] = 6;

$a[10] =10;
unset($a[2]);
$a[] = 11;
array_push($a, array(1,2,3,4,5));

var_dump($a);
echo "<br>";
print_r($a);
echo "<br>".json_encode($a);


echo "<br><br><br>";
$b = array(
	array('marka'=>'Skoda', 'cena' => 10000),
	array('marka'=>'BMW', 'cena' => 11000),
	array('marka'=>'AUDI', 'cena' => 12000),
	array('marka'=>'TOYOTA', 'cena' => 13000)
);
$b1 = array('marka'=>'Skoda', 'cena' => 10000);
for ($i = 0; $i < count($b1); $i++) {
	echo "<br>".$b1['marka']." ".$b1['cena'];
}
echo "<br><br><br>";
foreach ($b1 as $k => $v) {
	echo "<br>".$k." ".$v;
}
echo "<br><br><br>";
print_r($b);

$c = array(1,2,3,4,5);
for ($i = 0; $i < count($c); $i++) {
	echo "<br>".$c[$i];
}
foreach ($c as $pom) {
	echo "<br>".$pom;
}
?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<table border="1" width="80%">
	<tr>
		<th>Marka</th>
		<th>Cena</th>
	</tr>
	<?php foreach ($b as $auto){  ?>
	<tr>
		<td><?= $auto['marka']?></td>
		<td><?= $auto['cena']?></td>
	</tr>
	<?php }?>
</table>

</body>
</html>