<?php include "/../templates/header.php"; ?>
	<style type="text/css">
		#tes{
			display: none;
		}
	</style>
	<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2>Data Servis</h2>
			</div>
			<div id="content-main">
				<table>
					<tr>
						<td>ID</td>
						<td>Nama</td>
						<td>Aksi</td>
					</tr>
					<tr>
						<td>ar0101011</td>
						<td>Nama lengkap here!</td>
						<td><button onclick="liat('id 1')">Liat</button></td>
					</tr>
					<tr>
						<td>ar0102002</td>
						<td>Nama Pendek Hwere!</td>
						<td><button onclick="liat('id 2')">Liat</button></td>
					</tr>
				</table>
				<div id="tes">asdfasdfasdf</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var btn = document.getElementById("myBtn");
		var p = document.getElementById("tes");
		function liat(str) {
			alert(str);
		}
	</script>
<?php include "/../templates/footer.php"; ?>