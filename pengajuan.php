<?php
//memasukkan file config.php
include('config.php');
?>


	<div class="container" style="margin-top:20px">
		<center><font size="6">Pengajuan dari Pengguna</font></center>
		<hr>
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Subject</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
				//query ke database SELECT tabel markers urut berdasarkan id yang paling besar
				$sql = mysqli_query($koneksi, "SELECT * FROM contact_us") or die(mysqli_error($koneksi));
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
							<td>'.$data['name'].'</td>
							<td>'.$data['email'].'</td>
							<td>'.$data['subject'].'</td>
							<td>
								<a href="halaman_admin.php?page=detail_pengajuan&id='.$data['id'].'" class="btn btn-primary btn-sm">Detail</a>
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
