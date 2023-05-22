<?php

require('cekgenteng.php');

if ($result['kualitas_3'] == 0) {
    $response = 'Tidak ada';
} else {
    $response = $result['kualitas_3'];
}

echo $response;