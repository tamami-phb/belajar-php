<?php
include('header.php');
$mhs = $_SESSION['mhs'];

if(isset($_POST['update']) and !empty($_POST['update'])) {
    $ret_val = $obj->updateUser();

    if($ret_val == 1) {
        echo '<script type="text/javascript">';
        echo 'alert("Record update successfully");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
}
?>