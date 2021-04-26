<?php
	include "koneksi.php";
	//menyimpan data kedalam variabel
	$nim=$_POST['Id'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$pesan=$_POST['pesan'];
	$query="INSERT INTO kontak (id,Nama,jkel,Email,Alamat,Kota,Pesan) VALUES ('$Id','$nama','$jenis_kelamin','$email','$alamat','$kota','$pesan')";
	mysqli_query($koneksi,$query);
	header("location:index.php");
?>
