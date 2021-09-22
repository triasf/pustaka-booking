<!DOCTYPE html>
<html>
<head>
	<title>Data Komentar</title>
</head>
<body>
<h1>Data Komentar Anda</h1>
<hr>
<table border="0">
<tr>
	<td>Nama Anda</td>
    <td>:</td>
    <td><?php echo $_POST["nama"];?></td>
</tr>
<tr>
    <td>E-Mail Anda</td>
    <td>:</td>
    <td><?php echo $_POST["email"]; ?></td>
</tr>
<tr>
    <td>Komentar Anda</td>
    <td>:</td>
    <td><?php echo $_POST["komentar"]; ?></td>
</tr>
</table>
<a href="forminputkomentar.php">INPUT DATA LAGI</a>
</body>
</html>        