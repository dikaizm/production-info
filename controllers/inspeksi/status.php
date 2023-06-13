<?php
require('../config.php');

//buatlah koneksi ke database
$konek = mysqli_connect(
	$config['hostname'],
	$config['username'],
	$config['password'],
	$config['database']
);

$sql = mysqli_query($konek, "SELECT status FROM status ORDER BY id DESC");
$data = mysqli_fetch_array($sql);

$status = [
	'data' => $data['status']	
];

if (empty($status)) $status = 0;

echo json_encode($status);