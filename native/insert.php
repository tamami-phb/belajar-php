<?php
include('header.php');

if(isset($_POST['submit']) and !empty($_POST['submit'])) {
    $ret_val = $obj->createUser();
    if($ret_val == 1) {
        echo '<script type="text/javascript">';
        echo 'alert("Record saved successfully");';
        echo 'window.location.href = "index.php";';
        echo '</script>';
    }
}
?>

<div class="container-fluid bg-3 text-center">
    <h3>Data Mahasiswa</h3>
    <a href="index.php" class="btn btn-primary pull-right" style='margin-top:-30px'>
        <span class="glyphicon glyphicon-eye-open"></span> View Records
    </a>
    <br>

    <div class="panel panel-primary">
        <div class="panel-heading">Aplikasi Mahasiswa</div>
        <form class="form-horizontal" method="post">
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label col-sm-2">NIM:<span style='color:red'>*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="nim" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">NAMA:<span style="color: red">*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type=text" name="nama" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2">KELAS:<span style="color: red">*</span></label>
                    <div class="col-sm-5">
                        <input class="form-control" type="text" name="kelas" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2"> </label>
                    <div class="col-sm-5">
                        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include('footer.php'); ?>