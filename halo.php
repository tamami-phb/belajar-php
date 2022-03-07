<h3>Tester DB Connection</h3>
<?php
$conn_string = "host=172.28.0.2 port=5432 dbname=laravel user=postgres password=rahasia";
$dbconn = pg_connect($conn_string);

if($dbconn) {
  echo 'Connection succeeded.';
} else {
  echo 'Connection failed.';
}

pg_close($dbconn);
?>
