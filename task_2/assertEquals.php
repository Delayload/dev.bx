<?php

function assertEquals($expectedValue, string $result,string $inputValue)
{
	$testResult = $result===$expectedValue? 'passed': 'failed';
	return $inputValue.' - '.$testResult;
}