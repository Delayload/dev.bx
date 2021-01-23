<?php
require_once "connect.php";
require_once "buildTree.php";
require_once "outTree.php";
$tree = buildTree($games, $index = null);
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
		<div class="tabletree">
			<?php
				outTree($tree);
			?>
		</div>
	</body>
</html>