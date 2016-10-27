<?php include "/../templates/header.php"; ?>
<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2> Input Data Konsumen</h2>
			</div>
			<div id="content-main">
				<a href="<?php echo base_url() ?>konsumen" class="button">
					<span class="button-icon">
						<img src="<?php echo base_url("style/icon/back.png"); ?>" width="16px" height="16px">  
					</span>
					<div class="button-label">
						Kembali
					</div>
				</a>
				<br/>
				<br/>
				<div class="line-separator"></div><br/>
				<form class="form-container" method="post" action="<?php echo base_url()?>konsumen/inputproses">
					<div class="form-group">
						<label for="id_konsumen" class="form-label">ID Konsumen</label>
						<input type="text"  value="<?php echo $id_konsumen ?>" class="form-content" disabled="true" />
						<input type="hidden" name="id_konsumen" value="<?php echo $id_konsumen ?>">
					</div>
					<div class="form-group">
						<label for="tanggal" class="form-label">Tanggal</label>
						<input type="date" name="tanggal" placeholder="Id Konsumen" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="nama" class="form-label">Nama</label>
						<input type="text" name="nama" placeholder="Nama" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="no_hp" class="form-label">No HP</label>
						<input type="text" name="no_hp" placeholder="No Handphone" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="perusahaan" class="form-label">Perusahaan</label>
						<input type="text" name="perusahaan" placeholder="Perusahaan" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="alamat" class="form-label">Alamat</label>
						<textarea name="alamat" class="form-content"></textarea>
					</div>
					<div class="form-group">
						<div class="form-label"></div>
						<button type="submit" class="button-save">
							<span class="button-icon">
								<img src="<?php echo base_url("style/icon/save.png"); ?>" width="16px" height="16px">  
							</span>
							<div class="button-label">
								Buat Baru
							</div>
						</button> 
						|
						<button type="reset" class="button-cancel">
							<span class="button-icon">
								<img src="<?php echo base_url("style/icon/cancel.png"); ?>" width="16px" height="16px">  
							</span>
							<div class="button-label">
								Batal
							</div>
						</button> 
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include "/../templates/footer.php"; ?>