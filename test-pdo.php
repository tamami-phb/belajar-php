<?php
  $dbuser = 'postgres';
  $dbpass = 'rahasia';
  $host = '172.28.0.2';
  $dbname = 'laravel';

  $conn = new PDO("pgsql:host=$host; dbname=$dbname;", $dbuser, $dbpass, array(PDO::ATTR_PERSISTENT => true));
  if($conn) {
    echo "database connected";  
  } else {
    echo "database connecting failed";
  }


?>
