<?php

require_once 'getDirectoryStatus.php';
require_once 'assertEquals.php';

function testGetDirectoryStatus()
{
	$result = getDirectoryStatus(".");

	$testData1 = [
		"dirs" => [
			"test1" =>[
				"is_readable" => true,
				"is_writable" => true,
			],
			"test2" =>[
				"is_readable" => true,
				"is_writable" => true,
			]
		],
		"files" => [
			"getDirectoryStatus.php" =>[
				"is_readable" => true,
				"is_writable" => true,
				"size" => 799,
			],
			"task.md" =>[
				"is_readable" => true,
				"is_writable" => true,
				"size" => 1267,
			],
			"assertEquals.php" =>[
				"is_readable" => true,
				"is_writable" => true,
				"size" => 205,
			],
			"testGetDirectoryStatus.php" =>[
				"is_readable" => true,
				"is_writable" => true,
				"size" => 482,
			],
		]
	];

	test($testData1,$result);

	$testData2 = 'Некорректный ввод';
	$result = getDirectoryStatus("./asd/");
	test($testData2,$result);
	$testData2 = 'Некорректный ввод';
	$result = getDirectoryStatus("asdasd");
	test($testData2,$result);
}

testGetDirectoryStatus();