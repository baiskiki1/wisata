<?php 
session_start();
include 'koneksi.php';

$username = $_POST['tusername'];
$password = $_POST['tpassword'];

$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
  $_SESSION['username'] = $username;
  $_SESSION['status'] = "login";
  header("location:beranda.php");
}else{
  header("location:index.php?pesan=gagal");
}
?>