<!DOCTYPE html>
<html>
<head>
	<title>Form Komentar</title>
</head>
<body>
<h1>BUKU TAMU</h1>
Komentar dan Saran Anda Sangat Kami Butuhkan <br>
Untuk meningkatkan Kualitas Situs Kami <br>
<hr>
<form action="tampilkomentar.php" method="post">
<table border="0">
<tr>
    <td>Nama Anda</td>
    <td>:</td>
    <td><input type="text" name="nama" size="30"></td>
</tr>
<tr>
    <td>E-Mail Anda</td>
    <td>:</td>
    <td><input type="text" name="email" size="40"></td>
</tr>
<tr>
    <td>Komentar Anda</td>
    <td>:</td>
    <td><textarea rows="3" cols="25" name="komentar"></textarea></td>
</tr>
<tr>
    <td colspan="3"><input type="submit" value="kirim"> <input type="reset" value="Batal">
</tr>
</table>
</form>
</body>
</html>  