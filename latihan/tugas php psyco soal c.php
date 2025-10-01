<?php
// Soal c: 1 9 2 10 3 ? ?
// Pola: bergantian (ganjil naik 1: 1,2,3,4...) dan (genap naik 1 mulai dari 9)
$c = [1, 9, 2, 10, 3];
$next1 = 11; // setelah 10
$next2 = 4;  // setelah 3
$c[] = $next1;
$c[] = $next2;
echo "Soal c) ";
echo implode(" ", $c) . "<br>";
?>