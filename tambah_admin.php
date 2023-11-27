<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$Nama			= $_POST['Nama'];
			$Alamat			= $_POST['Alamat'];
			$Longitude		= $_POST['Longitude'];
			$Latitude		= $_POST['Latitude'];
			$Tipe			= $_POST['Tipe'];
			$Telp			= $_POST['Telp'];

				$sql = mysqli_query($koneksi, "INSERT INTO `markers` 
				(`nama`, `alamat`, `longitude`, `latitude`, `tipe`, `telp`) 
				VALUES 
				('$Nama', '$Alamat', '$Longitude', '$Latitude', '$Tipe', '$Telp')") or die(mysqli_error($koneksi));

				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="halaman_admin.php?page=tampil_data";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
		}
		?>

		<form action="halaman_admin.php?page=tambah_data" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="Nama" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Alamat" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Longitude</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Longitude" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Latitude</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Latitude" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Tipe Tempat</label>
				<div class="col-md-6 col-sm-6">
					<select name="Tipe" class="form-control" required>
						<option value="">--- Pilih ---</option>
						<option value="Handicraft">Handicraft</option>
						<option value="Craft store">Craft store</option>
						<option value="Boutique">Boutique</option>
						<option value="Home goods store">Home goods store</option>
					</select>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Telephone</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="Telp" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
