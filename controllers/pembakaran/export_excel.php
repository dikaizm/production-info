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

// menampilkan data hasil oxymeter
$sql = mysqli_query($konek, "SELECT * from suhu_pembakaran");

$data = mysqli_fetch_all($sql, MYSQLI_NUM);
$header = [
    'ID' => 'integer',
    'Suhu (Celsius)' => 'integer',
    'Suhu (Fahrenheit)' => 'integer',
    'Waktu' => 'datetime'
];
$cols_width = [5, 15, 15, 20];

writeXLSX(
    'HASIL SUHU PEMBAKARAN',
    $header,
    $data,
    'DATA SUHU PEMBAKARAN',
    $cols_width
);