<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<!--menampilkan tulisan dengan format heading 2-->
	<h2 align="center">Silakan Login </h2>
	<!--membuat form dengan method post-->
	<form method="post" action="cek_login.php">
		<!--membuat tabel untuk field inputan dan button-->
		<table align="center">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><button type="submit" name="Login">Login</button></td>
		</tr>
		</table>
	</form>

</body>
</html>
