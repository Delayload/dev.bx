<?php

function buildTree(array &$elements, $parentId = null) {
	$branch = array();

	foreach ($elements as $element) {
		if ($element[6] == $parentId) {
			$children = buildTree($elements, $element[0]);
			if ($children) {
				$element['children'] = $children;
			}
			$branch[$element[0]] = $element;

		}
	}
	return $branch;
}