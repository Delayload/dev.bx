<?php

function sumNumbers(string $s)
{
	$arr = explode(" ", $s);
	foreach ($arr as &$value) {
		$value = +$value;
	}
	$sum = array_sum($arr);
	return $sum;
}