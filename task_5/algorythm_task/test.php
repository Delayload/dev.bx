<?php

require 'assertEquals.php';
require 'Rook.php';

function rookTest() {
	$rook1 = new Rook();
	assertEquals('Да', $rook1 -> setValue('1 2 1 3'), 'Результат теста 1: ');
	assertEquals('Нет', $rook1 -> setValue('1 2 2 3'), 'Результат теста 2: ');
	assertEquals('Нет', $rook1 -> setValue('1 2 2 3 4'), 'Результат теста 3: ');
	assertEquals('Нет', $rook1 -> setValue('1 2 2'), 'Результат теста 3: ');
	assertEquals('Нет', $rook1 -> setValue('1 2 9 2'), 'Результат теста 3: ');
	assertEquals('Нет', $rook1 -> setValue('1 2 йцу 2'), 'Результат теста 3: ');
}

rookTest();