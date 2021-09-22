<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	$nama =$_POST['nama'];
	$alamat=$_POST['alamat'];
	$tempatlahir=$_POST['tempatlahir'];
	$tanggallahir=$_POST['tanggallahir'];
	$jeniskel=$_POST['jeniskel'];
	$pendidikan=$_POST['pendidikan'];
	?>
	<br>
	<h3> DATA REGISTRASI</h3>
	<br>
	<br>
	<table border="1" bgcolor="Cyan">
		
		<tr>
			<td>Nama</td><td><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>Alamat</td><td><?php echo $alamat; ?></td>
		</tr>
		<tr>
			<td>Tempat Lahir</td><td><?php echo $tempatlahir; ?></td>
		</tr>
		<tr>
			<td>Tanggal Lahir</td><td><?php echo $tanggallahir; ?></td>
		</tr>
		<tr>
			<td>Jenis kelamin</td><td><?php echo $jeniskel; ?></td>
		</tr>
		<tr>
			<td>Pedidikan</td><td><?php echo $pendidikan; ?></td>
		</tr>
	</table><br>
	<a href="tugas03.php"> BACK TO HOME </a>
</body>
</html>