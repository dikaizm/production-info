<?php
require('../config.php');

//buatlah koneksi ke database
$konek = mysqli_connect(
	$config['hostname'],
	$config['username'],
	$config['password'],
	$config['database']
);

//baca data dari tabel datasensor
$sql = mysqli_query($konek, "SELECT kualitas_id FROM hasil_inspeksi");

$kualitas = array();

while ($row = mysqli_fetch_array($sql)) {
    $kualitas[] = $row['kualitas_id'];
}

$result = array(
	'kualitas_1' => 0,
	'kualitas_2' => 0,
	'kualitas_3' => 0
);

foreach ($kualitas as $qty) {
	if ($qty == 3) {
		$result['kualitas_3']++;
	} elseif ($qty == 2) {
		$result['kualitas_2']++;
	} elseif ($qty == 1) {
		$result['kualitas_1']++;
	}
}

$total = $result['kualitas_1'] + $result['kualitas_2'] + $result['kualitas_3'];