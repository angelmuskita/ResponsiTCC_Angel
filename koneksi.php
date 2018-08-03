<?php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $kon = mysql_connect($host, $user, $pass);
  if (!$kon) {
  	die("Gagal Koneksi");
  }
  // kalo sampe sini berarti berhasil koneksi
  $hasil = mysql_select_db("database");
  if (!$hasil){
  	die("Gagal Pilih Database");
  }
?>