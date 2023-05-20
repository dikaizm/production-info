<?php

require('cekgenteng.php');

if ($result['kualitas_1'] == 0) {
    $response = 'Tidak ada';
} else {
    $response = $result['kualitas_1'];
}

echo $response;