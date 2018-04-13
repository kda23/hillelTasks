<?php
//Аналог функции in_array

$b = [2,-2,12.4,1,6,5,1,3];

function my_in_array($a, $b, $c) {
	$count = count($b);	
		if ($c) {
			for ($x = 0; $x <= $count; $x++) {
				if ($a === $b[$x]) {
					$z = 1;
				}
			}
		}
		if (!$c) {
			for ($x = 0; $x <= $count; $x++) {
				if ($a == $b[$x]) {
					$z = 1;
				}
			}
		}
	return $z;
}
echo my_in_array('12.4', $b, false);
?>