<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="yellow">

	<form action="tampilmahasiswa.php" method="post">
		<b>Pengolahan Data Mahasiswa</b>
		<br>
		<br>
		
			Nama : <input type="text" name="nama" size="25" maxlength="50">
			<br>
			Alamat : <input type="text" name="alamat" size="25" maxlength="50">
	<br>
			jenis kelamin : <input type="radio" name="jeniskel" value="laki-laki">laki-laki 
							<input type="radio" name="jeniskel" value="perempuan">perempuan

		<p>
			Pekerjaan : <select name="pekerjaan">
						<option value="-pilih-">
						<option value="pelajar">pelajar
						<option value="karyawan">karyawan
						<option value="wirausaha">wirausaha
						<option value="lain-lain">lain-lain			
			</select>

			<p>

			Hobi : <input type="checkbox" name="hobi1" value="olahraga">olahraga
					<input type="checkbox" name="hobi2" value="musik">Musik
					<input type="checkbox" name="hobi3" value="jalan-jalan">Jalan-jalan
					<p>
			<input type="submit" value="kirim"><input type="reset" value="batal">
		</form>
</body>

</html>