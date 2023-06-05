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
// $sisi_1 = $_POST['category_name'];
// $sisi_2 = $_POST['category_name'];

while (true) {
	//baca data dari virtual generator
	$sisi_1 = ['retak', 'batu putih', 'bagus'][array_rand(['retak', 'batu putih', 'bagus'])];
	$sisi_2 = ['retak', 'batu putih', 'bagus'][array_rand(['retak', 'batu putih', 'bagus'])];

	if ($sisi_2 == '' || $sisi_2 == null) {
		$sisi_2 = "";
		$kualitas = "";
		$kualitas_id = null;

		//auto increment = 1
		mysqli_query($konek, "ALTER TABLE hasil_inspeksi AUTO_INCREMENT=1");
		//simpan data sensor ke tabel hasil_inspeksi
		$simpan = mysqli_query($konek, "INSERT INTO hasil_inspeksi (sisi_1, sisi_2, kualitas, kualitas_id) VALUES ('$sisi_1', '$sisi_2', '$kualitas', '$kualitas_id')");

		echo $simpan ? "Berhasil dikirim sisi_1 | " : "Gagal Terkirim sisi_1 | ";
	} else if ($sisi_1 == '' || $sisi_1 == null) {
		$sql = mysqli_query($konek, "SELECT sisi_1 FROM hasil_inspeksi ORDER BY id DESC");
		$data = mysqli_fetch_array($sql);
		$sisi_1 = $data['sisi_1'];

		if ($sisi_2 == '' || $sisi_2 == null) {
			$sisi_2 = $sisi_1;
		} elseif ($sisi_1 == '' || $sisi_1 == null) {
			$sisi_1 = $sisi_2;
		}

		if ($sisi_1 == 'retak' || $sisi_2 == 'retak') {
			$kualitas = 'kualitas 3';
			$kualitas_id = 3;
		} elseif ($sisi_1 == 'batu putih' || $sisi_2 == 'batu putih') {
			$kualitas = 'kualitas 2';
			$kualitas_id = 2;
		} elseif ($sisi_1 == 'bagus' && $sisi_2 == 'bagus') {
			$kualitas = 'kualitas 1';
			$kualitas_id = 1;
		}

		//simpan data sensor ke tabel hasil_inspeksi
		$simpan = mysqli_query($konek, "UPDATE hasil_inspeksi SET sisi_2 = '$sisi_2', kualitas = '$kualitas', kualitas_id = '$kualitas_id' ORDER BY id DESC LIMIT 1");

		echo $simpan ? "Berhasil dikirim sisi_2 | " : "Gagal Terkirim sisi_2 | ";
	}


	sleep(2);
}
