<?php
include 'koneksi.php';
$id = $_GET['id'];
$q = mysqli_query($koneksi, "SELECT * FROM kegiatan_desa WHERE id_kegiatan='$id'");
$d = mysqli_fetch_assoc($q);
?>

<!DOCTYPE html>
<html>
<head>
<title>Cetak Laporan</title>
<style>
body{font-family:Times New Roman;padding:40px}
h2{text-align:center}
img{width:100%;max-height:350px;object-fit:cover;margin:20px 0}
@media print{
    button{display:none}
}
</style>
</head>

<body>

<button onclick="window.print()">🖨 Cetak</button>

<h2>LAPORAN KEGIATAN DESA</h2>

<?php if($d['foto_kegiatan']){ ?>
<img src="uploads/<?= $d['foto_kegiatan']; ?>">
<?php } ?>

<p><b>Nama Kegiatan:</b> <?= $d['nama_kegiatan']; ?></p>
<p><b>Tanggal:</b> <?= $d['tanggal_mulai']; ?> - <?= $d['tanggal_selesai']; ?></p>
<p><b>Waktu:</b> <?= $d['waktu']; ?></p>
<p><b>Penanggung Jawab:</b> <?= $d['penanggung_jawab']; ?></p>

<hr>
<p><?= nl2br($d['deskripsi']); ?></p>

</body>
</html>
