<?php
// Аналог функции sort
$arr = [3,2,8,-6,-5,4,3];

function my_sort ($arr) 
{
	$count = count($arr);
	$sort = true;
	
	while ($sort) {
		$sort = false;
			for ($x = 0; $x < $count - 1; $x++) {
				if ($arr[$x] > $arr[$x+1]) {
					$temp = $arr[$x];
					$arr[$x] = $arr[$x+1];
					$arr[$x+1] = $temp;
					$sort = true;
			}
		}
	}
	return $arr;
}
var_dump(my_sort ($arr));

?>