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
	//baca data dari esp32
	$suhucel = $_POST['suhucel'];
	$suhufah = $_POST['suhufah'];

	//simpan ke tabel suhu_pembakaran

	//auto increment = 1
	mysqli_query($konek, "ALTER TABLE suhu_pembakaran AUTO_INCREMENT=1");
	//simpan data sensor ke tabel suhu_pembakaran
	$simpan = mysqli_query($konek, "INSERT INTO suhu_pembakaran (suhucel, suhufah) VALUES ('$suhucel', '$suhufah')");

	//uji simpan untuk memberi respon
	echo $simpan ? "Berhasil dikirim | " : "Gagal Terkirim | ";

	sleep(2);
}
