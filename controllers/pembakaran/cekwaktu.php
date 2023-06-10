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
$waktu = "";
if (!empty($data)) {
	$waktu = $data['waktu'];
}

//uji, apabila bila waktu belum ada, maka anggap waktu = 0
if ($waktu < 0 || empty($waktu)) $waktu = "";

//reformat waktu ke format yang diinginkan
if (!empty($waktu)) {
	$response = date("l, j F Y", strtotime($waktu));
} else {
	$response = "";
}

//cetak nilai waktu yang diformat
echo $response;
