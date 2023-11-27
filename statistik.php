<?php 
    require("config.php"); 
    $query="SELECT * FROM markers";
    $sql= mysqli_query($con, $query);
    ?>
<div class="col-8">
    <?php
    $q = "SELECT COUNT(type) AS Tipe_Kerajinan FROM markers WHERE tipe=Handicraft";
    $s = mysqli_query($con, $q);
    $result = mysqli_fetch_assoc($s);

    $q1 = "SELECT COUNT(type) AS Tipe_Kerajinan FROM markers WHERE tipe=Craft store";
    $s1 = mysqli_query($con, $q1);
    $result1 = mysqli_fetch_assoc($s1);

    $q2 = "SELECT COUNT(type) AS Tipe_Kerajinan FROM markers WHERE tipe=Boutique";
    $s2 = mysqli_query($con, $q2);
    $result2 = mysqli_fetch_assoc($s2);

    $q3 = "SELECT COUNT(type) AS Tipe_Kerajinan FROM markers WHERE tipe=Home goods store";
    $s3 = mysqli_query($con, $q3);
    $result3 = mysqli_fetch_assoc($s3);
    $datapoints = [
        array("y" => $result["Tipe_Kerajinan"], "label" => "Handicraft"),
        array("y" => $result1["Tipe_Kerajinan"], "label" => "Craft store"),
        array("y" => $result1["Tipe_Kerajinan"], "label" => "Boutique"),
        array("y" => $result1["Tipe_Kerajinan"], "label" => "Home goods store"),
    ];
    ?>
</div>
<script>
    window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title: {
                text: "Jumlah Tipe Kerajinan di Jawa Tengah"
            },
            data: [{
                type: "column",
                yvalueFormatString: "#,##0 Lokasi",
                indexLabel: "{y}",
                indexLabelPlacement: "inside",
                indexLabelFontWeight: "Bolder",
                indexLabelFontColor: "white",
                dataPoints: <?= json_encode($datapoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        var chart1 = new CanvasJS.Chart("chartContainer1", {
            animationEnabled: true,
            title: {
                text: "Jumlah Tipe Kerajinan di Jawa Tengah"
            },
            data: [{
                type: "line",
                lineThickness: 5,
                markerColor: "red",
                markerSize: 8,
                dataPoints: <?= json_encode($datapoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        var chart2 = new CanvasJS.Chart("chartContainer2", {
            animationEnabled: true,
            title: {
                text: "Jumlah Tipe Kerajinan di Jawa Tengah"
            },
            data: [{
                type: "bar",
                yvalueFormatString: "#,##0 Lokasi",
                indexLabel: "{y}",
                indexLabelPlacement: "inside",
                indexLabelFontWeight: "Bolder",
                indexLabelFontColor: "white",
                dataPoints: <?= json_encode($datapoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();
        chart1.render();
        chart2.render();
    }
</script>
<center>
    <div id="chartContainer" style="height:300px;width:70%;"></div>
</center>
<center>
    <div id="chartContainer1" style="height:300px;width:70%;"></div>
</center>
<center>
    <div id="chartContainer2" style="height:300px;width:70%;"></div>
</center>