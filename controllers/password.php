<?php

require('config.php');

$getPassword = $_POST['password'];
$hashedPassword = md5($getPassword);

if ($hashedPassword === md5($config['dlpass'])) {
    echo 'true';
} else {
    echo 'false';
}
