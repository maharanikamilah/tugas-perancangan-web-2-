<?php
$koneksi = mysqli_connect(
    "localhost",
    "lindr747_hildagxnggg",
    "hildagxng697",
    "lindr747_db_penjadwalan_desa"
);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>