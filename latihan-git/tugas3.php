<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="tampiltugas03.php" method="post">

	<b>FORM REGISTRASI</b>
	<br>
	<br>

	Isi Data Dibawah ini:
	<table border="0">
	<tr>
	<td>Nama</td>
	<td> :</td>
	<td> <input type="text" name="nama" size="25" maxlength="50"><br></td>
</tr>
<tr>
	<td>Alamat</td>
	<td> :</td>
	<td><textarea name="alamat" rows="5" cols="40"></textarea><br></td>

</tr>
<tr>

	<td>Tempat lahir</td>
	<td> :</td>
	<td> <input type="text" name="tempatlahir" size="25" maxlength="50"> </br></td>
</tr>
<tr>
	<td>Tanggal Lahir</td>
	<td> :</td>
	<td> <input type="text" name="tanggallahir" size="25" maxlength="50"><br></td>
</tr>
<tr>
	<td> jenis kelamin</td>
	<td> :</td>
	<td> <input type="radio" name="jeniskel" value="laki-laki">laki-laki
	 <input type="radio" name="jeniskel" value="perempuan">perempuan</td>
</tr>
<tr>
	<p>
			<td>Pendidikan</td>
			 <td>:</td>
			 <td> <select name="pendidikan">
						<option value="-pilih-">
						<option value="sma">SMA
						<option value="s1">S1
						<option value="s2">S2
						<option value="lain-lain">lain-lain			
			</select></td>
		</p> 
	</tr>
	</table>
	<br>
	<input type="submit" value="submit"><input type="reset" value="cancel">
</form>
</body>
</html>