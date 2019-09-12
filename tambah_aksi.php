<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
 
// menginput data ke database
  $name = $_REQUEST['nama'];
  $notel = $_REQUEST['notelp'];
  $emaik = $_REQUEST['email'];
  $alm = $_REQUEST['jumlah'];
  $mysqli = "INSERT INTO pembelian (nama,notelp,email, jumlah) VALUES ('$name', '$notel','$emaik','$alm')";
  $result = mysqli_query($koneksi, $mysqli);
  mysqli_close($koneksi);
  // mengalihkan halaman kembali ke index.php
	header("location:sukses.php");
?>