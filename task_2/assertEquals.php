<?php

function assertEquals($expectedValue, string $result,string $inputValue)
{
	$testResult = $result===$expectedValue? 'passed': 'failed';

	echo $result. ' ' .is_numeric($result).PHP_EOL;
	echo $expectedValue. ' ' .is_numeric($expectedValue).PHP_EOL;
	echo $inputValue.' '.$testResult;
}