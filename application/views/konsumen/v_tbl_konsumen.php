<?php include "/../templates/header.php"; ?>
<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2>Data Konsumen</h2>
			</div>
			<div id="content-main">
				<a href="konsumen/inputkonsumen" class="button">Buat Baru</a>
				<br/>
				<br/>
				<table class="table-strip">
					<tr class="table-headerrow-strip">
						<th>No</th>
						<th>Nama</th>
						<th>No Handphone</th>
						<th>Perusahaan</th>
						<th>Aksi</th>
					</tr>
					<tr class="table-row-strip">
						<td>1</td>
						<td>Wildan Nugraha</td>
						<td>081563333307</td>
						<td>Techno Consulting</td>
						<td><a href="<?php echo base_url() ?>konsumen/editkonsumen">Edit</a> | <a href="<?php echo base_url() ?>konsumen/hapuskonsumen">Hapus</a></td>
					</tr>
					<tr class="table-row-strip">
						<td>1</td>
						<td>Wildan Nugraha</td>
						<td>081563333307</td>
						<td>Techno Consulting</td>
						<td><a href="<?php echo base_url() ?>konsumen/editkonsumen">Edit</a> | <a href="<?php echo base_url() ?>konsumen/hapuskonsumen">Hapus</a></td>
					</tr>
				</table>
			</div>
		</div>
	</div>

<?php include "/../templates/footer.php"; ?>