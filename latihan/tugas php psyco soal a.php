<?php
// Program PHP untuk menyelesaikan tes psyko

// Soal a: 4 6 9 13 18 ? ?
// Pola: selisih bertambah (+2, +3, +4, +5, dst)
$a = [4, 6, 9, 13, 18];
$diff = 2;
for ($i = count($a); $i < 7; $i++) {
    $diff++;
    $a[] = end($a) + $diff;
}
echo "Soal a) ";
echo implode(" ", $a) . "<br>";