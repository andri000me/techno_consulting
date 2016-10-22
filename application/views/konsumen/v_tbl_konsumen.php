<?php include "/../templates/header.php"; ?>
<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2>Data Konsumen</h2>
			</div>
			<div id="content-main">
				<a href="<?php echo base_url() ?>konsumen/inputkonsumen" class="button">Buat Baru</a><br/>
				<br/>
				<div class="line-separator"></div><br/>
				<table class="table-strip">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>No HP</th>
						<th>Perusahaan</th>
						<th>Aksi</th>
					</tr>
					<?php 
						$i = 0;
						foreach ($konsumen as $row ) {
							$i++;
							$id_konsumen = $row['id_konsumen'];
							$nama = $row['nama'];
							$no_hp = $row['no_hp'];
							$perusahaan = $row['perusahaan'];
					?>
						<tr>
							<td><center><?php echo $i ?></center></td>
							<td><?php echo $nama ?></td>
							<td><?php echo $no_hp ?></td>
							<td><?php echo $perusahaan ?></td>
							<td>
								<a href="<?php echo base_url() ?>konsumen/editkonsumen/<?php echo $id_konsumen?>" ?>Edit</a> | 
								<a href="<?php echo base_url() ?>konsumen/hapuskonsumen/<?php echo $id_konsumen?>">Hapus</a>
							</td>
						</tr>
					<?php	
						}
					?>
				</table>
			</div>
		</div>
	</div>

<?php include "/../templates/footer.php"; ?>