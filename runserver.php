<?php

$publicDir = 'public/';

$host = 'localhost';
$port = 8080;

exec('mysql.server start');
echo "mysql started\n";

echo "Server running on http://$host:$port\n";
exec("php -S $host:$port -t $publicDir");