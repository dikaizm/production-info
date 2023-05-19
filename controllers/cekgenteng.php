<?php 
	//buatlah koneksi ke database
	$konek = mysqli_connect("localhost", "ptsi9567_ptsinarmasraya", "sinarmasraya", "ptsi9567_klasifikasigenteng"); 
	//baca data dari tabel datasensor
	$sql = mysqli_query($konek, "select * from Hasil_Inspeksi order by id desc"); //data terakhir akan ada di atas

	//baca data paling atas
	$data = mysqli_fetch_array($sql);
	$genteng = $data['genteng'];

	//uji, apabila bila genteng belum ada, maka anggap genteng = -
	if( $genteng == "") $genteng = "tidakada";

	//cetak nilai genteng
	echo $genteng
?>