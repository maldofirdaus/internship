<?php

header('Content-Type: application/json');

date_default_timezone_set("Asia/Jakarta");
$nama = htmlspecialchars($_GET['nama']);
$nama_belakang = htmlspecialchars($_GET['nama_belakang']);
$waktu = date('Y/m/d H:i');

$data = [
    'nama' => "$nama $nama_belakang",
    'waktu' => $waktu
];

echo json_encode($data);