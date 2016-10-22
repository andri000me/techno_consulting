<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url("style/css/custom.css"); ?>" />
</head>
<body>
	<div id="header">
		DASHBOARD
	</div>
	<div id="nav">
		<div id="nav-container">
			<div id="nav-container-img">
				IMG
			</div>
			<div id="nav-container-link">
				<ul>
					<li><a href="#">Dashboard</a></li>
					<li><a href="#">Proyek</a>
						<ul class="nav-dropdown">
							<li><a href="#">Proyek Berjalan</a></li>
							<li><a href="#">Proyek Selesai</a></li>
						</ul>
					</li>
                    <li><a href="#">Kas</a>
                        <ul class="nav-dropdown">
							<li><a href="#">Kas Masuk</a></li>
							<li><a href="#">Kas Keluar</a></li>
						</ul>
                    </li>
					<li><a href="#">Pembayaran</a></li>
                    <li><a href="<?php echo base_url()?>konsumen">Konsumen</a></li>
                    <li><a href="#">Data Master</a>
						<ul class="nav-dropdown">
							<li><a href="#">Kategori Proyek</a></li>
							<li><a href="#">Kategori Servis</a></li>
							<li><a href="#">Servis</a></li>
						</ul>
					</li>
					<li><a href="#">Laporan</a></li>
				</ul>
			</div>
		</div>
	</div>
	