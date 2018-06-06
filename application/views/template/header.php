<!DOCTYPE html>
<html>
	<head>
		<title><?= $page_title ?></title>
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/journal/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="<?= site_url('controller_utama') ?>">Toko Service Motor AI</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarColor03">
				<ul class="navbar-nav mr-auto">
				
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('controller_utama/home') ?>">Home <span class="sr-only">(current)</span></a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="<?= site_url('controller_utama/tentang') ?>">Tentang</a>
					</li>
					
				</ul>

				<a class="nav-link" href="<?= site_url('controller_utama/sesi'); ?>" title="">Cek Sesi</a>
				<a class="nav-link" href="<?= site_url('cart_barang/show'); ?>" title="">Cek Barang</a>
				<a class="nav-link" href="<?= site_url('cart_jasa/show'); ?>" title="">Cek Jasa</a>

			</div>


		</nav>
		<hr>
		
		
		
		