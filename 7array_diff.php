<?php
//Аналог функции array_diff

$a = [2,3,10,'some',45,-4,12,13,44,"new"];
$b = [8,7,6,10,"new"];
$c = [13,8,12];
$d = [1,3,4];

function my_array_diff(...$value) {	// "..." возможно использовать начиная с версии PHP 5.6 
	
	$countArr = count ($value);
	$countArr0 = count ($value[0]);
	
	for ($x = 1; $x < $countArr; $x++) {
		$countX = count($value[$x]);
		for ($y = 0; $y < $countArr0; $y++) {
			for ($z = 0; $z < $countX; $z++) {
				if ($value[0][$y] == $value[$x][$z]) {
				unset($value[0][$y]);
				}
			}
		}
	}
	return $value[0];
}
var_dump(my_array_diff($a, $b, $c, $d));
?>