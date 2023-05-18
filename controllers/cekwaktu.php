<?php
//buatlah koneksi ke database
$konek = mysqli_connect("127.0.0.1", "root", "12345678", "u1571246_databasepembakaran");
//baca data dari tabel datasensor
$sql = mysqli_query($konek, "SELECT * from suhu_pembakaran order by id desc"); //data terakhir akan ada di atas

//baca data paling atas
$data = mysqli_fetch_array($sql);
$waktu = $data['waktu'];

//uji, apabila bila waktu belum ada, maka anggap waktu = 0
if ($waktu < 0) $waktu = 0;

//reformat waktu ke format yang diinginkan
$reformattedWaktu = date("l, j F Y", strtotime($waktu));

//cetak nilai waktu yang diformat
echo $reformattedWaktu;
