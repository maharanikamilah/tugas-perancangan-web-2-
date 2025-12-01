<?php
$koneksi = mysqli_connect("localhost", "root", "", "penjadwalan_kegiatan_desa");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
