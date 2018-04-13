<?php

//Аналог функции array_sum

$a = [2,899,9,1,100,5,1,3];

function my_array_sum($a) {
	
$count = count($a);

for ($x = 0 ; $x < $count; $x++) {
		$z += $a[$x];
		}	
	return $z;
}
echo my_array_sum($a);
?>