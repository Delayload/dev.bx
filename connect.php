<?php
require_once "config.php";

$connection = mysqli_init();
$connectionResult = $connection->real_connect($host, $username, $password, $dbName);

if (!$connectionResult)
{
	$error = $connection->connect_error.": ".$connection->connect_error;
	trigger_error($error, E_USER_ERROR);
}

$query = "SELECT t.NAME, b.NAME, FIRST_TEAM_SCORE, SECOND_TEAM_SCORE, s.NAME
FROM game
	     JOIN team t ON t.ID = FIRST_TEAM_ID
	     JOIN team b ON b.ID = SECOND_TEAM_ID
	     JOIN stage s ON s.ID = STAGE
ORDER BY s.NAME;
";
$result = $connection->query($query);
if (!$result)
{
	trigger_error($connection, E_USER_ERROR);
}

$games = $result->fetch_all();

$tournamentGames = array(
	'match' => array()
);

//print_r($games);

$firstChildren = array(
	'$firstChildren' => array()
);

$lastChildren = array(
	'$lastChildren' => array()
);

foreach ($games as $element) {
	array_push($element, defineStage($element[4]));
	if ($element[4] == '1') {
		//добавление предыдущих матчей
		array_push($element,searchChildren($games, $element[0], $element[1]));
		//добавление в дерево
		array_push($tournamentGames['match'], $element);
	}
	if ($element[4] == '-1') {
		//добавление в дерево
		array_push($tournamentGames['match'], $element);
	}
}

function findMin($matches) {
	$min = 10;
	foreach ($matches as $match) {
		if ($match[4] < $min) {
			$min = $match[4];
		}
	}
	if ($min == -1) {
		$min = 1;
	}
	return $min;
}

$min = findMin($games);

function buildTree($elements, &$min) {
	$branch = array();

	foreach ($elements as $element) {
		if ($element[4] == $min) {
			$min++;
			$children = buildTree($elements,$min);
			if ($children) {
				$element['children'] = $children;
			}
			$branch[$element['id']] = $element;
			unset($elements[$element['id']]);
		}
	}
	return $branch;
}

function searchChildren($matches, $firstCountry, $lastCountry) {
	foreach ($matches as $match) {
		if (($match[0] == $firstCountry or $match[1] == $firstCountry) and ($match[4] == '2')) {
			array_push($match, defineStage($match[4]));
			$firstChildren = $match;
		}
		elseif (($match[0] == $lastCountry or $match[1] == $lastCountry) and ($match[4] == '2')) {
			array_push($match, defineStage($match[4]));
			$lastChildren = $match;
		}
	}
	return array ($firstChildren, $lastChildren);
}


function defineStage($stage)
{
	switch ($stage)
	{
		case '1':
			$stage = 'Final';
			break;
		case '-1':
			$stage = '3rd place';
			break;
		case '2':
			$stage = '1/2';
			break;
		case '4':
			$stage = '1/4';
			break;
		case '8':
			$stage = '1/8';
			break;
		default:
			break;
	}
	return $stage;
}

//var_dump(buildTree($games, 0));
var_dump($tournamentGames);
