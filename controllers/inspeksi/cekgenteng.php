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
$sql = mysqli_query($konek, "SELECT sisi_1_id, sisi_2_id FROM hasil_inspeksi");

$sisi_1_arr = array();
$sisi_2_arr = array();

while ($row = mysqli_fetch_array($sql)) {
    $sisi_1_arr[] = $row['sisi_1_id'];
    $sisi_2_arr[] = $row['sisi_2_id'];
}

$result = array(
	'rusak' => 0,
	'batuputih' => 0,
	'bagus' => 0
);

foreach ($sisi_1_arr as $sisi_1) {
	foreach ($sisi_2_arr as $sisi_2) {
		if ($sisi_1 == 3 || $sisi_2 == 3) {
			$result['rusak']++;
			break;
		} elseif ($sisi_1 == 2 || $sisi_2 == 2) {
			$result['batuputih']++;
			break;
		} elseif ($sisi_1 == 1 && $sisi_2 == 1) {
			$result['bagus']++;
			break;
		}
	}
}

$total = $result['rusak'] + $result['batuputih'] + $result['bagus'];