<!DOCTYPE html>
<html>
<head>
	<title>Form Input</title>
</head>
<body>
  <?php
  session_start();
  include "cek_session.php";
   ?>
	<form method="post" action="simpan.php">
		<table>
			<tr><td>ID</td><td><input type="text" onkeyup="isi_otomatis()" name="Id"></td></tr>
			<tr><td>NAMA</td><td><input type="text" name="nama"></td></tr>
			<tr><td>JENIS KELAMIN</td><td><input type="radio" name="jenis_kelamin" value="L">Laki-Laki<input type="radio" name="jenis_kelamin" value="P">Perempuan</td></tr>
			<tr><td>EMAIL</td><td><input type="email" name="email"></td></tr>
			<tr><td>ALAMAT</td><td><input type="text" name="alamat"></td></tr>
			<tr><td>KOTA</td><td><input type="text" name="kota"></td></tr>
			<tr><td>PESAN</td><td><textarea cols="45" name="pesan"></textarea></td></tr>
			<tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
		</table>
	</form>
</body>
</html>
