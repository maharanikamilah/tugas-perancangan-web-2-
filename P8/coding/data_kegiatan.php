<?php 
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Kegiatan</title>

<style>
    body { font-family: Segoe UI; padding: 20px; background: #e9f5e9; }
    h2 { color:#063d23; }
    .btn {
        background:#084d2b; color:white; padding:8px 12px;
        border-radius:6px; text-decoration:none;
    }
    table { width:100%; border-collapse:collapse; background:white; }
    th { background:#063d23; color:white; padding:10px; }
    td { padding:8px; border:1px solid #cde5cd; text-align:center; }
    img { border-radius:6px; }
</style>

</head>
<body>

<a href="index.php" class="btn">← Kembali</a>
<h2>Data Kegiatan Desa</h2>
<a class="btn" href="kegiatan_tambah.php">+ Tambah Kegiatan</a>
<br><br>

<?php
// PAGINATION
$limit = 5; 
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

// Hitung total data
$count_q = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM kegiatan_desa");
$total = mysqli_fetch_assoc($count_q)['total'];
$total_page = ceil($total / $limit);

// Ambil data sesuai halaman
$q = mysqli_query($koneksi,
    "SELECT * FROM kegiatan_desa ORDER BY id_kegiatan DESC LIMIT $start, $limit"
);
?>

<table>
<tr>
    <th>No</th>
    <th>Foto</th>
    <th>Nama Kegiatan</th>
    <th>Tanggal Mulai</th>
    <th>Tanggal Selesai</th>
    <th>Waktu</th>
    <th>Penanggung Jawab</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>

<?php
$no = $start + 1;
while ($data = mysqli_fetch_assoc($q)) {
?>
<tr>
    <td><?= $no++; ?></td>

    <td>
        <?php 
        $foto = $data['foto_kegiatan'];
        if (!empty($foto) && file_exists("uploads/" . $foto)) { ?>
            <img src="uploads/<?= $foto; ?>" width="80">
        <?php } else { ?>
            <span style="color:grey;">(Tidak ada foto)</span>
        <?php } ?>
    </td>

    <td><?= $data['nama_kegiatan']; ?></td>
    <td><?= $data['tanggal_mulai']; ?></td>
    <td><?= $data['tanggal_selesai']; ?></td>
    <td><?= $data['waktu']; ?></td>
    <td><?= $data['penanggung_jawab']; ?></td>
    <td><b><?= $data['status']; ?></b></td>

    <td>
        <a href="kegiatan_edit.php?id=<?= $data['id_kegiatan']; ?>">Edit</a> |
        <a onclick="return confirm('Yakin hapus?')" 
           href="kegiatan_hapus.php?id=<?= $data['id_kegiatan']; ?>">
           Hapus
        </a>
    </td>
</tr>
<?php } ?>

</table>

<!-- PAGINATION BUTTONS -->
<div style="text-align:center; margin-top:20px;">

    <?php if ($page > 1) { ?>
        <a class="btn" href="?page=<?= $page - 1 ?>">◀ Prev</a>
    <?php } ?>

    <?php 
    for ($i = 1; $i <= $total_page; $i++) { 
        $active = ($i == $page) ? "background:#0a6b40;" : "";
    ?>
        <a class="btn" style="margin:0 3px; <?= $active ?>" href="?page=<?= $i ?>">
            <?= $i ?>
        </a>
    <?php } ?>

    <?php if ($page < $total_page) { ?>
        <a class="btn" href="?page=<?= $page + 1 ?>">Next ▶</a>
    <?php } ?>

</div>

</body>
</html>
