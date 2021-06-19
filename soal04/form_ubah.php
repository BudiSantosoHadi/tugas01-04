<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
</head>
<body>
<br>
<br>
<center>

<h1>Ubah Data Pokemon</h1>
	
	<?php
	// Load file koneksi.php
	include "koneksi.php";
	
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$Id = $_GET['id'];
	
	// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
	$query = "SELECT * FROM pokemon WHERE id='".$Id."'";
	$sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
	$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?id=<?php echo $Id; ?>" enctype="multipart/form-data">
	<table cellpadding="6">
	<tr>
		<td>Name Pokemon</td>
		<td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
	</tr>

	<tr>
		<td>str</td>
		<td><input type="text" name="str" value="<?php echo $data['str']; ?>"></td>
	</tr>
	<tr>
		<td>def</td>
		<td><input type="text" name="str" value="<?php echo $data['def']; ?>"></td>
	</tr>
	<tr>
		<td>photo Pokemon</td>
		<td>
			<input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto<br>
			<input type="file" name="photo">
		</td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" value="Ubah">
	<a href="newindex.php"><input type="button" value="Batal"></a>
	</form>

</center>
	
</body>
</html>
