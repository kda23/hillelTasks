<?php

//Аналог функции array_sum

$a = [2,3,9,1,100,5,1,3];

function my_array_sum($a) {
	
$count = count($a) - 1;

for ($x = 1 ; $x <= $count; $x++) {
	$z = $a[0] + $a[$x];
	$a[0] = $z;
	}	
	return $z;
}
echo my_array_sum($a);
?>