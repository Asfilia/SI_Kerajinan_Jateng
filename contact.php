<?php
//memasukkan file config.php
include('config.php');
?>


<section>
  <div class="container pl-3 p-sm-3">
    <div class="row">
      <div class="col-12 p-0 contact">
        <h2>Contact Us</h2>
      </div>
    </div>
  </div>

</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <p>Aplikasi berbasis system informasi geografis ini merupakan salah satu aplikasi penyedia tampilan geografis untuk tempat-tempat sentra kerajinan yang khusus berada di wilayah Jawa Tengah.</p>
        <hr />
      </div>
    </div>
  </div>
</section>

<section class="form-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6"><?php
      //jika tombol simpan di tekan/klik
      if (isset($_POST['submit'])) {
        $Name      = $_POST['Name'];
        $Email      = $_POST['Email'];
        $Contact    = $_POST['Contact'];
        $Country    = $_POST['Country'];
        $Subject      = $_POST['Subject'];
        $Message      = $_POST['Message'];

        $sql = mysqli_query($koneksi, "INSERT INTO `contact_us` 
      (`name`, `email`, `contact`, `country`, `subject`, `message`) 
      VALUES 
      ('$Name', '$Email', '$Contact', '$Country', '$Subject', '$Message')") or die(mysqli_error($koneksi));

        if ($sql) {
          echo '<script>alert("Berhasil menyimpan data."); document.location="index1.php?page=contact";</script>';
        } else {
          echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
        }
      }
      ?>
        <form action="index1.php?page=contact" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="text" name="Name" class="form-control" placeholder="Full name *">

            </div>
            <div class="form-group col-md-6">
              <input type="email" name="Email" class="form-control" placeholder="Email Address *">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <input type="number" name="Contact" class="form-control" placeholder="Contact Number *">

            </div>
            <div class="form-group col-md-6">
              <select class="form-control" name="Country" id="">
                <option selected>Country</option>
                <option>Indonesia</option>
                <option>Singapura</option>
                <option>Malaysia</option>
                <option>Vietnam</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="text" name="Subject" class="form-control" placeholder="Subject *">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <textarea name="Message" class="form-control" rows="3"></textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12 text-center">
              <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Send Message</button>
            </div>
          </div>

        </form>

      </div>
      <div class="col-md-6 address">
        <h5>Call Us / WhatsApp</h5>
        <p><a href="tel:+628135711234"><i class="fas fa-phone"></i> +(62) 8135711234 </a><br>
        </p>
        <h5>Email</h5>
        <p>
          <a href="mailto:sentrakerajinanjawatengah@gmail.com"><i class="fas fa-envelope"></i> sentrakerajinanjawatengah@gmail.com</a>
        </p>
        <h5>Media Social</h5>
        <p>
          <a href="#"><i class="fab fa-facebook-f"></i> sentrakerajinan_jateng</a><br>
          <a href="#"><i class="fab fa-instagram"></i></i> sentrakerajinan_jateng </a>
        </p>
        <h5>Address</h5>
        <p>
          Jl. Gajayana No.50, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144
        </p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container-fluid px-1">
    <div id='map' style='height:400px; width: 100%; '></div>

    <script type="text/javascript">
      L.mapbox.accessToken = 'pk.eyJ1IjoiYXNmaWxpYTEyMyIsImEiOiJja253MjY5YTYwZndnMndzNTcwMnU5MjB3In0.RhXSR-DPzCJVxK0TO6870g';
      var map = L.mapbox.map('map')
        .setView([-7.150975, 110.140259], 10)
        .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));

      var myLayer = L.mapbox.featureLayer().addTo(map);
    </script>
  </div>
</section>