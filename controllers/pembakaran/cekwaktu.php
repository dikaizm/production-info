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
$waktu = $data['waktu'];

//uji, apabila bila waktu belum ada, maka anggap waktu = 0
if ($waktu < 0) $waktu = 0;

//reformat waktu ke format yang diinginkan
$response = date("l, j F Y", strtotime($waktu));

//cetak nilai waktu yang diformat
echo $response;
