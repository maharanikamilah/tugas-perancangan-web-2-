<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo If Else</title>
</head>
<body>
    <h2>Demo Percabangan If-Else di PHP</h2>
    <?php
    $nilai = 85;

    if ($nilai >= 90) {
        echo "Nilai Anda A";
    } elseif ($nilai >= 80) {
        echo "Nilai Anda B";
    } elseif ($nilai >= 70) {
        echo "Nilai Anda C";
    } else {
        echo "Nilai Anda D";
    }

    echo "<hr>";

    $hari = "Senin";
    switch ($hari) {
        case "Senin":
            echo "Hari ini semangat kuliah!";
            break;
        case "Sabtu":
        case "Minggu":
            echo "Waktunya istirahat";
            break;
        default:
            echo "Hari biasa, tetap semangat!";
    }
    ?>
</body>
</html>
