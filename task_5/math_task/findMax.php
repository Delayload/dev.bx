<?php
require_once 'readFromConsole.php';

require_once 'assertEquals.php';

function findMax() {
	$result = readFromConsole('Ввод в консоль');
	echo gettype($result), "\n";
	echo $result;
	return max;
}

findMax();