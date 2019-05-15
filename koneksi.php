<?php
  // buat koneksi dengan database mysql
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db   = "anicu";
  $link = mysqli_connect($host,$user,$pass,$db);
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$link){
    die ("Koneksi dengan database gagal, silahkan cek kembali: ".mysql_connect_errno().
    " - ".mysql_connect_error());
  }
?>
