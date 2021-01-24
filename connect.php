<?php
require_once "config.php";

$connection = mysqli_init();
$connectionResult = $connection->real_connect($host, $username, $password, $dbName);

if (!$connectionResult)
{
	$error = $connection->connect_error.": ".$connection->connect_error;
	trigger_error($error, E_USER_ERROR);
}

$query = "SELECT game.ID ,t.NAME, b.NAME, FIRST_TEAM_SCORE, SECOND_TEAM_SCORE, s.NAME, parent_id
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
