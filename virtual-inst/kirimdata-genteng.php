<?php 
	//buatlah koneksi ke database
	$konek = mysqli_connect("localhost", "ptsi9567_ptsinarmasraya", "sinarmasraya", "ptsi9567_klasifikasigenteng"); 

	//baca data dari esp32
	$category_name = $_POST['category_name'];

	//simpan ke tabel hasil_inspeksi

	//auto increment = 1
	mysqli_query($konek, "ALTER TABLE hasil_inspeksi AUTO_INCREMENT=1");
	//simpan data sensor ke tabel hasil_inspeksi
	$simpan = mysqli_query($konek, "insert into hasil_inspeksi(genteng)values('$category_name')");

	//uji simpan untuk memberi respon
	if($simpan)
		echo "Berhasil dikirim";
	else
		echo "Gagal Terkirim";
?>

