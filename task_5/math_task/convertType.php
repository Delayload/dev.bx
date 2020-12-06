<?php

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
		case '0':
			$input = 0;
			break;
		case is_numeric($input):
			$input = +$input;
			break;
		default:
			$input = (string)$input;
	}
	return $input;
}