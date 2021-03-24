<?php
    $a = 5;
    $b = 5.0;
    $c = '5Dal je mogucxe';
    $d = true;
    
    var_dump($a === $b);
    var_dump($a == $b);
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
    tests();
    tests();
    tests();
    
    echo "<br><br>ispis test a = $a pa b ".$b." pa Neki drugi tekst";

    echo '<br>ispis test a = $a<br>';
*/
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<?php  if($a>5){?>
	<h1>Naslov 1</h1>
	<?php }else{?>
	<h2>Naslov 2</h2>
	<?php }?>
	
	<?php 
	   if($a>5)
	       echo "<h1>Naslov 1</h1>";
	   else
	       echo "<h2>Naslov 2</h2>";
	?>
	<h2>Lista</h2>
    <ul>
        <?php
            for($i=0; $i < $a; $i++)
            echo "<li>$i</li>";
        ?>
    </ul>
	
</body>


</html>


<?php 
   # var_dump($a);
  ?>