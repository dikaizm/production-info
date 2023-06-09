<?php

require('../controllers/config.php');

//buatlah koneksi ke database
$konek = mysqli_connect(
	$config['hostname'],
	$config['username'],
	$config['password'],
	$config['database']
);

if (!$konek) {
	die("Connection failed: " . mysqli_connect_error());
}

while (true) {
	//baca data dari virtual generator
	$status = ['running', 'cekkamera', 'deviceoff', ''][array_rand(['running', 'cekkamera', 'deviceoff', ''])];

	$delete = mysqli_query($konek, "DELETE FROM status");

	$simpan = mysqli_query($konek, "INSERT INTO status (status) VALUES ('$status')");

	//uji simpan untuk memberi respon
	echo $simpan ? "Berhasil dikirim | " : "Gagal Terkirim | ";

	sleep(2);
}
