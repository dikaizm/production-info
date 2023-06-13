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

function simpanQuery($con, $val)
{
	$simpan = mysqli_query($con, "INSERT INTO status (status) VALUES ('$val')");
	echo $simpan ? "Berhasil dikirim | " : "Gagal Terkirim | ";
}

$status = $_POST['status'];

$sql = mysqli_query($konek, "SELECT status FROM status ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_array($sql);
$getStatus = $data['status'];

if (!empty($status)) {
	if ($getStatus != 'running') {
		simpanQuery($konek, $status);
	} else if ($getStatus == 'running') {
		if ($status != 'running') {
			simpanQuery($konek, $status);
		}
	}
}
