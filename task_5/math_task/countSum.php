<?php
require_once 'readFromConsole.php';
require_once 'assertEquals.php';
require 'convertType.php';

function countSum() {
	$resultArray = [];
	$result = readFromConsole('Введите числа');
	$inputArray = explode(" ", $result);

	foreach ($inputArray as $value) {
		$value = convertType($value);
		if (is_numeric($value)) {
			array_push($resultArray, $value);
		}
		elseif ($value === 'stop') {
			break;
		}
	}
	$max = -INF;
	$colMax = 1;
	foreach ($resultArray as $value) {
		if ($value > $max) {
			$max = $value;
			$colMax = 1;
		} elseif ($value === $max) {
			$colMax++;
		}
	}
	echo 'Количество элементов равное наибольшему элементу:'.$colMax;
}

countSum();