<?php

class Numbers
{
		
	function evenNumbers($value)
	{
		for ($b = 0; $b < $value; $b+=2) { 
		$arr[] = $b;
		}
		return $arr;
	}
}
$obj = new Numbers;
var_dump($obj->evenNumbers("12"));
?>