<?php
require_once "config.php";

$connection = mysqli_init();
$connectionResult = $connection->real_connect($host, $username, $password, $dbName);

if (!$connectionResult)
{
	$error = $connection->connect_error.": ".$connection->connect_error;
	trigger_error($error, E_USER_ERROR);
}

$ID = "1";
$ID = (int)$ID;

$query = "SELECT * FROM team WHERE ID = $ID";
$result = $connection->query($query);
if (!$result)
{
	trigger_error($connection, E_USER_ERROR);
}

$countries = [];

while ($row = $result->fetch_assoc())
{
	$countries[] = $row;
}

$row = $result->fetch_all();
//print_r($row);
print_r($countries);