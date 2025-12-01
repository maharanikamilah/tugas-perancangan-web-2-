<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo Tipe Data & Casting</title>
</head>
<body>
    <h2>Demo Tipe Data dan Casting</h2>
    <?php
    $angka = "123abc";
    echo "Nilai awal: $angka <br>";
    echo "Tipe awal: " . gettype($angka) . "<br>";

    $angkaInt = (int)$angka;
    echo "Setelah casting ke integer: $angkaInt <br>";
    echo "Tipe setelah casting: " . gettype($angkaInt) . "<br>";

    echo "<hr>";
    $bilangan = 10.7;
    $teks = "Halo";
    echo "Apakah \$bilangan integer? " . (is_int($bilangan) ? "Ya" : "Tidak") . "<br>";
    echo "Apakah \$teks string? " . (is_string($teks) ? "Ya" : "Tidak") . "<br>";
    ?>
</body>
</html>
