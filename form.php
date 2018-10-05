<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
		<center>
			<h1>Aplikasi Pendaftaran Mahasiswa</h1>
			Nim : <input type="text" name="nim" ><br><br>
			Nama : <input type="text" name="nama" ><br><br>
			Email : <input type="text" name="email" ><br><br>
			<input type="submit" name="submit" value="submit">
		</center>
	</form>

</body>
</html>

<?php 
if(isset($_POST['submit'])){
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	$check = true;

	if(empty($nim)){
		echo "Nim Tidak Boleh Kosong !";
		$check = false;
	}else{
		if(strlen($nim)!=10){
		echo "Nim kurang dari 10 digit";
		$check = false;		
	}
	}

	if(empty($nama)){
		echo "Nama Tidak Boleh Kosong !";
		$check = false;
	}else{
		if(strlen($nama)>20){
		echo "Maksimal 20 huruf";
		$check = false;		
	}
	}

	if(empty($email)){
		echo "Email Tidak Boleh Kosong !";
		$check = false;
	}else{
		if(!strpos($email, '@')|| !strpos($email, '.com')){
		echo "Format email harus ada @ dan .com<br>";
		$check = false;		
	}
	}

	if($check){
		$koneksi = mysqli_connect('localhost','root','','d_modul5');

		$sql = "INSERT INTO t_jurnal1 values('$nim','$nama','email','')";
		mysqli_query($koneksi, $sql);

		session_start();
		$_SESSION['nimm']= $nim;
		header("location: komentar.php");
	}
}

	
	

 ?>
