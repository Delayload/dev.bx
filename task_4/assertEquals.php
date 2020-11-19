<?php

function test($restData, $result)
{
	echo 'Результат функции: '. var_export($result,true).PHP_EOL.PHP_EOL;
	echo 'Результат теста: ' . ($result === $restData ? ' passed': 'failed').PHP_EOL;
}