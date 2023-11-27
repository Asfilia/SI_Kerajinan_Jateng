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

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <center>
              &nbsp; <a href="index.php" class='fas fa-globe-asia fa-3x' style="color:#fff;"><span>
                  <font size="4.95" color="white" face="Helvetica Neue"> Tempat Kerajinan</font>
                </span></a>
            </center>
          </div>

          <div class="clearfix"></div>


          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li><a href="index.php"><i class="fa fa-home"></i> Home <span class="fa fa-chevron"></span></a>
                </li>
                <li><a href="index.php?page=tampil_data_user"><i class="fa fa-desktop"></i> Data Tempat Kerajinan<span class="fa fa-chevron"></span></a>
                <li>
                <li><a href="index.php?page=map_penyebaran"><i class="fa fa-desktop"></i> Peta Penyebaran<span class="fa fa-chevron"></span></a>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a><i class="fa fa-gear"></i> Settings <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open">
                <a href="#" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="assets/images/user.png" alt="">Login
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="login.php"><i class="fa fa-sign-out pull-right"></i> Login</a>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content - HALAMAN UTAMA ISI DISINI -->
      <div class="right_col" role="main">
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
          default:
            #code...
            include 'home.php';
            break;
        }
        ?>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Copyright @ 2021 Sistem Informasi Geografis || UIN Malang
        </div>
        <div class="clearfix"></div>
      </footer>
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