<?php

function readFromConsole(string $question)
{
	echo 'Вводите числа по одному в консоль (не более 20). Для остановки введите "stop".'.PHP_EOL;
	$numbers = [];

	while (true) {
		echo $question.': ';
		$input = trim(fgets(STDIN));
		$input = convertType($input);

		 $flag = true;

		switch ($input) {
			case is_numeric($input):
				array_push($numbers, $input);
				break;
			case 'stop':
				$flag = false;
				break;
			default:
				echo 'Некорректный ввод!'.PHP_EOL;
		}
		echo 'Длинна массива = '.count($numbers).PHP_EOL;
		if ($flag === false || count($numbers) === 20) {
			break;
		}
	};

	return $numbers;
}

function convertType($input) {
	switch ($input)
	{
		case '':
			$input = null;
			break;
		case 'true':
			$input = true;
			break;
		case 'false':
			$input = false;
			break;
		case is_numeric($input):
			$input = +$input;
			break;
		default:
			$input = (string)$input;
	}
	return $input;
}