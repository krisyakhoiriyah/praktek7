<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location: login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<h2>LIST MAHASISWA</h2>
	<table border="1">
		<tr>
			<td>NO</td>
			<td>Id</td>
			<td>NAMA</td>
			<td>GENDER</td>
			<td>EMAIL</td>
			<td>ALAMAT</td>
			<td>KOTA</td>
			<td>PESAN</td>
		</tr>
		<?php
			include "koneksi.php";
			$sql="SELECT * from kontak";
			$mahasiswa=mysqli_query($koneksi,$sql);
			$no=1;
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
</body>
</html>
