<?php
include "koneksi.php";

if (isset($_POST['register'])) {

    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $no_telp = $_POST['no_telp'];

    // insert ke database
    $query = mysqli_query($koneksi, 
        "INSERT INTO admin_desa 
        (username, password, nama_lengkap, email, no_telp, level, blokir, id_pegawai)
        VALUES 
        ('$username', '$password', '$nama_lengkap', '$email', '$no_telp', 'admin', 'N', '')"
    );

    if ($query) {
        echo "<script>
                alert('Pendaftaran admin berhasil!');
                window.location = 'login.php';
              </script>";
    } else {
        echo "<script>
                alert('Pendaftaran gagal, cek kembali!');
                window.location = 'regis.php';
              </script>";
    }
}
?>
