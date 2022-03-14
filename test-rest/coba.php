<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

include "../native/connection.php";

if(function_exists($_GET['function'])) {
  //echo $_GET['function'];
  $_GET['function']();
}

function get_mahasiswa() {
  $sql = "select * from mahasiswa";
  $result = pg_query($sql);
  $data = pg_fetch_object($result);

  $response = array(
    'status' => 1,
    'message' => 'Success',
    'data' => $data
  );
  header('Content-Type: application/json');
  echo json_encode($response);
}

if($uri[1] !== 'person') {
  header("HTTP/1.1 404 Not Found");
  exit();
}

$userId = null;
if(isset($uri[2])) {
  $userId = (int) $uri[2];
}

$requestMethod = $_SERVER["REQUEST_METHOD"];
?>
