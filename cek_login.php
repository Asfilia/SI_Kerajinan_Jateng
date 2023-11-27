<?php include('config.php');

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($koneksi, "SELECT * FROM `multiuser` WHERE username='$username' and password='$password'") or die(mysqli_error($koneksi));
$cek = mysqli_num_rows($login);

if($cek > 0){

 $data = mysqli_fetch_assoc($login);

 if($data['level']=="admin"){

  $_SESSION['username'] = $username;
  $_SESSION['level'] = "admin";
  header("location:halaman_admin.php");

 }else{

  header("location:login.php?pesan=gagal");
 } 
}else{
 header("location:login.php?pesan=gagal");
}

?>