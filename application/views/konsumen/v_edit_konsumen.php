<?php include "/../templates/header.php"; ?>
<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2>Edit Data Konsumen</h2>
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
				
				<form>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">ID Konsumen</label>
						<input type="text" name="id_konsumen" value="<?php echo $id_konsumen ?>" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="tanggal" class="form-label">Tanggal</label>
						<input type="date" name="tanggal" value="<?php echo $tanggal?>" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="nama" class="form-label">Nama</label>
						<input type="text" name="nama" value="<?php echo $nama ?>" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="no_hp" class="form-label">No HP</label>
						<input type="text" name="no_hp" value="<?php echo $no_hp ?>" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="Perusahaan" class="form-label">Perusahaan</label>
						<input type="text" name="perusahaan" value="<?php echo $perusahaan ?>" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="alamat" class="form-label">Alamat</label>
						<textarea name="alamat" class="form-content"><?php echo $perusahaan ?></textarea>
					</div>
					<div class="form-group">
						<div class="form-label"></div>
						<input type="submit" name="sbmt_konsumen" value="Update" class="button">
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