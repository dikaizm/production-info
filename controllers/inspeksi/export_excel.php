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
$getData1 = mysqli_query($konek, "SELECT id, sisi_1, sisi_2, kualitas, waktu FROM hasil_inspeksi");
$getData2 = mysqli_query($konek, "SELECT id, status, waktu FROM status");

$data = [
    mysqli_fetch_all($getData1, MYSQLI_NUM),
    mysqli_fetch_all($getData2, MYSQLI_NUM)
];

$sheets = [
    'DATA HASIL INSPEKSI',
    'STATUS DEVICE'
];

$headers = [
    $header1 = [
        'ID' => 'integer',
        'Sisi 1' => 'string',
        'Sisi 2' => 'string',
        'Kualitas' => 'string',
        'Waktu' => 'datetime'
    ],
    $header2 = [
        'ID' => 'integer',
        'Status' => 'string',
        'Waktu' => 'datetime'
    ]
];

$titles = [
    'DATA HASIL INSPEKSI',
    'STATUS DEVICE'
];

$cols_widths = [
    [5, 10, 10, 10, 20],
    [5, 10, 20],
];

writeXLSXSheets(
    'HASIL INSPEKSI GENTENG',
    $sheets,
    $headers,
    $data,
    $titles,
    $cols_widths
);
