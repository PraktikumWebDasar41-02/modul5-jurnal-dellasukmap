<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<center>
			<h3>Kolom Komentar</h3><br>
		Nama : <br><br>
		Komentar : <input type="text" name="komen"><br><br>
		<input type="submit" name="submit" value="submit">
		</center>
	</form>

</body>
</html>

<?php 
	session_start();
	$koneksi = mysqli_connect('localhost','root','','d_modul5');

	$nimm = $_SESSION['nimm'];

	$sql


 ?>