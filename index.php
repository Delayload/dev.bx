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
	<div class="table">
		<div class="stage">
			<p class="round__name">1\8 Финала</p>
			<?php
			for($i = 0; $i < count($games); ++$i) {
				if ($games[$i][4] == '1/8') {
					echo '
		<div class="game">
			<div class="country">
				<div class="country__name">
					<p>'.$games[$i][0].'</p>
				</div>
				<div class="country__score">
					<p>'.$games[$i][2].'</p>
				</div>
			</div>
			<div class="country">
				<div class="country__name">
					<p>'.$games[$i][1].'</p>
				</div>
				<div class="country__score">
					<p>'.$games[$i][3].'</p>
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
			for($i = 0; $i < count($games); ++$i) {
				if ($games[$i][4] == '1/4') {
					echo '
			<div class="game">
				<div class="country">
					<div class="country__name">
						<p>'.$games[$i][0].'</p>
					</div>
					<div class="country__score">
						<p>'.$games[$i][2].'</p>
					</div>
				</div>
				<div class="country">
					<div class="country__name">
						<p>'.$games[$i][1].'</p>
					</div>
					<div class="country__score">
						<p>'.$games[$i][3].'</p>
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
			for($i = 0; $i < count($games); ++$i) {
				if ($games[$i][4] == '1/2') {
					echo '
			<div class="game">
				<div class="country">
					<div class="country__name">
						<p>'.$games[$i][0].'</p>
					</div>
					<div class="country__score">
						<p>'.$games[$i][2].'</p>
					</div>
				</div>
				<div class="country">
					<div class="country__name">
						<p>'.$games[$i][1].'</p>
					</div>
					<div class="country__score">
						<p>'.$games[$i][3].'</p>
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
			<p class="round__name">3rd place</p>
			<?php
			for($i = 0; $i < count($games); ++$i) {
				if ($games[$i][4] == '3rd place') {
					echo '
			<div class="game">
				<div class="country">
					<div class="country__name">
						<p>'.$games[$i][0].'</p>
					</div>
					<div class="country__score">
						<p>'.$games[$i][2].'</p>
					</div>
				</div>
				<div class="country">
					<div class="country__name">
						<p>'.$games[$i][1].'</p>
					</div>
					<div class="country__score">
						<p>'.$games[$i][3].'</p>
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
			<p class="round__name">Final</p>
			<?php
			for($i = 0; $i < count($games); ++$i) {
				if ($games[$i][4] == 'Final') {
					echo '
			<div class="game">
				<div class="country">
					<div class="country__name">
						<p>'.$games[$i][0].'</p>
					</div>
					<div class="country__score">
						<p>'.$games[$i][2].'</p>
					</div>
				</div>
				<div class="country">
					<div class="country__name">
						<p>'.$games[$i][1].'</p>
					</div>
					<div class="country__score">
						<p>'.$games[$i][3].'</p>
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

	<div class="report">
		<table class="report__table">
			<tr>
				<th>команда</th>
				<th>место в турнире</th>
				<th>общая результативность команды по очкам/голам за весь турнир</th>
				<th>средняя результативность за матч</th>
				<th>лучшая результативность за матч</th>
			</tr>
			<?php
			foreach ($games as $game) {
				if ($games[$i][4] == '1/8') {
					echo '
			<tr class="game">
				<td class="country">'.$game[0].'</td>
			</tr>
			';
				}
			}
			?>
		</table>
	</div>
</body>
</html>