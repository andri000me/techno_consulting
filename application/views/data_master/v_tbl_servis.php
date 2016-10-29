<?php include "/../templates/header.php"; ?>
	<div id="content">
		<div id="content-container">
			<div id="content-header">
				<h2>Data Servis</h2>
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
				<button id="inputModalBtn" class="button">
					<span class="button-icon">
						<img src="<?php echo base_url("style/icon/add.png"); ?>" width="16px" height="16px">  
					</span>
					<div class="button-label">
						Buat Baru
					</div>
				</button>
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
						<td align="center">
							<button id="updateModalBtn" class="button-cancel button-small">
								<span class="button-icon">
									<img src="<?php echo base_url("style/icon/edit.png"); ?>" width="14px" height="14px">  
								</span>
								<div class="button-label">
									Edit
								</div>
							</button>
							|
							<button id="deleteModalBtn" class="button-delete button-small">
								<span class="button-icon">
									<img src="<?php echo base_url("style/icon/delete.png"); ?>" width="14px" height="14px">  
								</span>
								<div class="button-label">
									Hapus
								</div>
							</button>
						</td>
					</tr>
				</table>
				<!-- Input Modal-->
				<div id="inputModal" class="modal">
					<!-- Modal content -->
					<div class="modal-content">
						<span class="close">x</span>
						<br/>
						<h3>Input Baru</h3>
						<br/>
						<div class="line-separator"></div><br/>
						<form>
							<div class="form-group">
								<label for="id_servis" class="form-label">Id Servis</label>
								<input type="text" name="id_servis" class="form-content"/>
							</div>
							<div class="form-group">
								<label for="id_servis" class="form-label">Kategori Servis</label>
								<select class="form-content">
									<option>Pilih</option>
								</select>
							</div>
							<div class="form-group">
								<label for="id_servis" class="form-label">Keterangan</label>
								<input type="text" name="id_servis" class="form-content long-text"/>
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
							</div>
						</form>
					</div>
				</div>
				<!-- Update Modal-->
				<div id="updateModal" class="modal">
					<div class="modal-content">
						<span class="close">x</span>
						<br/>
						<h3>Update Data</h3>
						<br/>
						<div class="line-separator"></div><br/>
						<form>
							<div class="form-group">
								<label for="id_servis" class="form-label">Id Servis</label>
								<input type="text" name="id_servis" class="form-content"/>
							</div>
							<div class="form-group">
								<label for="id_servis" class="form-label">Kategori Servis</label>
								<select class="form-content">
									<option>Pilih</option>
								</select>
							</div>
							<div class="form-group">
								<label for="id_servis" class="form-label">Keterangan</label>
								<input type="text" name="id_servis" class="form-content long-text"/>
							</div>
							<div class="form-group">
								<br/>
								<div class="form-label"></div>
								<button type="submit" class="button-save">
									<span class="button-icon">
										<img src="<?php echo base_url("style/icon/save.png"); ?>" width="16px" height="16px">  
									</span>
									<div class="button-label">
										Update
									</div>
								</button> 
							</div>
						</form>
					</div>
				</div>
				<!-- Delete Modal-->
				<div id="deleteModal" class="modal">
					<div class="modal-content">
						<span class="close">x</span>
						<br/>
						<h3>Hapus Data</h3>
						<br/>
						<div class="line-separator"></div><br/>
						<form>
							<div class="form-group">
								Apakah anda yakin akan menghapus data ?
							</div>
							<div class="form-group">
								<br/>
								<div class="form-label"></div>
								<button type="submit" class="button-save">
									<span class="button-icon">
										<img src="<?php echo base_url("style/icon/save.png"); ?>" width="14px" height="14px">  
									</span>
									<div class="button-label">
										Iya
									</div>
								</button> 
								<button class="button-cancel">
									<span class="button-icon">
										<img src="<?php echo base_url("style/icon/cancel.png"); ?>" width="14px" height="14px">  
									</span>
									<div class="button-label">
										Tidak
									</div>
								</button> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		// Get the input modal
		var inputmodal = document.getElementById('inputModal');
		// Get the button that opens the modal
		var inputbtn = document.getElementById("inputModalBtn");
		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];
		// When the user clicks the button, open the modal
		inputbtn.onclick = function() {
			inputmodal.style.display = "block";
		}
		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			inputmodal.style.display = "none";
		}
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == inputmodal) {
				inputmodal.style.display = "none";
			}
		}

		//Get the Update Modal
		var updatemodal = document.getElementById('updateModal');
		var updatebtn = document.getElementById("updateModalBtn");
		var span = document.getElementsByClassName("close")[1];
		updatebtn.onclick = function() {
			updatemodal.style.display = "block";
		}
		span.onclick = function() {
			updatemodal.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == updatemodal) {
				updatemodal.style.display = "none";
			}
		}

		//Get the Delete Modal
		var deletemodal = document.getElementById('deleteModal');
		var deletebtn = document.getElementById("deleteModalBtn");
		var span = document.getElementsByClassName("close")[2];
		deletebtn.onclick = function() {
			deletemodal.style.display = "block";
		}
		span.onclick = function() {
			deletemodal.style.display = "none";
		}
		window.onclick = function(event) {
			if (event.target == deletemodal) {
				deletemodal.style.display = "none";
			}
		}
	</script>
<?php include "/../templates/footer.php"; ?>