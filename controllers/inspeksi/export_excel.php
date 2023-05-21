<?php
require('../config.php');
require('../functions.php');

//buatlah koneksi ke database
$konek = mysqli_connect(
    $config['hostname'],
    $config['username'],
    $config['password'],
    $config['database']
);

// menampilkan data hasil inspeksi
$sql = mysqli_query($konek, "SELECT id, sisi_1, sisi_2, kualitas, waktu from hasil_inspeksi");

$data = mysqli_fetch_all($sql, MYSQLI_NUM);
$header = [
    'ID' => 'integer',
    'Sisi 1' => 'string',
    'Sisi 2' => 'string',
    'Kualitas' => 'string',
    'Waktu' => 'datetime'
];
$cols_width = [5, 10, 10, 10, 20];

writeXLSX(
    'HASIL INSPEKSI GENTENG',
    $header,
    $data,
    'DATA HASIL INSPEKSI',
    $cols_width
);