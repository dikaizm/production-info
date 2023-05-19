<?php

require('cekgenteng.php');

//uji, apabila bila genteng belum ada, maka anggap genteng = -
if ($total == 0) {
    $response = 'Tidak ada';
} else {
    $response = $total;
}

echo $response;