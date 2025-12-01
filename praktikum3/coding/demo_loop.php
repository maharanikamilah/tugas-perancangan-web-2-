<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo Loop</title>
</head>
<body>
    <h2>Demo Perulangan PHP</h2>
    <?php
    echo "<b>While Loop:</b><br>";
    $i = 0;
    while ($i < 5) {
        echo "$i ";
        $i++;
    }

    echo "<br><br><b>Do-While Loop:</b><br>";
    $j = 0;
    do {
        echo "$j ";
        $j++;
    } while ($j < 5);

    echo "<br><br><b>For Loop:</b><br>";
    for ($k = 0; $k < 5; $k++) {
        echo "$k ";
    }

    echo "<br><br><b>Foreach Loop (Array):</b><br>";
    $buah = ["Apel", "Mangga", "Pisang", "Jeruk"];
    foreach ($buah as $item) {
        echo "$item<br>";
    }
    ?>
</body>
</html>
