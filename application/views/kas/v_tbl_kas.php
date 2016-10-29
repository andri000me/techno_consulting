<?php include "/../templates/header.php"; ?>
	<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2>Data Kas</h2>
			</div>
			<div id="content-main">
				<div class="form-group">
					Tanggal
					<input type="date" name="tanggal" placeholder="Id Konsumen" class="form-content"/>
					-
					<input type="date" name="tanggal" placeholder="Id Konsumen" class="form-content"/>
					<button type="submit" class="button">
						<span class="button-icon">
							<img src="<?php echo base_url("style/icon/search.png"); ?>" width="16px" height="16px">  
						</span>
						<div class="button-label">
							
						</div>
					</button> 
					|
					Jenis Transaksi
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
				<a href="<?php echo base_url() ?>kas/inputkas" class="button">
					<span class="button-icon">
						<img src="<?php echo base_url("style/icon/add.png"); ?>" width="16px" height="16px">  
					</span>
					<div class="button-label">
						Buat Baru
					</div>
				</a><br/><br/>
				<table class="table-strip">
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Keterangan</th>
						<th>Kredit</th>
						<th>Debit</th>
						<th>Aksi</th>
					</tr>
					<?php
						$i = 0;
						foreach ($kas as $row) {
							$i++;
							$id_kas = $row['id_kas'];
							$tanggal = $row['tanggal_transaksi'];
							$keterangan = $row['keterangan_transaksi'];
							$jenis_transaksi = $row['jenis_transaksi'];
							$nominal = $row['nominal_transaksi'];

							if($jenis_transaksi=="CR"){
								$db = "-";
								$cr = $nominal;
							} elseif($jenis_transaksi=="DB"){
								$db = $nominal;
								$cr = "-";
							}
					?>
					<tr align="center">
						<td>1</td>
						<td><?php echo $tanggal ?></td>
						<td align="left"><?php echo $keterangan ?></td>
						<td><?php echo $cr ?></td>
						<td><?php echo $db ?></td>
						<td>
							<center>
								<a href="<?php echo base_url() ?>kas/editkas/<?php echo $id_kas; ?>" class="button-cancel button-small">
									<span class="button-icon">
										<img src="<?php echo base_url("style/icon/edit.png"); ?>" width="14px" height="14px">  
									</span>
									<div class="button-label">
									</div>
								</a>
								|
								<a href="<?php echo base_url() ?>konsumen/hapuskonsumen>" class="button-delete button-small">
									<span class="button-icon">
										<img src="<?php echo base_url("style/icon/delete.png"); ?>" width="14px" height="14px">  
									</span>
									<div class="button-label">
									</div>
								</a>
							</center>
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>

<?php include "/../templates/footer.php"; ?>