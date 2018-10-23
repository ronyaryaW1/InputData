<!DOCTYPE html>
<html>
<head>
	<title>Data Admin</title>
</head>
<body>
<center>
	<table width="300" border="1"></table>
	<tr>
		<td align="center"><b>Input Admin</b></td>
	  <?php
		if(!empty($_GET['message']) && $_GET['message'] == 'success'){
		echo '<h2>Berhasil Menambah data</h2>';
	}
	  ?>
	</tr>
	<tr>
		<td width="500" align="center">
			<form method="post" action="simpan.php">
			<table border="0">
				<tr>
					<td>Nama Admin</td>
					<td>:</td>
					<td><input type="text" name="Idadmin" placeholder="Nama" required="required"></td>
				</tr>
				<tr>
					<td>username</td>
					<td>:</td>
					<td><input type="text" name="username" placeholder="Nama" required="required"></td>
				<tr>
					<td>fullname</td>
					<td>:</td>
					<td><input type="text" name="fullname" placeholder="Nama" required="required"></td>
				</tr>
				<tr>
					<td>password</td>
					<td>:</td>
					<td><input type="text" name="password" placeholder="Nama" required="required"></td>
				<tr>
					<td>nohp</td>
					<td>:</td>
					<td><input type="text" name="nohp" placeholder="Nama" required="required"></td>
				<tr>
					<td><input type="submit" name="simpan"value="simpan"></td>
					<a href="view_admin.php">Lihat Data</a>
				</tr>
			</table>
			</form>

		</td>
	</tr>
	<tr align="center">Data Perpustakaan</tr>
</center>
</body>
</html>