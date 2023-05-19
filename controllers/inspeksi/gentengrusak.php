<?php

require('cekgenteng.php');

if ($result['rusak'] == 0) {
    $response = 'Tidak ada';
} else {
    $response = $result['rusak'];
}

echo $response;