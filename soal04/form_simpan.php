<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
	<br>
	<br>
<center>
<h1>Tambah Data Pokemon</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	<table cellpadding="5">
	<tr>
		<td>Id</td>
		<td><input type="text" name="id"></td>
	</tr>
	<tr>
		<td>NamaPokemon</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>str</td>
		<td><input type="text" name="str"></td>
	</tr>
	<tr>
		<td>dev</td>
		<td><input type="text" name="def"></td>
	</tr>
	<tr>
		<td>FotoPokemon</td>
		<td><input type="file" name="photo"></td>
	</tr>
	</table>
	<hr>
	<input type="submit" value="Simpan">
	<a href="newindex.php"><input type="button" value="Batal"></a>
	</form>
</center>
	
</body>
</html>
