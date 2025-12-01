<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo Variabel</title>
</head>
<body>
    <h2>Demo Variabel di PHP</h2>
    <?php
    // Deklarasi dan inisialisasi variabel
    $nama = "Maharani";
    $umur = 20;
    $tinggi = 160.5;
    $aktif = true;

    echo "Nama: $nama <br>";
    echo "Umur: $umur tahun<br>";
    echo "Tinggi: $tinggi cm<br>";
    echo "Status aktif: " . ($aktif ? "Ya" : "Tidak") . "<br>";

    // Menampilkan tipe datanya
    echo "<hr>";
    var_dump($nama);
    echo "<br>";
    var_dump($umur);
    echo "<br>";
    var_dump($tinggi);
    echo "<br>";
    var_dump($aktif);
    ?>
</body>
</html>
