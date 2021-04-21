<?php
$a = 5;
$b = 5.0;
$c = "5asd";
$d = true;

var_dump($a===$b);
/*
function zbir($p, $q){
	return $p + $q;
}

function zir($a, $b, &$z, &$r){
	$z = $a + $b;
	$r = $a - $b;
}

function test(){
	global $a;
	echo 'test'.$a;
}

function tests(){
	static $x = 3;
	echo $x++;
}

var_dump(zbir($a, $b));
zir($a, $b, $z, $r);

var_dump($r);
test();

var_dump($GLOBALS);
tests();
tests();
tests();

echo "<br>ispis test a = $a <br>".$b." neki drugi tekst";
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>PHP1</title>
</head>
<body>
	<?php if ($a>5){?>
	<h1>Naslov</h1>
	<?php }elseif($a==5){?>
	<h2>Naslov 2</h2>
	<?php }?>
	
	<?php 
		if($a>5)
			echo "<h1>Naslov</h";
		elseif($a==5)
			echo "<h2>Naslov 2</h2>";
	?>
	<h2>Lista</h2>
	<ul>
		<?php for ($i = 0; $i < $a; $i++){?>
		<li>li <?= $i+1 ?></li>
		<?php }?>
	</ul>
	<h2>Lista 2</h2>
	<ul>
	<?php 
	
	for ($i = 0; $i < $a; $i++)
		echo "<li>li ".($i+1)."</li>";
	?>
	</ul>
</body>
</html>
<?php 
	# echo $a;
?>