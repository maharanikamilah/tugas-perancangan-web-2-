<?php include 'koneksi.php';

$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM peserta WHERE id_peserta='$id'"));
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Peserta</title>
<style>
    body { font-family: 'Segoe UI'; background: #e9f5e9; margin: 0; }
    .container { width: 400px; background: white; padding: 20px; margin: 50px auto; border-radius: 10px; }
    h2 { text-align: center; color: #256c25; }
    label { font-size: 14px; color: #256c25; }
    input, select, textarea {
        width: 100%; padding: 8px; margin: 6px 0 12px; border: 1px solid #b8d9b8;
        border-radius: 6px; font-size: 14px;
    }
    .btn { width: 100%; background: #256c25; padding: 10px; color: white; border: none; cursor: pointer; border-radius: 6px; font-weight: bold; }
    .btn:hover { background: #1e5c1e; }
    .back { display: block; text-align: center; margin-top: 10px; color: #2a7b2a; text-decoration: none; }
</style>
</head>
<body>

<div class="container">
<h2>Edit Peserta</h2>

<form method="post">
    <label>Nama Peserta</label>
    <input type="text" name="nama_peserta" value="<?= $data['nama_peserta'] ?>" required>

    <label>NIK</label>
    <input type="text" name="nik" value="<?= $data['nik'] ?>" required>

    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" required>
        <option value="Laki-Laki" <?= $data['jenis_kelamin']=='Laki-Laki'?'selected':'' ?>>Laki-laki</option>
        <option value="Perempuan" <?= $data['jenis_kelamin']=='Perempuan'?'selected':'' ?>>Perempuan</option>
    </select>

    <label>Alamat</label>
    <textarea name="alamat" required><?= $data['alamat'] ?></textarea>

    <label>No Telp</label>
    <input type="text" name="no_telp" value="<?= $data['no_telp'] ?>" required>

    <button class="btn" name="update">Update</button>
</form>

<a class="back" href="peserta.php">← Kembali</a>
</div>

</body>
</html>

<?php
if (isset($_POST['update'])) {
    mysqli_query($koneksi, "UPDATE peserta SET
        nama_peserta='$_POST[nama_peserta]',
        nik='$_POST[nik]',
        jenis_kelamin='$_POST[jenis_kelamin]',
        alamat='$_POST[alamat]',
        no_telp='$_POST[no_telp]'
        WHERE id_peserta='$id'
    ");
    echo "<script>alert('Data berhasil diupdate');document.location='peserta.php';</script>";
}
?>
