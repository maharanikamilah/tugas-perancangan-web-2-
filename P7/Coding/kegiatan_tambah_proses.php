<?php
include "koneksi.php";

$nama = $_POST['nama_kegiatan'];
$tgl_mulai = $_POST['tanggal_mulai'];
$tgl_selesai = $_POST['tanggal_selesai'];
$waktu = $_POST['waktu'];
$pj = $_POST['penanggung_jawab'];
$status = $_POST['status'];

// HANDLE FOTO
$nama_foto = "";
$folder = __DIR__ . "/uploads/";  // path absolut biar tidak error

if (!empty($_FILES['foto_kegiatan']['name'])) {

    // buat nama unik
    $nama_foto = time() . "_" . basename($_FILES['foto_kegiatan']['name']);
    $tmp = $_FILES['foto_kegiatan']['tmp_name'];
    $path_file = $folder . $nama_foto;

    // cek folder
    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    // upload
    if (!move_uploaded_file($tmp, $path_file)) {
        die("Upload foto gagal! Cek folder uploads.");
    }
}

$sql = "INSERT INTO kegiatan_desa 
        (nama_kegiatan, tanggal_mulai, tanggal_selesai, waktu, penanggung_jawab, status, foto_kegiatan)
        VALUES 
        ('$nama', '$tgl_mulai', '$tgl_selesai', '$waktu', '$pj', '$status', '$nama_foto')";

$query = mysqli_query($koneksi, $sql);

if (!$query) {
    die("Gagal menyimpan: " . mysqli_error($koneksi));
}

header("Location: data_kegiatan.php?msg=success");
exit;
?>
