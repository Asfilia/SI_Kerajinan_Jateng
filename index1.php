<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/Address.svg" type="image/ico" />

    <title> Sistem Informasi Tempat Kerajinan </title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <script src="https://kit.fontawesome.com/a262295ecd.js" crossorigin="anonymous"></script>
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="assets/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="assets/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
    <!-- Javascript Blocks -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css" rel='stylesheet' />

    <script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>
    <link href="https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css" rel='stylesheet' />

    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
    <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css" rel='stylesheet' />

    <!-- Link Animated CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style1.css">
</head>

<body class="nav-md bg-white">
    <div class="container">
        <header>
            <div class="p-1" id="topHeader">
                <div class="container">
                </div>
            </div>
            <div id="bottomHeader">
                <div class="container-fluid">
                    <nav class="navbar navbar-dark navbar-expand-md" style="background-color:#004d80;">
                        <a class="navbar-brand" href="">
                            <img src="imgs/logo_text_white_small.png" width="250px" alt="">
                        </a>
                        <button data-toggle="collapse" data-target="#navbarToggler" type="button" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarToggler">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index1.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index1.php?page=tampil_data_user">Data Sentra</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index1.php?page=map_penyebaran">Map Penyebaran</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index1.php?page=about">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index1.php?page=contact">Contact Us</a>
                                </li>
                                <li class="nav-item-right text-right">
                                    <a class="nav-link" href="login.php">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>

        </header>
        <!-- /top navigation -->

        <!-- page content - HALAMAN UTAMA ISI DISINI -->
        <div class="container px-5 pt-3">

            <?php
            $queries = array();
            parse_str($_SERVER['QUERY_STRING'], $queries);
            error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
            switch ($queries['page']) {
                case 'tampil_data_user':
                    # code...
                    include 'tampil_user.php';
                    break;
                case 'detail_data':
                    # code...
                    include 'detail_user.php';
                    break;
                case 'about':
                    # code...
                    include 'about.php';
                    break;
                case 'contact':
                    # code...
                    include 'contact.php';
                    break;
                case 'map_penyebaran':
                    # code...
                    include 'map.php';
                    break;
                case 'statistik':
                    # code...
                    include 'statistik.php';
                    break;
                default:
                    #code...
                    include 'home.php';
                    break;
            }
            ?>
        </div>
        <!-- /page content -->

        <!-- footer content -->

        <!-- /footer content -->
    </div>
    </div>

    <!-- jQuery -->
    <script src="assets/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="assets/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="assets/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="assets/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="assets/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="assets/skycons/skycons.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="assets/js/custom.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bindle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHrUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

</html>