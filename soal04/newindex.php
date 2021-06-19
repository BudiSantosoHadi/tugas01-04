<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/tampilan.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crudpokemon</title>
</head>
<body>
    <header>
        <div class="title-header">
            <h3>Data Pokemon</h3>
        </div>
    </header>
    
    <div class="content-utama">
        <div class="content-left">
            <h3>PokeDumb Find</h3>
        </div>
        <div class="content-right">
            <a href="form_simpan.php"><button class="btn-pokemon">Add Pokemon/Element</button></a>
        </div>
        <div class="content-td">
                <?php
	// Load file koneksi.php
	include "koneksi.php";
	
	$query = "SELECT * FROM pokemon"; // Query untuk menampilkan semua data siswa
	$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
	
	while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        echo "<center>";
		echo "<tr>";
		// echo "<td>".$data['id']."</td>";

		echo "<td><img src='images/".$data['photo']."' width='100' height='100'></td>";
        echo "<br>";
       
        echo "<td>".$data['name']."</td>";
        echo "<br>";
        echo "<br>";
		echo "<td>".$data['def']."</td>" ;
        echo "<br>";
        echo "<td>".$data['str']."</td>";
		echo "<br>";
		echo "<center>";
		echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a> \ </td>";
		echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a> </td>";
		echo "</center>";
		echo "</tr>";
		echo "</center>";
        echo "<br>";
        echo "<hr>";
	}
	?>
        
    </div>
    <footer>
        <div class="footer-title">
            <h3><a href ="#">Copyright@atifnaufalh in 2021</a></h3>
        </div>
    </footer>
</body>
</html>
