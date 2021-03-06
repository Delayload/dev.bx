<?php

require_once 'readFromConsole.php';

require_once 'assertEquals.php';

function testReadFromConsole()
{
	$result = readFromConsole('Ввод в консоль "true" ');
	echo 'Результат ввода: '. var_export($result,true) . '. Результат теста: ' . ($result === true ? ' passed': 'failed').PHP_EOL.PHP_EOL;

	$result = readFromConsole('Ввод в консоль "false" ');
	echo 'Результат ввода: '. var_export($result,true) . '. Результат теста: ' . ($result === false ? ' passed': 'failed').PHP_EOL.PHP_EOL;

	$result = readFromConsole('Ввод в консоль "!stop" ');
	echo 'Результат ввода: '. var_export($result,true) . '. Результат теста: ' . ($result === '' ? ' passed': 'failed').PHP_EOL.PHP_EOL;

	$result = readFromConsole('Ввод в консоль "1.3" ');
	echo 'Результат ввода: '. var_export($result,true) . '. Результат теста: ' . ($result === 1.3 ? ' passed': 'failed').PHP_EOL.PHP_EOL;

	$result = readFromConsole('Ввод в консоль "1" ');
	echo 'Результат ввода: '. var_export($result,true) . '. Результат теста: ' . ($result === 1 ? ' passed': 'failed').PHP_EOL.PHP_EOL;

	$result = readFromConsole('Ввод в консоль "test" ');
	echo 'Результат ввода: '. var_export($result,true) . '. Результат теста: ' . ($result === test ? ' passed': 'failed').PHP_EOL.PHP_EOL;
}

//testReadFromConsole();


assertEquals(true,readFromConsole('Ввод в консоль "true" '), 'Результат теста: ');
assertEquals(false,readFromConsole('Ввод в консоль "false" '), 'Результат теста: ');
assertEquals(!stop,readFromConsole('Ввод в консоль "!stop" '), 'Результат теста: ');
assertEquals(1.3,readFromConsole('Ввод в консоль "1.3" '), 'Результат теста: ');
assertEquals(1,readFromConsole('Ввод в консоль "1"" '), 'Результат теста: ');
assertEquals(test,readFromConsole('Ввод в консоль "test" '), 'Результат теста: ');
/*
readFromConsole('', 'true') - true;
readFromConsole('', 'false') - false;
readFromConsole('', '!stop') - null;
readFromConsole('', '1.3') - 1.3;
readFromConsole('', '1') - 1;
readFromConsole('', 'test') = 'test;
 */

