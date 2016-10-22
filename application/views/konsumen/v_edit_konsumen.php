<?php include "/../templates/header.php"; ?>
<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2>Data Konsumen</h2>
			</div>
			<div id="content-main">
				<form>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">ID Konsumen</label>
						<input type="text" name="id_konsumen" value="ID Konsumen" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Tanggal</label>
						<input type="text" name="id_konsumen" placeholder="Id Konsumen" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Nama</label>
						<input type="text" name="id_konsumen" value="Nama" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">No HP</label>
						<input type="text" name="id_konsumen" value="No Handphone" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Perusahaan</label>
						<input type="text" name="id_konsumen" value="Perusahaan" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Alamat</label>
						<textarea class="form-content">Isi Text Area</textarea>
					</div>
					<div class="form-group">
						<div class="form-label"></div>
						<input type="submit" name="sbmt_konsumen" value="Update" class="button">
						<a href="<?php echo base_url() ?>konsumen">Kembali</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include "/../templates/footer.php"; ?>