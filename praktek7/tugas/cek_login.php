<?php
	//mengeksekusi file koneksi.php
	include "koneksi.php";
	$username=$_POST['username'];
	$password=$_POST['password'];

	//menjalankan query ke database
	$sql="SELECT username,password from login where username='$username' and password='$password'";
	$login=mysqli_query($koneksi,$sql);
  $res=mysqli_fetch_assoc($login);
	//menngecek apakah uname dan pass ditemukan
	if (mysqli_num_rows($login)>0) {
		//inisialisasi session
		session_start();
		$_SESSION['username'] = $username;
		header("location:tampilkontak.php");
	}else
	echo "<script>alert('Username atau Password Salah!');</script>";
	?>
