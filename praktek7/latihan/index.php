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
			<td>NIM</td>
			<td>NAMA</td>
			<td>GENDER</td>
			<td>JURUSAN</td>
		</tr>
		<?php
			include "koneksi.php";
			$mahasiswa=mysqli_query($koneksi,"SELECT * from mahasiswa");
			$no=1;
			foreach ($mahasiswa as $row) {
				$jenis_kelamin = $row['jenis_kelamin']=='P'?'PEREMPUAN':'Laki_Laki';
				echo "<tr>
				<td>$no</td>
				<td>".$row['nim']."</td>
				<td>".$row['nama']."</td>
				<td>".$jenis_kelamin."</td>
				<td>".$row['jurusan']."</td>
				</tr>";
				$no++;
			}
		?>
	</table>
</body>
</html>
