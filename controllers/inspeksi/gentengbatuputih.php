<?php

require('cekgenteng.php');

if ($result['kualitas_2'] == 0) {
    $response = 'Tidak ada';
} else {
    $response = $result['kualitas_2'];
}

echo $response;