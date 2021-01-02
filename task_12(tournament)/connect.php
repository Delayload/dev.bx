<?php
$connection = mysqli_init();
$host = 'localhost';
$username = 'student';
$password = 'student';
$dbName = 'tournament';
$connectionResult = $connection->real_connect($host, $username, $password, $dbName);