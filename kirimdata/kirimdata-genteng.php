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

//baca data dari esp32
$sisi_1 = $_POST['sisi_1'];
$sisi_2 = $_POST['sisi_2'];

if ($sisi_2 == '') {
	$sisi_2 = $sisi_1;
} elseif ($sisi_1 == '') {
	$sisi_1 = $sisi_2;
}

switch ($sisi_1) {
	case 'rusak':
		$sisi_1_id = 3;
		break;
	case 'batu putih':
		$sisi_1_id = 2;
		break;
	case 'bagus':
		$sisi_1_id = 1;
		break;
}

switch ($sisi_2) {
	case 'rusak':
		$sisi_2_id = 3;
		break;
	case 'batu putih':
		$sisi_2_id = 2;
		break;
	case 'bagus':
		$sisi_2_id = 1;
		break;
}

//simpan ke tabel hasil_inspeksi

//auto increment = 1
mysqli_query($konek, "ALTER TABLE hasil_inspeksi AUTO_INCREMENT=1");
//simpan data sensor ke tabel hasil_inspeksi
$simpan = mysqli_query($konek, "INSERT INTO hasil_inspeksi (sisi_1, sisi_1_id, sisi_2, sisi_2_id) VALUES ('$sisi_1', '$sisi_1_id', '$sisi_2', '$sisi_2_id')");

//uji simpan untuk memberi respon
echo $simpan ? "Berhasil dikirim" : "Gagal Terkirim";
