<?php include "templates/header.php"; ?>
<div id="content">
		<div id="content-container">
			<div id="content-header">
				INI HEADER
			</div>
			<div id="content-main">
				<form class="form-container">
					<div class="form-group">
						<label for="id_konsumen" class="form-label">ID Konsumen</label>
						<input type="text" name="id_konsumen" placeholder="Id Konsumen" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Tanggal</label>
						<input type="text" name="id_konsumen" placeholder="Id Konsumen" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Nama</label>
						<input type="text" name="id_konsumen" placeholder="Nama" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">No HP</label>
						<input type="text" name="id_konsumen" placeholder="No Handphone" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Perusahaan</label>
						<input type="text" name="id_konsumen" placeholder="Perusahaan" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="id_konsumen" class="form-label">Alamat</label>
						<textarea class="form-content"></textarea>
					</div>
					<div class="form-group">
						<div class="form-label"></div>
						<input type="submit" name="sbmt_konsumen" value="Simpan" class="form-content">
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include "templates/footer.php"; ?>