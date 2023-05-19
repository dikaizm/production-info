<?php
//buatlah koneksi ke database
$konek = mysqli_connect("127.0.0.1", "root", "12345678", "u1571246_databasepembakaran");

if (!$konek) {
    die("Connection failed: " . mysqli_connect_error());
}

while (true) {
	//baca data dari virtual generator
	$suhucel = rand(20, 50);
	$suhufah = rand(30, 200);

	//baca data dari esp32
	// $suhucel = $_POST['suhucel'];
	// $suhufah = $_POST['suhufah'];

	//simpan ke tabel suhu_pembakaran

	//auto increment = 1
	mysqli_query($konek, "ALTER TABLE suhu_pembakaran AUTO_INCREMENT=1");
	//simpan data sensor ke tabel suhu_pembakaran
	$simpan = mysqli_query($konek, "insert into suhu_pembakaran(suhucel, suhufah)values('$suhucel', '$suhufah')");
	
	//uji simpan untuk memberi respon
	if ($simpan) {
		echo "Berhasil dikirim";
	} else {
		echo "Gagal Terkirim";
	}

	sleep(2);
}