<?php

function getDirectoryStatus($path)
{
	if (file_exists($path))
	{
		$list = [
			'dirs' => [],
			'files' => [],
		];
		$currentDir = opendir($path);
		while ($element = readdir($currentDir))
		{
			if (in_array($element, ['.','..']))
			{
				continue;
			}

			if (is_dir($element))
			{
				$list["dirs"][$element] = [];
				$list["dirs"][$element]["is_readable"] = is_readable($element)? "true" : "false";
				$list["dirs"][$element]["is_writable"] = is_writable($element)? "true" : "false";
			}
			else
			{
				$list["files"][] = $element;
				$list["files"][$element]["is_readable"] = is_readable($element)? "true" : "false";
				$list["files"][$element]["is_writable"] = is_writable($element)? "true" : "false";
				$list["files"][$element]["size"] = filesize($element);
			}
		}
		closedir($currentDir);
	}
	else
	{
		$list = 'Некорректный ввод';
	}
	return $list;
}