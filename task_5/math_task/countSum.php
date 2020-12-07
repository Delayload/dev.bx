<?php
require_once 'readFromConsole.php';
require_once 'assertEquals.php';
require 'convertType.php';

function countSum($result) {
	if ($result == null) {
		$result = readFromConsole('Введите числа');
	}
	$inputArray = explode(" ", $result);

	$max = -INF;
	$colMax = 1;
	$index = 0;

	foreach ($inputArray as $value) {
		$index++;
		$value = convertType($value);

		if (is_numeric($value) && $index < 21) {
			if ($value > $max) {
				$max = $value;
				$colMax = 1;
			} elseif ($value === $max) {
				$colMax++;
			}
		}
		elseif ($value === 'stop') {
			break;
		}
	}
	return $colMax;
}