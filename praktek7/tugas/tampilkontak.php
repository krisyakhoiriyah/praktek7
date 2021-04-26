<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	//menjalankan session dan mengeksekusi file cek_session.php
    	session_start();
    	include "cek_session.php";
	?>
	<!--menampilkan tulisan dengan format heading 2-->
	<h2>Data</h2>
	<!--membuat tabel untuk menampilkan data dari database-->
	<table border="1">
		<tr>
			<td>NO</td>
			<td>NIM</td>
			<td>NAMA</td>
			<td>GENDER</td>
			<td>EMAIL</td>
			<td>ALAMAT</td>
			<td>KOTA</td>
			<td>PESAN</td>
		</tr>
		<?php
			//mengeksekusi file koneksi.php
			include "koneksi.php";
			//menjalankan query pada database
			$sql="SELECT * from kontak";
			$mahasiswa=mysqli_query($koneksi,$sql);
			$no=1;
			//menuliskan data hasil query dari database ke tabel
			foreach ($mahasiswa as $row) {
				$jenis_kelamin = $row['jkel']=='P'?'PEREMPUAN':'Laki_Laki';
				echo "<tr>
				<td>$no</td>
				<td>".$row['id']."</td>
				<td>".$row['Nama']."</td>
				<td>".$jenis_kelamin."</td>
				<td>".$row['Email']."</td>
				<td>".$row['Alamat']."</td>
				<td>".$row['Kota']."</td>
				<td>".$row['Pesan']."</td>
				</tr>";
				$no++;
			}
		?>
	</table>
	<button><a href="logout.php">Keluar</a></button>
</body>
</html>
