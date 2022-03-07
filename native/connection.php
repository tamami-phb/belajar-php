<?php
$host = "172.28.0.2";
$port = "5432";
$dbname = "laravel";
$user = "postgres";
$pass = "rahasia";
$conn_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";
$dbconn = pg_connect($conn_string);
?>
