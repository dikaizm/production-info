<?php
//buatlah koneksi ke database
$konek = mysqli_connect("127.0.0.1", "root", "12345678", "u1571246_databasepembakaran");
//baca data dari tabel datasensor
$sql = mysqli_query($konek, "SELECT * from suhu_pembakaran order by id desc"); //data terakhir akan ada di atas

//baca data paling atas
$data = mysqli_fetch_array($sql);
$id = $data['id'];

//uji, apabila bila Id belum ada, maka anggap Id = 0
if ($id == "") $id = 0;

//cetak nilai Id
echo $id;