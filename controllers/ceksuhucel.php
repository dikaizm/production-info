<?php
//buatlah koneksi ke database
$konek = mysqli_connect("127.0.0.1", "root", "12345678", "u1571246_databasepembakaran");
//baca data dari tabel datasensor
$sql = mysqli_query($konek, "SELECT * from suhu_pembakaran order by id desc"); //data terakhir akan ada di atas

//baca data paling atas
$data = mysqli_fetch_array($sql);
$suhucel = $data['suhucel'];

//uji, apabila bila suhucel belum ada, maka anggap suhucel = 0
if ($suhucel < 0) $suhucel = 0;

//cetak nilai suhucel
echo $suhucel;