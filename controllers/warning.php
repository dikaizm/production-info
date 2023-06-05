<?php
require('config.php');

//buatlah koneksi ke database
$konek = mysqli_connect(
	$config['hostname'],
	$config['username'],
	$config['password'],
	$config['database']
);

$sql = mysqli_query($konek, "SELECT * from warning");

$data = mysqli_fetch_array($sql);
$status = $data['status'];

if ($status == "" || $status == null) $status = 0;

echo $status;