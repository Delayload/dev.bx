<?php

function assertEquals($expectedValue, $result, $inputValue)
{
	$testResult = ($result===$expectedValue)? 'passed': 'failed';
	echo $inputValue.' '.$testResult.PHP_EOL;
}