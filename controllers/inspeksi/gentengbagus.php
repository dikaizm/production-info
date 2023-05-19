<?php

require('cekgenteng.php');

if ($result['bagus'] == 0) {
    $response = 'Tidak ada';
} else {
    $response = $result['bagus'];
}

echo $response;