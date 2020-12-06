<?php


function readFromConsole(string $question)
{
	echo 'Вводите числа по одному в консоль разделяя пробелом (не более 20). Для остановки введите "stop".'.PHP_EOL;
	echo $question.': ';
	return trim(fgets(STDIN));
}
