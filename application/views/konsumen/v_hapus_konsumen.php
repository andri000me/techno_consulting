<?php include "/../templates/header.php"; ?>
<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2> Hapus Data Konsumen</h2>
			</div>
			<div id="content-main">
				<?php 
					foreach ($konsumen as $row) {
						$nama = $row['nama'];
						$tanggal = $row['tanggal_konsumen'];
						$no_hp = $row['no_hp'];
						$perusahaan = $row['perusahaan'];
						$alamat = $row['alamat'];
						$id_konsumen = $row['id_konsumen'];
				?>
					<form class="form-container" method="post" action="<?php echo base_url()?>konsumen/hapusproses">
						<input type="hidden" name="id" value="<?php echo $id_konsumen ?>">
						<div class="form-group">
							<label for="id_konsumen" class="form-label">ID Konsumen</label>
							<label for="id_konsumen" class="form-label">: <?php echo $id_konsumen ?></label>
						</div>
						<div class="form-group">
							<label for="id_konsumen" class="form-label">Tanggal</label>
							<label for="id_konsumen" class="form-label">: <?php echo $tanggal ?></label>
						</div>
						<div class="form-group">
							<label for="id_konsumen" class="form-label">Nama</label>
							<label for="id_konsumen" class="form-label">: <?php echo $nama ?></label>
						</div>
						<div class="form-group">
							<label for="id_konsumen" class="form-label">No HP</label>
							<label for="id_konsumen" class="form-label">: <?php echo $no_hp ?></label>
						</div>
						<div class="form-group">
							<label for="id_konsumen" class="form-label">Perusahaan</label>
							<label for="id_konsumen" class="form-label">: <?php echo $perusahaan ?></label>
						</div>
						<div class="form-group">
							<label for="id_konsumen" class="form-label">Alamat</label>
							<label for="id_konsumen" class="form-label">: <?php echo $alamat ?></label>
						</div>
						<div class="form-group">
							<div class="form-label"></div>
							<input type="submit" name="sbmt_konsumen" value="Hapus" class="button form-content"> | 
							<a href="<?php echo base_url() ?>konsumen">Kembali</a>
						</div>	
					</form>
				<?php
					}
				?>
			</div>
		</div>
	</div>

<?php include "/../templates/footer.php"; ?>