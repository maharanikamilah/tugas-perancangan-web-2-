<?php
header("Content-Type: application/json");
require "../koneksi.php";

$id = $_POST['id_kegiatan'] ?? '';

if ($id == '') {
    echo json_encode(["status"=>false,"message"=>"ID tidak ada"]);
    exit;
}

$q = mysqli_query(
    $koneksi,
    "UPDATE kegiatan SET status='disetujui' WHERE id_kegiatan='$id'"
);

echo json_encode([
    "status" => $q ? true : false,
    "message" => $q ? "Kegiatan disetujui" : "Gagal ACC"
]);
