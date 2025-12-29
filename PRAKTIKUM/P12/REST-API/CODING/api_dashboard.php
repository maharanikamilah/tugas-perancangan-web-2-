<?php
header("Content-Type: application/json");
require "../koneksi.php";

function total($koneksi,$sql){
    $q = mysqli_query($koneksi,$sql);
    if(!$q) return 0;
    return (int)mysqli_fetch_assoc($q)['total'];
}

$data = [
    "total_kegiatan" => total($koneksi,"SELECT COUNT(*) total FROM kegiatan"),
    "menunggu_acc"   => total($koneksi,"SELECT COUNT(*) total FROM kegiatan WHERE status='menunggu_kades'"),
    "laporan"        => total($koneksi,"SELECT COUNT(*) total FROM laporan_kegiatan"),
    "pengumuman"     => total($koneksi,"SELECT COUNT(*) total FROM pengumuman"),
];

$list = [];
$q = mysqli_query($koneksi,"
    SELECT id_kegiatan, nama_kegiatan, tanggal, lokasi
    FROM kegiatan
    WHERE status='menunggu_kades'
    ORDER BY tanggal ASC
    LIMIT 5
");

if($q){
    while($r = mysqli_fetch_assoc($q)){
        $list[] = $r;
    }
}

echo json_encode([
    "status" => true,
    "statistik" => $data,
    "list_acc" => $list
]);
exit;
