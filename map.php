<?php
//memasukkan file config.php
include('config.php');
?>

<!-- Container -->
<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Peta Sentra Kerajinan Jawa Tengah</font>
    </center>
    <!-- Style Map -->
    <div id='map' style='height: 800px;; width: 100%; '></div>

    <!-- Keyword Pencarian Map -->
    <?php
        $sql = mysqli_query($koneksi, "SELECT * FROM markers") or die(mysqli_error($koneksi));
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
</div>