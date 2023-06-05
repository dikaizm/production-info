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
	$status = ['nyala', ''][array_rand(['nyala', ''])];

	$delete = mysqli_query($konek, "DELETE FROM warning");

	$simpan = mysqli_query($konek, "INSERT INTO warning (status) VALUES ('$status')");

	//uji simpan untuk memberi respon
	echo $simpan ? "Berhasil dikirim | " : "Gagal Terkirim | ";

	sleep(2);
}
