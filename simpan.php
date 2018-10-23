<?php
include "koneksi.php";

$nmadm 	  = $_POST['nmadm'];
$username = $_POST['username'];
$password = $_POST['password'];
$nohp     = $_POST['nohp'];

$query = mysql_query('insert into admin (nmadm,username,password,nohp) values ("'.$nmadm.'","'.$username.'","'.$password.'","'.$nohp.'")');
if ($query){
	header('location:input_admin.php?message=success');
}
?>