<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Peserta</title>
    <style>
        body { font-family: 'Segoe UI'; background: #e9f5e9; margin: 0; }
        .container { width: 400px; background: white; padding: 20px; margin: 50px auto; border-radius: 10px; }
        h2 { text-align: center; color:rgb(9, 36, 25); }
        label { font-size: 14px; color:rgb(15, 59, 41); }
        input, select, textarea {
            width: 100%; padding: 8px; margin: 6px 0 12px; border: 1px solid #b8d9b8;
            border-radius: 6px; font-size: 14px;
        }
        .btn { width: 100%; background:rgb(5, 45, 34); padding: 10px; color: white; font-weight: bold; border: none; border-radius: 6px; cursor: pointer; }
        .btn:hover { background:rgb(14, 58, 51); }
        .back { display: block; text-align: center; margin-top: 10px; color: #2a7b2a; text-decoration: none; }
    </style>
</head>
<body>

<div class="container">
<h2>Tambah Peserta</h2>

<form method="post">
    <label>Nama Peserta</label>
    <input type="text" name="nama_peserta" required>

    <label>NIK</label>
    <input type="text" name="nik" required>

    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" required>
        <option value="">Pilih</option>
        <option value="Laki-Laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <label>Alamat</label>
    <textarea name="alamat" required></textarea>

    <label>No Telp</label>
    <input type="text" name="no_telp" required>

    <button class="btn" name="simpan">Simpan</button>
</form>

<a class="back" href="data_peserta.php">← Kembali</a>
</div>

</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama_peserta'];
    $nik = $_POST['nik'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['no_telp'];

    mysqli_query($koneksi, "INSERT INTO peserta VALUES ('','$nama','$nik','$jk','$alamat','$telp')");
    
    echo "<script>alert('Data berhasil ditambahkan');document.location='peserta.php';</script>";
}
?>
