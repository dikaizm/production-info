<?php
require('../config.php');

//buatlah koneksi ke database
$konek = mysqli_connect(
	$config['hostname'],
	$config['username'],
	$config['password'],
	$config['database']
);

//baca data dari tabel datasensor
$sql = mysqli_query($konek, "SELECT * from suhu_pembakaran order by id desc"); //data terakhir akan ada di atas

//baca data paling atas
$data = mysqli_fetch_array($sql);
$suhucel = "";
if (!empty($data)) {
	$suhucel = $data['suhucel'];
}

//uji, apabila bila suhucel belum ada, maka anggap suhucel = 0
if ($suhucel < 0 || empty($suhucel)) $suhucel = 0;

//cetak nilai suhucel
echo $suhucel;