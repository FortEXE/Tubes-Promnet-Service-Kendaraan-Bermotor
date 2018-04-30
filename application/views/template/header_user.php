<!DOCTYPE html>
<html>
	<head>
		<title><?= $page_title ?></title>
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="<?= site_url('user') ?>">Propertiku</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarColor03">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('user/home') ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('user/jualProperti') ?>">Jual Properti</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('user/beliProperti') ?>">Beli Properti</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('user/tentang') ?>">Tentang</a>
					</li>
				</ul>
				<!-- <form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
				</form> -->

				<p class="nav navbar-text nav-link"><?= $this->session->userdata('username'); ?></p>
				<a class="nav-link" href="<?= site_url('account/proses_logout'); ?>" title="">logout</a>

			</div>
		</nav>
		<hr>
		<div class="container">
			<h1><?= $page_title ?></h1>
			<br>
			<br>