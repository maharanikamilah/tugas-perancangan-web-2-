<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // SERVER
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'programdesa48@gmail.com'; 
    $mail->Password   = 'fdcq vofv pyuh ffwn'; 
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // PENGIRIM
    $mail->setFrom('programdesa48@gmail.com', 'Sistem Desa');

    // PENERIMA
    $mail->addAddress('hildagxng@gmail.com');

    // ISI EMAIL
    $mail->isHTML(true);
    $mail->Subject = 'Laporan Kegiatan Desa';
    $mail->Body    = '
        <h3>Laporan Kegiatan Desa</h3>
        <p>Laporan kegiatan desa berhasil dibuat.</p>
        <p>Silakan cek sistem untuk detail lengkap.</p>
    ';

    $mail->send();
    echo "✅ Email berhasil dikirim";
} catch (Exception $e) {
    echo "❌ Email gagal: {$mail->ErrorInfo}";
}
