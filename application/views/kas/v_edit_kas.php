<?php include "/../templates/header.php"; ?>
<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2>Edit Data Kas</h2>
			</div>
			<div id="content-main">
				<?php 
					foreach ($kas as $row) {
						$id_kas = $row['id_kas'];
						$tanggal = $row['tanggal_transaksi'];
						$jenis_transaksi = $row['jenis_transaksi'];
						$keterangan = $row['keterangan_transaksi'];
						$nominal = $row['nominal_transaksi'];
					}
				?>
				<form method="post" action="<?php echo base_url()?>kas/editproses">
					<div class="form-group">
						<label for="id_transaksi" class="form-label">ID Kas</label>
						<input type="text"  class="form-content" disabled="true" value="<?php echo $id_kas?>" />
						<input type="hidden" name="id_kas" value="<?php echo $id_kas?>">
					</div>
					<div class="form-group">
						<label for="tanggal" class="form-label">Tanggal</label>
						<input type="date" name="tanggal" value="<?php echo $tanggal ?>" class="form-content"/>
					</div>
					<div class="form-group">
						<label for="jenis_transaksi" class="form-label">Jenis Transaksi</label>
						<select name="jenis_transaksi" class="form-content">
							<?php echo "<option>Pilih</option>"?>
							<?php
								if($jenis_transaksi=="DB"){
									echo "<option value=\"DB\" selected=\"selected\">Pengeluaran</option><option value=\"CR\">Pemasukan</option>";
								} else if($jenis_transaksi=="CR"){
									echo "<option value=\"DB\" >Pengeluaran</option><option value=\"CR\" selected=\"selected\">Pemasukan</option>";
								} 
							?>
						</select>
					</div>
					<div class="form-group">
						<label for="keterangan" class="form-label">Keterangan</label>
						<input type="text" name="keterangan" value="<?php echo $keterangan ?>" class="long-text form-conten "/>
					</div>
					<div class="form-group">
						<label for="nominal" class="form-label">Nominal </label>
						<input type="text" name="nominal" value="<?php echo $nominal ?>" class="form-content"/>
					</div>
					<br/>
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
						<a href="<?php echo base_url() ?>kas" class="button">
							<span class="button-icon">
								<img src="<?php echo base_url("style/icon/back.png"); ?>" width="16px" height="16px">  
							</span>
							<div class="button-label">
								Kembali
							</div>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php include "/../templates/footer.php"; ?>