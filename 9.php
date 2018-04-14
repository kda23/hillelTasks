<?php
// Аналог функции strpos

function my_strpos ($a, $b, $x) {
	$stlenA = strlen($a); 
	$stlenB = strlen($b); 
	for ($x; $x < $stlenA; $x++) {
		if ($b[0] == $a[$x]) {
			$z = $x;
			for ($y = 1; $y < $stlenB; $y++) {
				if ($b[$y] == $a[$x+$y]){
					continue;
				} else {
					$z = false;
					break;
				}
			} 
			continue;
		} elseif ($z == true) {
			break;
		}
	}
	return $z;
}
echo my_strpos ('a daswbasdasbacwawawasdasdascw bbb11', 'waw', 5);
?>