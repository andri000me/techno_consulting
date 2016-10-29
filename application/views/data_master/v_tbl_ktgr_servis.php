<?php include "/../templates/header.php"; ?>
	<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2>Data Kategori Servis</h2>
			</div>
			<div id="content-main">
				<div class="form-group">
					Nama :
					<input type="text" name="nama" class="form-content">
					<button type="submit" class="button">
						<span class="button-icon">
							<img src="<?php echo base_url("style/icon/search.png"); ?>" width="16px" height="16px">  
						</span>
						<div class="button-label">
							
						</div>
					</button>
					|
					Jenis Servis
					<select name="jenis_transaksi" class="form-content">
						<option>Pilih</option>
						<option value="debit">Pengeluaran</option>
						<option value="kredit">Pemasukan</option>
					</select>
					<button type="submit" class="button">
						<span class="button-icon">
							<img src="<?php echo base_url("style/icon/search.png"); ?>" width="16px" height="16px">  
						</span>
						<div class="button-label">
							
						</div>
					</button> 
				</div>
				<br/><div class="line-separator"></div><br/>
				<a href="<?php echo base_url() ?>konsumen/inputkonsumen" class="button">
					<span class="button-icon">
						<img src="<?php echo base_url("style/icon/add.png"); ?>" width="16px" height="16px">  
					</span>
					<div class="button-label">
						Buat Baru
					</div>
				</a>
				<br/><br/>
				<table class="table-strip">
					<tr>
						<th>No</th>
						<th>ID Servis</th>
						<th>ID Kategori Servis</th>
						<th>Keterangan Service</th>
						<th>Aksi</th>
					</tr>
					<tr>
						<td align="center">1</td>
						<td>ID0001</td>
						<td>ID0002</td>
						<td>Aplikasi Desktop</td>
						<td>Aksi</td>
					</tr>
				</table>
			</div>
		</div>
	</div>

<?php include "/../templates/footer.php"; ?>