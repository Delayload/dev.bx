<?php

function readFromConsole($question)
{
	echo $question.': ';
	$input = trim(fgets(STDIN));

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
		case '!stop':
			$input = null;
			break;
		default:
			$input = (string)$input;
	}
	return $input;
}