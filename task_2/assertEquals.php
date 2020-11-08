<?php

function assertEquals(string $expectedValue, string $result,string $inputValue)
{
	$testResult = ($result===$expectedValue)? 'passed': 'failed';

	echo '$result = '.$result. ' .is_numeric = ' .is_numeric($result).PHP_EOL;
	echo '$expectedValue = '.$expectedValue. ' .is_numeric = ' .is_numeric($expectedValue).PHP_EOL;
	echo $inputValue.' '.$testResult;
}