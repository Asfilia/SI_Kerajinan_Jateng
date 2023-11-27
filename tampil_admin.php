<?php
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Data Tempat Kerajinan Jawa Tengah</font></center>
		<hr>
		<a href="halaman_admin.php?page=tambah_data"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Longitude</th>
					<th>Latitude</th>
					<th>Tipe</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel markers urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM markers") or die(mysqli_error($koneksi));
				//jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
				if(mysqli_num_rows($sql) > 0){
					//membuat variabel $no untuk menyimpan nomor urut
					$no = 1;
					//melakukan perulangan while dengan dari dari query $sql
					while($data = mysqli_fetch_assoc($sql)){
						//menampilkan data perulangan
						echo '
						<tr>
							<td>'.$no.'</td>
							<td>'.$data['nama'].'</td>
							<td>'.$data['alamat'].'</td>
							<td>'.$data['longitude'].'</td>
							<td>'.$data['latitude'].'</td>
							<td>'.$data['tipe'].'</td>
							<td>
								<a href="halaman_admin.php?page=detail_data&id='.$data['id'].'" class="btn btn-primary btn-sm">Detail</a>
								<a href="halaman_admin.php?page=edit_data&id='.$data['id'].'" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete.php?id='.$data['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
						$no++;
					}
				//jika query menghasilkan nilai 0
				}else{
					echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
				}
				?>
			<tbody>
		</table>
	</div>
	</div>
