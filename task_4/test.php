<?php

require_once 'getDirectoryStatus.php';

function testGetDirectoryStatus()
{
	$testData1 = [
		'dirs' => [
			'folder1' =>[
				'is_readable' => true,
				'is_writable' => true,
			]
		],
		'files' => [
			'is_readable' => true,
			'is_writable' => true,
		]
	];

	$result = getDirectoryStatus("./test/");

	echo 'Результат ввода: '. var_export($result,true) . '. Результат теста: ' . ($result === $testData1 ? ' passed': 'failed').PHP_EOL;
}