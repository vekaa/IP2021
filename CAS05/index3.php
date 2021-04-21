<?php
		$a = array(1,3,5,7,8);
		$b = array(4,5,5,7,8,9,10,12,15);
		$c = array(5,3,1,8,7);
		
		$r = $a+$b;
		echo "<br>";
		print_r($a);	
		
		echo "<br>";
		print_r($b);
		
		echo "<br>Ovo je R: ";
		print_r($r);
		
		echo "<br>";
		print_r(array_diff($a,$c));
		
		echo "<br>";
		print_r(array_merge($a,$c));
		
		echo "<br>";
		print_r(array_intersect($a,$b));
		
		echo "<br>";
		print_r(array_unique(array_merge($a,$c)));?>