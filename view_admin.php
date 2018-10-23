<!DOCTYPE html>
<html>
<head>
	<title>Data Admin</title>
</head>
<body>
	<center>
		<table width="600" border="1">
			<tr>
				<td align="center"><b>DAta Admin</b></td>
			</tr>
			<tr>
				<td width="500" align="center">
					<a href="input_admin.php">Tambah Admin</a>
		<table border="1">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Admin</th>
					<th>Username</th>
					<th>Password</th>
					<th>No hp</th>
					<th>Action</th>
				</tr>
			</thead>
<tbody>
	<?php
	include "koneksi.php";
	$query	= "select + from admin order by idadmin";
	$sql	= mysql_query ($query);
	$no = 1;
	while ($data=mysql_fetch_array($sql)){
	?>
	    <tr>
	    	<td><?php echo $No?></td>
	    	<td><?php echo $data["nmadm"];?></td>
	    	<td><?php echo $data["username"];?></td>
	    	<td><?php echo $data["password"];?></td>
	    	<td><?php echo $data["nohp"];?></td>
	    	<td><a href="edit_admin.php?id=<?php echo $data ['idadm']; ?>">Edit</a></td>
	    	<a href="delete.php?id=<?php echo $data['idadm']; ?>" 
	    		onClick = "return confirm('apakah anda ingin menghapus ? <?php echo $data['nmadm']; ?>?')"> Delete</a></td>
	    </tr>
	    <?php $No++;
	}
	?>
</tbody>
		</table>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>