<?php
require_once 'readFromConsole.php';

require_once 'assertEquals.php';

function findMax() {
	$result = readFromConsole('Ввод числа');

	print_r ($result);
}

findMax();