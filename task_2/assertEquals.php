<?php

function assertEquals(string $expectedValue, string $result,string $inputValue)
{
	$testResult = ($result===$expectedValue)? 'passed': 'failed';
	echo $inputValue.' '.$testResult.PHP_EOL.PHP_EOL;
}