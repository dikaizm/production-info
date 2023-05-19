<?php
require('config.php');

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
$suhufah = $data['suhufah'];

//uji, apabila bila suhufah belum ada, maka anggap suhufah = 0
if ($suhufah < 0) $suhufah = 0;

//cetak nilai suhufah
echo $suhufah;
