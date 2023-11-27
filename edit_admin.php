<?php include('config.php'); ?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Edit Data</font></center>

		<hr>

		<?php
		//jika sudah mendapatkan parameter GET id dari URL
		if(isset($_GET['id'])){
			//membuat variabel $id untuk menyimpan id dari GET id di URL
			$Id = $_GET['id'];

			//query ke database SELECT tabel markers berdasarkan id = $id
			$select = mysqli_query($koneksi, "SELECT * FROM `markers` WHERE id= '$Id'") or die(mysqli_error($koneksi));

			//jika hasil query = 0 maka muncul pesan error
			if(mysqli_num_rows($select) == 0){
				echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
				exit();
			//jika hasil query > 0
			}else{
				//membuat variabel $data dan menyimpan data row dari query
				$data = mysqli_fetch_assoc($select);
				
			}
		}
		?>

		<?php
		//jika tombol simpan di tekan/klik
		if(isset($_POST['submit'])){
			$Nama			= $_POST['Nama'];
			$Alamat			= $_POST['Alamat'];
			$Longitude		= $_POST['Longitude'];
			$Latitude		= $_POST['Latitude'];
			$Tipe			= $_POST['Tipe'];
			$Telp			= $_POST['Telp'];

			$sql = mysqli_query($koneksi, "UPDATE markers SET nama='$Nama', alamat='$Alamat', longitude='$Longitude', latitude='$Latitude', tipe= '$Tipe', telp='$Telp' WHERE id='$Id'") or die(mysqli_error($koneksi));

			if($sql){
				echo '<script>alert("Berhasil menyimpan data."); document.location="halaman_admin.php?page=tampil_data";</script>';
			}else{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
		}
		?>

		<form action="halaman_admin.php?page=edit_data&id=<?php echo $Id; ?>" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Nama" class="form-control" size="4" value="<?php echo $data['nama']; ?>"required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat" class="form-control" value="<?php echo $data['alamat']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Longitude</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Longitude" class="form-control" value="<?php echo $data['longitude']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Latitude</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Latitude" class="form-control" value="<?php echo $data['latitude']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tipe</label>
				<div class="col-md-6 col-sm-6">
					<select name="Tipe" class="form-control" required>
						<option value="">---Pilih---</option>
						<option value="Handicraft" <?php if($data['tipe'] == 'Handicraft'){ echo 'selected'; } ?>>Handicraft</option>
						<option value="Craft store" <?php if($data['tipe'] == 'Craft store'){ echo 'selected'; } ?>>Craft store</option>
						<option value="Boutique" <?php if($data['tipe'] == 'Boutique'){ echo 'selected'; } ?>>Boutique</option>
						<option value="Home goods store" <?php if($data['tipe'] == 'Home goods store'){ echo 'selected'; } ?>>Home goods store</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Telephone</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Telp" class="form-control" value="<?php echo $data['telp']; ?>" required>
				</div>
			</div>
			<div class="item form-group">
				<div class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
					<a href="halaman_admin.php?page=tampil_data" class="btn btn-warning">Kembali</a>
				</div>
			</div>
		</form>
	</div>
