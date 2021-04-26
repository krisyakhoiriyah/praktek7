<?php
	//mengeksekusi file koneksi.php
	include "koneksi.php";
	//menyimpan data kedalam variabel
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$pesan=$_POST['pesan'];
	//menjalankan query pada database
	$query="INSERT INTO mahasiswa (id,Nama,jkel,Email,Alamat,Kota,Pesan) VALUES ('$nim','$nama','$jenis_kelamin','$email','$alamat','$kota','$pesan')";
	mysqli_query($koneksi,$query);
	//menampilkan alert dan menampilkan form tampilkontak.php
	echo "<script>alert('Data Berhasil Masuk!);</script>";
	header("location:tampilkontak.php");
?>
