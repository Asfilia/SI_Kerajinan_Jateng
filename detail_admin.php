<?php include('config.php'); ?>


<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Detail Data</font>
    </center>
    <?php
    //jika sudah mendapatkan parameter GET id dari URL
    if (isset($_GET['id'])) {
        //membuat variabel $id untuk menyimpan id dari GET id di URL
        $Id = $_GET['id'];

        //query ke database SELECT tabel markers berdasarkan id = $id
        $select = mysqli_query($koneksi, "SELECT * FROM `markers` WHERE id= '$Id'") or die(mysqli_error($koneksi));

        //jika hasil query = 0 maka muncul pesan error
        if (mysqli_num_rows($select) == 0) {
            echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
            exit();
            //jika hasil query > 0
        } else {
            //membuat variabel $data dan menyimpan data row dari query
            $data = mysqli_fetch_assoc($select);
        }
    }
    ?>

    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <form action="halaman_admin.php?page=edit_data&id=<?php echo $Id; ?>" method="post">
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="Nama" class="form-control" size="4" value="<?php echo $data['nama']; ?>" readonly required>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
                        <div class="col-md-6 col-sm-6">
                            <textarea name="Alamat" id="Alamat" class="form-control" cols="30" rows="10" readonly required><?php echo $data['alamat']; ?></textarea>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Longitude</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="Longitude" class="form-control" value="<?php echo $data['longitude']; ?>" readonly required>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Latitude</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="Latitude" class="form-control" value="<?php echo $data['latitude']; ?>" readonly required>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Tipe</label>
                        <div class="col-md-6 col-sm-6">
                            <select name="Tipe" class="form-control" readonly required>
                                <option value="">---Pilih---</option>
                                <option value="Handicraft" <?php if ($data['tipe'] == 'Handicraft') {
                                                                echo 'selected';
                                                            } ?>>Handicraft</option>
                                <option value="Craft store" <?php if ($data['tipe'] == 'Craft store') {
                                                                echo 'selected';
                                                            } ?>>Craft store</option>
                                <option value="Boutique" <?php if ($data['tipe'] == 'Boutique') {
                                                                echo 'selected';
                                                            } ?>>Boutique</option>
                                <option value="Home goods store" <?php if ($data['tipe'] == 'Home goods store') {
                                                                        echo 'selected';
                                                                    } ?>>Home goods store</option>
                            </select>
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Telephone</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="text" name="Telephone" class="form-control" value="<?php echo $data['telp']; ?>" readonly required>
                        </div>
                    </div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a href="halaman_admin.php?page=tampil_data" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col">
                <!-- Tampilan Map -->
                <div id='map' style='height:100%; width: 100%; '></div>
                <script type="text/javascript">
                    L.mapbox.accessToken = 'pk.eyJ1IjoiYXNmaWxpYTEyMyIsImEiOiJja253MjY5YTYwZndnMndzNTcwMnU5MjB3In0.RhXSR-DPzCJVxK0TO6870g';
                    var map = L.mapbox.map('map')
                        .setView([<?php echo $data['latitude']; ?>, <?php echo $data['longitude']; ?>], 10)
                        .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));

                    var myLayer = L.mapbox.featureLayer().addTo(map);

                    var geojson = {
                        "type": "FeatureCollection",
                        "features": [
                            <?php
                            $select = mysqli_query($koneksi, "SELECT * FROM `markers` WHERE id= '$Id'") or die(mysqli_error($koneksi));
                            while ($data1 = mysqli_fetch_assoc($select)) {
                                echo '{"type": "Feature",
                                "properties": {
                                    "title":"' . $data1['nama'] . '",
                                    "marker-color": "#f86767",
                                    "marker-size": "large",
                                    "marker-symbol":"star"
                        },
                        "geometry": {
                            "type" : "Point",
                            "coordinates": [' . $data1['longitude'] . ',' . $data1['latitude'] . ']
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

            </div>
        </div>
    </div>

</div>