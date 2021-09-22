<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Masukan Identitas Anda</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?> "method="post">
	<pre>
		Isikan Nama  : <input type="text" name="nama">
		Isikan no Telpon : <input type="text" name="telp">
		Isikan Alamat :<textarea name="alamat" rows="5" cols="40"></textarea>
		<input type="submit" value="tampil"><input type="reset" value="batal">
	</pre>
</form>
<?php

$nama=$_POST['nama'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];

if(!empty($nama))
{
	echo "Nama : $nama <br>";
}

if(!empty($telp))
{
	echo "Telepon : $telp <br>";
}

if(!empty($alamat))
{
	echo "Alamat : $alamat <br>";
}
?>
</body>
</html>