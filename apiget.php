 <?php

header('Content-Type: application/json');

date_default_timezone_set("Asia/Jakarta");
$nama = htmlspecialchars($_GET['nama']);
$waktu = date('Y/m/d H:i');

$data = [
    'nama' => $nama,
    'waktu' => $waktu
];

echo json_encode($data);
