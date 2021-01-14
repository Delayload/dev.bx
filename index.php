<?php

require_once "connect.php";

$games = mysqli_query($connection, $query);
$games = mysqli_fetch_all($games);
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="/css/styles.css"/>
	<title>Tournament</title>
</head>
<body>
	<h1>Tournament</h1>
	<div class="wrap">
		<div class="stage">
			<p class="round__name">1\8 Финала</p>
			<?php
			foreach ($games as $game) {
				if ($game[4] == '1/8') {
					echo '
				<div class="game">
					<div class="country">
						<div class="country__name">
							<p>'.$game[0].'</p>
						</div>
						<div class="country__score">
							<p>'.$game[2].'</p>
						</div>
					</div>
					<div class="country">
						<div class="country__name">
							<p>'.$game[1].'</p>
						</div>
						<div class="country__score">
							<p>'.$game[3].'</p>
						</div>
					</div>
					<button type="button">Change</button>
				</div>
				';
				}
			}
			?>
		</div>
		<div class="stage">
			<p class="round__name">1\4 Финала</p>
			<?php
			foreach ($games as $game) {
				if ($game[4] == '1/4') {
					echo '
				<div class="game">
					<div class="country">
						<div class="country__name">
							<p>'.$game[0].'</p>
						</div>
						<div class="country__score">
							<p>'.$game[2].'</p>
						</div>
					</div>
					<div class="country">
						<div class="country__name">
							<p>'.$game[1].'</p>
						</div>
						<div class="country__score">
							<p>'.$game[3].'</p>
						</div>
					</div>
					<button type="button">Change</button>
				</div>
				';
				}
			}
			?>
		</div>
		<div class="stage">
			<p class="round__name">1\2 Финала</p>
			<?php
			foreach ($games as $game) {
				if ($game[4] == '1/2') {
					echo '
				<div class="game">
					<div class="country">
						<div class="country__name">
							<p>'.$game[0].'</p>
						</div>
						<div class="country__score">
							<p>'.$game[2].'</p>
						</div>
					</div>
					<div class="country">
						<div class="country__name">
							<p>'.$game[1].'</p>
						</div>
						<div class="country__score">
							<p>'.$game[3].'</p>
						</div>
					</div>
					<button type="button">Change</button>
				</div>
				';
				}
			}
			?>
		</div>
		<div class="stage">
			<?php
			foreach ($games as $game) {
				if ($game[4] != '1/8' and $game[4] != '1/4' and $game[4] != '1/2') {
					echo '
				<p class="game__stage">'.$game[4].'</p>
				<div class="game">
					<div class="country">
						<div class="country__name">
							<p>'.$game[0].'</p>
						</div>
						<div class="country__score">
							<p>'.$game[2].'</p>
						</div>
					</div>
					<div class="country">
						<div class="country__name">
							<p>'.$game[1].'</p>
						</div>
						<div class="country__score">
							<p>'.$game[3].'</p>
						</div>
					</div>
					<button type="button">Change</button>
				</div>
				';
				}
			}
			?>
		</div>
	</div>
</body>
</html>