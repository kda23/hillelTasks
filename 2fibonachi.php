<?php
//Вывести определенное количество элементов последовательности Фибоначчи

class Fibonachi 
{

	function new_fibonachi($a)
	{
		$arr = [0, 1];
		for ($b = 0; $b < $a-2; $b++) {
			$arr[] = $arr[$b+1] + $arr[$b];
			}
		 return $arr;
	}
}
$obj = new Fibonachi;
var_dump($obj->new_fibonachi("10"));
?>