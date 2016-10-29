<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url("style/css/custom.css"); ?>" />
	<script src="<?php echo base_url("style/js/jquery-3.1.1.min.js"); ?>" ></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#dt_master").click(function(){
				$("#dt_master_detail").toggle();
			});
			$("#dt_proyek").click(function(){
				$("#dt_proyek_detail").toggle();
			});
		});
	</script>
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
					<li id="dt_proyek"><a href="#">Proyek</a>
						<ul id="dt_proyek_detail" class="nav-dropdown">
							<li><a href="#">-Proyek Berjalan</a></li>
							<li><a href="#">-Proyek Selesai</a></li>
						</ul>
					</li>
                    <li><a href="<?php echo base_url()?>kas">Kas</a></li>
					<li><a href="#">Pembayaran</a></li>
                    <li><a href="<?php echo base_url()?>konsumen">Konsumen</a></li>
                    <li id="dt_master"><a href="#">Data Master</a>
						<ul id="dt_master_detail" class="nav-dropdown">
							<li><a href="<?php echo base_url()?>datamaster/dataktgrproyek">-Kategori Proyek</a></li>
							<li><a href="<?php echo base_url()?>datamaster/dataktgrservis">-Kategori Servis</a></li>
							<li><a href="<?php echo base_url()?>datamaster/dataservis">-Servis</a></li>
						</ul>
					</li>
					<li><a href="#">Laporan</a></li>
				</ul>
			</div>
		</div>
	</div>
	