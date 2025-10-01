<?php
// Soal b: 2 2 3 3 4 ? ?
// Pola: setiap angka muncul 2 kali
$b = [2, 2, 3, 3, 4];
$next = $b[count($b)-1];
if ($b[count($b)-1] == $b[count($b)-2]) {
    $next++;
}
$b[] = $next;
$b[] = $next;
echo "Soal b) ";
echo implode(" ", $b) . "<br>";