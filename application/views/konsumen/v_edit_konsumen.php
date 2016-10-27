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
				
				<form method="post" action="<?php echo base_url()?>konsumen/editproses">
					<div class="form-group">
						<label for="id_konsumen" class="form-label">ID Konsumen</label>
						<input type="text"  value="<?php echo $id_konsumen ?>" class="form-content" disabled="true" />
						<input type="hidden" name="id_konsumen" value="<?php echo $id_konsumen ?>">
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
						<textarea name="alamat" class="form-content"><?php echo $alamat ?></textarea>
					</div>
					<div class="form-group">
						<div class="form-label"></div>
						<button type="submit" class="button-save">
							<span class="button-icon">
								<img src="<?php echo base_url("style/icon/save.png"); ?>" width="16px" height="16px">  
							</span>
							<div class="button-label">
								Update
							</div>
						</button>
						| 
						<a href="<?php echo base_url() ?>konsumen" class="button">
							<span class="button-icon">
								<img src="<?php echo base_url("style/icon/back.png"); ?>" width="16px" height="16px">  
							</span>
							<div class="button-label">
								Kembali
							</div>
						</a>
					</div>
				</form>
				<?php
					}
				?>
			</div>
		</div>
	</div>

<?php include "/../templates/footer.php"; ?>