<?php

require('cekgenteng.php');

if ($result['batuputih'] == 0) {
    $response = 'Tidak ada';
} else {
    $response = $result['batuputih'];
}

echo $response;