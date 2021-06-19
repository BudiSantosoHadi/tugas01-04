<html>
    <head>
        <title> Tugas No.1 </title>
    </head>
    <body>
    <h1> Menghitung Uang Kembalian </h1>
    <form method = "post" action="soalmodulus.php">
    Masukkan jumlah kembalian <input type= "text" name= "uang"><br><br>
    <input type= "submit" name="submit" value= "proses">
    <input type= "reset" name="reset" value= "reset"><br><br>
    </form>
    <?php
    echo"Uang anda sebesar $_POST[uang]<br>";
    $dataa = $_POST['uang'] % 50000;
    $a = ($_POST['uang'] - $dataa) / 50000;

    $datab = $dataa % 20000;
    $b = ($dataa - $datab) / 20000;
    // hasil sisa ambil datab = 14.500
    $datac = $datab % 10000;
    $c = ($datab - $datac) / 10000;
    // hasil sisa ambil datac = 4.500
    $datad = $datac % 2000;
    $d = ($datac - $datad) / 2000;
	// hasil sisa ambil datac = 500
	$datae = $datad % 500;
    $e = ($datad - $datae) / 500;
    // hasil sisa ambil datac = 0

    echo "Jumlah Rp.50.000 : ".$a."<br>";
    echo "Jumlah Rp.20.000 : ".$b."<br>";
    echo "Jumlah Rp.10.000 : ".$c."<br>";
    echo "Jumlah Rp.2.000 : ".$d."<br>";
    echo "Jumlah Rp.500 : ".$e."<br>";


    ?>
    </body>
</html>