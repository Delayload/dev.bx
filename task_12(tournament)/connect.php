<?php
require_once "config.php";

$connection = mysqli_init();
$connectionResult = $connection->real_connect($host, $username, $password, $dbName);

if (!$connectionResult)
{
	$error = $connection->connect_error.": ".$connection->connect_error;
	trigger_error($error, E_USER_ERROR);
}

$query = "SELECT * FROM team";
$result = $connection->query($query);
if (!$result)
{
	trigger_error($connection, E_USER_ERROR);
}

while ($row = $result->fetch_assoc())
{
	print_r($row);
}

$row = $result->fetch_all();