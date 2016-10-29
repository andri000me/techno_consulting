<?php include "/../templates/header.php"; ?>
<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2> Input Data Kas</h2>
			</div>
			<div id="content-main">
				<a href="<?php echo base_url() ?>kas" class="button">
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
				<form class="form-container" method="post" action="<?php echo base_url()?>kas/inputproses">
					<div class="form-group">
						<label for="id_transaksi" class="form-label">ID Kas</label>
						<input type="text"  class="form-content" disabled="true" value="<?php echo $id_kas ?>" />
						<input type="hidden" name="id_kas" value="<?php echo $id_kas ?>">
					</div>
					<div class="form-group">
						<label for="tanggal" class="form-label">Tanggal</label>
						<input type="date" name="tanggal" placeholder="Id Konsumen" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="jenis_transaksi" class="form-label">Jenis Transaksi</label>
						<select name="jenis_transaksi" class="form-content">
							<option>Pilih</option>
							<option value="DB">Pengeluaran</option>
							<option value="CR">Pemasukan</option>
						</select>
					</div>
					<div class="form-group">
						<label for="keterangan" class="form-label">Keterangan</label>
						<input type="text" name="keterangan" placeholder="Keterangan" class="long-text form-conten "/>
					</div>
					<div class="form-group">
						<label for="nominal" class="form-label">Nominal </label>
						<input type="text" name="nominal" placeholder="Nominal" class="form-content"/>
					</div>
					<div class="form-group">
						<br/>
						<div class="form-label"></div>
						<button type="submit" class="button-save">
							<span class="button-icon">
								<img src="<?php echo base_url("style/icon/save.png"); ?>" width="16px" height="16px">  
							</span>
							<div class="button-label">
								Simpan
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