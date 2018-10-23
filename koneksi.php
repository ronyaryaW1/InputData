<?php
// konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "Perpustakaan";
// perintah php untuk akses ke database
$Koneksi = mysqli_connect($host, $user, $password, $database) or die ('gagal terkoneksi'.mysql_error());
$database = mysql_select_db($db)
or die ('gagal terhubung ke database'.mysql_error())
?>