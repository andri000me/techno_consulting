<?php include "/../templates/header.php"; ?>
<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2>Data Konsumen</h2>
			</div>
			<div id="content-main">
				<form class="form-container">
					<div class="form-group">
						<label for="id_konsumen" class="form-label">ID Konsumen</label>
						<label for="id_konsumen" class="form-label">: ID Konsumen</label>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Tanggal</label>
						<label for="id_konsumen" class="form-label">: Tanggal</label>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Nama</label>
						<label for="id_konsumen" class="form-label">: Nama</label>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">No HP</label>
						<label for="id_konsumen" class="form-label">: No HP</label>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Perusahaan</label>
						<label for="id_konsumen" class="form-label">: Perusahaan</label>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Alamat</label>
						<label for="id_konsumen" class="form-label">: Alamat</label>
					</div>
					<div class="form-group">
						<div class="form-label"></div>
						<input type="submit" name="sbmt_konsumen" value="Hapus" class="button form-content">
						<a href="<?php echo base_url() ?>konsumen">Kembali</a>
					</div>	
				</form>
			</div>
		</div>
	</div>

<?php include "/../templates/footer.php"; ?>