<?php

require_once "connect.php";

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/css/styles.css"/>
	<title>Document</title>
</head>
<body>
	<h1>Tournament</h1>
	<?php
		$games = mysqli_query($connection, $query);
		$games = mysqli_fetch_all($games);
		foreach ($games as $game) {
			echo '
				<div class="game">
					<div class="country">
						<p class="country__name">'.$game[0].'</p>
						<p class="country__score">'.$game[2].'</p>
					</div>
					<div class="country">
						<p class="country__name">'.$game[1].'</p>
						<p class="country__score">'.$game[3].'</p>
					</div>
					<p class="game__stage">'.$game[4].'</p>
					<button type="button">Change</button>
				</div>
		';}
	?>
</body>
</html>