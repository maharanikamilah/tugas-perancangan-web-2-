<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM peserta WHERE id_peserta='$id'");

echo "<script>alert('Data berhasil dihapus');document.location='peserta.php';</script>";
?>
