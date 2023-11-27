<?php
//memasukkan file config.php
include('config.php');
?>

<!-- Container -->
<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Data Tempat Kerajinan Jawa Tengah</font>
    </center>
    <!-- Style Map -->
    <div id='map' style='height:600px; width: 100%; '></div>

    <!-- Keyword Pencarian Map -->
    <?php
    $keyword = $_POST['keyword'];
    if ($keyword != '') {
        $sql = mysqli_query($koneksi, "SELECT * FROM markers WHERE tipe LIKE '%" . $keyword . "%' OR
        nama LIKE '%" . $keyword . "%' OR
        alamat LIKE '%" . $keyword . "%'") or die(mysqli_error($koneksi));
    } else {
        $sql = mysqli_query($koneksi, "SELECT * FROM markers") or die(mysqli_error($koneksi));
    }
    ?>

    <!-- Tampilan Map -->
    <script type="text/javascript">
        L.mapbox.accessToken = 'pk.eyJ1IjoiYXNmaWxpYTEyMyIsImEiOiJja253MjY5YTYwZndnMndzNTcwMnU5MjB3In0.RhXSR-DPzCJVxK0TO6870g';
        var map = L.mapbox.map('map')
            .setView([-7.150975, 110.140259], 10)
            .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));

        var myLayer = L.mapbox.featureLayer().addTo(map);

        var geojson = {
            "type": "FeatureCollection",
            "features": [
                <?php
                while ($row = mysqli_fetch_array($sql)) {
                    echo '{"type": "Feature",
                                "properties": {
                                    "title":"' . $row['nama'] . '",
                                    "marker-color": "#f86767",
                                    "marker-size": "large",
                                    "marker-symbol":"star"
                        },
                        "geometry": {
                            "type" : "Point",
                            "coordinates": [' . $row['longitude'] . ',' . $row['latitude'] . ']
                        }
                        },';
                }
                ?>
            ]
        }

        myLayer.setGeoJSON(geojson);
        myLayer.on('click', function(e) {
            window.open(e.layer.feature.properties.url);
        });
    </script>

    <br>
    <!-- Pencarian -->
    <form action="" method="post" class="col-md-12"style="margin-top:20px">
        <input type="text" name="keyword" size="40" autofocus placeholder="Berdasarkan tipe kerajinan.." autocomplete="off" class="inp px-5 py-3 mx-3">
        <button type="submit" class=" btn btn-success px-3 py-3" name="cari">Cari!</button>
    </form>
    <!-- Tabel Data -->
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
                $no = 1;
                $keyword1 = $_POST['keyword'];
                //query ke database SELECT tabel markers urut berdasarkan id yang paling besar
                if ($keyword1 != '') {
                    $sql1 = mysqli_query($koneksi, "SELECT * FROM markers WHERE tipe LIKE '%" . $keyword1 . "%' OR
                    nama LIKE '%" . $keyword1 . "%' OR alamat LIKE '%" . $keyword1 . "%'") or die(mysqli_error($koneksi));
                } else {
                    $sql1 = mysqli_query($koneksi, "SELECT * FROM markers") or die(mysqli_error($koneksi));
                }

                //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                if (mysqli_num_rows($sql1) > 0) {
                    //membuat variabel $no untuk menyimpan nomor urut
                    $no = 1;
                    //melakukan perulangan while dengan dari dari query $sql
                    while ($data = mysqli_fetch_assoc($sql1)) {
                        //menampilkan data perulangan
                        echo '
						<tr>
							<td>' . $no . '</td>
							<td>' . $data['nama'] . '</td>
							<td>' . $data['alamat'] . '</td>
							<td>' . $data['longitude'] . '</td>
							<td>' . $data['latitude'] . '</td>
							<td>' . $data['tipe'] . '</td>
							<td>
								<a href="index1.php?page=detail_data&id=' . $data['id'] . '" class="btn btn-primary btn-sm">Detail</a>
							</td>
						</tr>
						';
                        $no++;
                    }
                    //jika query menghasilkan nilai 0
                } else {
                    echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
                }
                ?>
            <tbody>
        </table>

        <?php
        if ($keyword != '') {
            $sql2 = mysqli_query($koneksi, "SELECT * FROM markers WHERE tipe LIKE '%" . $keyword . "%' OR
            nama LIKE '%" . $keyword . "%' OR
            alamat LIKE '%" . $keyword . "%'") or die(mysqli_error($koneksi));
        }

        if (mysqli_num_rows($sql2) > 0) { ?>
            <div class="item form-group text-center py-3">
                <div class="col-md-6 col-sm-6 offset-md-3">
                    <a href="index1.php?page=tampil_data_user" class="btn btn-success px-3">Kembali</a>
                </div>
            </div>
        <?php
        }
        ?>

        <!-- End Container -->
    </div>