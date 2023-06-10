<?php
require('../config.php');

//buatlah koneksi ke database
$konek = mysqli_connect(
	$config['hostname'],
	$config['username'],
	$config['password'],
	$config['database']
);

$sql = mysqli_query($konek, "SELECT * from status");

$data = mysqli_fetch_array($sql);
$status = $data['status'];

if (empty($status)) $status = 0;

echo $status;