<?php


header('Content-Type: text/html; charset=UTF-8');

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_regex_encoding('UTF-8');

?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="styles.css">
	<title>Value Proposition</title>
</head>
<body>
<header class="header">
	<div class="wrap wrap--header">
		<div class="header__menu header-menu">
			<nav class="header-menu__nav">
				<ul class="header-menu__nav-list">
					<li class="header-menu__nav-item"><a href="#" class="header-menu__nav-link">Link 1</a></li>
					<li class="header-menu__nav-item"><a href="#" class="header-menu__nav-link">Link 2</a></li>
					<li class="header-menu__nav-item"><a href="#" class="header-menu__nav-link">Link 3</a></li>
					<li class="header-menu__nav-item"><a href="#" class="header-menu__nav-link">Link 4</a></li>
				</ul>
			</nav>
			<a class="header-menu__logo">Trade</a>
			<a class="header-menu__link link" href="login.php">Free Trial</a>
		</div>
		<div class="header__intro">
			<h1 class="header__intro-title">Value Proposition</h1>
			<p class="header__intro-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<a class="header__intro-link link" href="login.php">Start free trial</a>
		</div>
	</div>
</header>
<main>
	<section class="page">
		<div class="wrap--page">
			<div class="page__header">
				<h2 class="page__title">Your Best Value Proposition</h2>
				<p class="page__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
			</div>
			<ul class="page__list">
				<li class="page__item">
					<article class="page__card card">
						<div class="page__inner card__inner">
							<img src="images/card-1.jpg" alt="bike" class="page__card-img">
						</div>
						<p class="page__card-text card__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
						<a href="#" class="page__card-link card__link">Learn More</a>
					</article>
				</li>
				<li class="page__item">
					<article class="page__card">
						<div class="page__inner">
							<img src="images/card-2.jpg" alt="bike" class="page__card-img">
						</div>
						<p class="page__card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
						<a href="#" class="page__card-link">Learn More</a>
					</article>
				</li>
				<li class="page__item">
					<article class="page__card">
						<div class="page__inner">
							<img src="images/card-3.jpg" alt="bike" class="page__card-img">
						</div>
						<p class="page__card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
						<a href="#" class="page__card-link">Learn More</a>
					</article>
				</li>
			</ul>
			<div class="page__product">
				<div class="page__product-content">
					<h3 class="page__product-title">Feature that is amazing</h3>
					<p class="page__product-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
				<img src="images/product.jpg" alt="" class="page__product-img">
			</div>
		</div>
	</section>
	<section class="partners">
		<div class="wrap--partners">
			<h2 class="partners__title">Trusted by the World’s Best Companies</h2>
			<ul class="partners__list">
				<li class="partners__item"><a href="#" class="partners__link"><img src="images/partners-1.svg" alt="facebook"></a></li>
				<li class="partners__item"><a href="#" class="partners__link"><img src="images/partners-2.svg" alt="twitter"></a></li>
				<li class="partners__item"><a href="#" class="partners__link"><img src="images/partners-3.svg" alt="vk"></a></li>
				<li class="partners__item"><a href="#" class="partners__link"><img src="images/partners-4.svg" alt="instagram"></a></li>
				<li class="partners__item"><a href="#" class="partners__link"><img src="images/partners-5.svg" alt="bitrix24"></a></li>
				<li class="partners__item"><a href="#" class="partners__link"><img src="images/partners-6.svg" alt="avito"></a></li>
			</ul>
		</div>
	</section>
</main>
<footer class="footer">
	<div class="wrap--footer">
		<div class="footer__about">
			<h3 class="footer__name">Trade</h3>
			<p class="footer__years">© 2010 — 2020</p>
			<p class="footer__privacy">Privacy — Terms</p>
		</div>
		<div class="footer__containers">
			<div class="footer__container">
				<h3 class="footer__container-title">Product</h3>
				<ul class="footer__container-list">
					<li class="footer__container-item"><a href="product.php" class="footer__container-link">Product</a></li>
					<li class="footer__container-item"><a href="product.php" class="footer__container-link">Product</a></li>
					<li class="footer__container-item"><a href="product.php" class="footer__container-link">Product</a></li>
				</ul>
			</div>
			<div class="footer__container">
				<h3 class="footer__container-title">Features</h3>
				<ul class="footer__container-list">
					<li class="footer__container-item"><a href="detail.php" class="footer__container-link">Features</a></li>
					<li class="footer__container-item"><a href="detail.php" class="footer__container-link">Features</a></li>
					<li class="footer__container-item"><a href="detail.php" class="footer__container-link">Features</a></li>
				</ul>
			</div>
			<div class="footer__container">
				<h3 class="footer__container-title">Resources</h3>
				<ul class="footer__container-list">
					<li class="footer__container-item"><a href="#" class="footer__container-link">Resources</a></li>
					<li class="footer__container-item"><a href="#" class="footer__container-link">Resources</a></li>
					<li class="footer__container-item"><a href="#" class="footer__container-link">Resources</a></li>
				</ul>
			</div>
			<div class="footer__container">
				<h3 class="footer__container-title">Company</h3>
				<ul class="footer__container-list">
					<li class="footer__container-item"><a href="#" class="footer__container-link">Company</a></li>
					<li class="footer__container-item"><a href="#" class="footer__container-link">Company</a></li>
					<li class="footer__container-item"><a href="#" class="footer__container-link">Company</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
</body>
</html>