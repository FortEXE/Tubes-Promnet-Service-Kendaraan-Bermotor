<!DOCTYPE html>
<html>
	<head>
		<title><?= $page_title ?></title>
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="<?= site_url('welcome') ?>">Propertiku</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarColor03">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('welcome/home') ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('welcome/tentang') ?>">Tentang</a>
					</li>
				</ul>

				<a class="nav-link" href="<?= site_url('welcome/login'); ?>" title="">login</a>

			</div>


		</nav>
		<hr>
		
		<div class="container">
			<h2><?= $page_title ?></h2>
				<br>
				<br>