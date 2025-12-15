<?php
include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM kegiatan_desa WHERE id_kegiatan='$id'");
$d = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
<title>Detail Laporan Kegiatan</title>

<style>
body{
    font-family:Segoe UI;
    background:#e9f5e9;
    padding:20px;
}
.container{
    max-width:900px;
    margin:auto;
}
.card{
    background:#fff;
    padding:25px;
    border-radius:16px;
    animation:fadeUp .6s ease;
}
h2{
    color:#063d23;
    margin-bottom:10px;
}
.meta{
    color:#555;
    margin-bottom:15px;
}
img{
    width:100%;
    max-height:350px;
    object-fit:cover;
    border-radius:14px;
    margin-bottom:20px;
}
.deskripsi{
    text-align:justify;
    line-height:1.8;
    color:#333;
}
.btn-group{
    margin-top:25px;
    display:flex;
    gap:12px;
}
.btn{
    padding:10px 18px;
    border-radius:8px;
    text-decoration:none;
    color:#fff;
    font-weight:500;
}
.btn-pdf{background:#084d2b;}
.btn-email{background:#1e6f43;}
.btn-back{background:#777;}

@keyframes fadeUp{
    from{opacity:0;transform:translateY(25px)}
    to{opacity:1;transform:translateY(0)}
}
</style>
</head>

<body>

<div class="container">
<a href="laporan_kegiatan.php">← Kembali ke Laporan</a>

<div class="card">
    <h2><?= $d['nama_kegiatan'] ?></h2>

    <div class="meta">
        📅 <?= $d['tanggal_mulai'] ?> |
        ⏰ <?= $d['waktu'] ?> |
        👤 <?= $d['penanggung_jawab'] ?> |
        📌 <?= $d['status'] ?>
    </div>

    <?php if(!empty($d['foto_kegiatan'])){ ?>
        <img src="uploads/<?= $d['foto_kegiatan'] ?>">
    <?php } ?>

    <div class="deskripsi">
        <?= nl2br($d['deskripsi']) ?>
    </div>

    <div class="btn-group">
        <a href="cetak_laporan.php?id=<?= $id ?>" class="btn btn-pdf">🖨 Cetak PDF</a>
        <a href="kirim_email.php?id=<?= $id ?>" class="btn btn-email">📧 Kirim Email</a>
    </div>
</div>
</div>

</body>
</html>
