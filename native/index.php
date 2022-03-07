<?php
include('header.php');

$listMhs = $obj->getMhs();
$sn = 1;

if(isset($_POST['update'])) {
    $mhs = $obj->getMhsByNim();
    $_SESSION['mhs'] = pg_fetch_object($mhs);
    header('localhost:edit.php');
}

if(isset($_POST['delete'])) {
    $ret_val = $obj->deleteMhs();
    if($ret_val == 1) {
        echo "<script language='javascript'>";
        echo "alert('Record Deleted Successfully'){ window.location.reload(); }";
        echo "</script>";
    }
}
?>

<div class="container-fluid bg-3 text-center">
    <h3>Contoh Data Mahasiswa</h3>
    <a href="insert.php" class="btn btn-primary pull-right" style='margin-top:-30px'>
        <span class="glyphicon glyphicon-plus-sign">Tambah</span>
    </a>
    <br>

    <div class="panel panel-primary">
        <div class="panel-heading">Data Mahasiswa</div>

        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="active">
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>KELAS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($mhs = pg_fetch_object($listMhs)): ?>
                    <tr align="left">
                        <td><?= $mhs->nim ?></td>
                        <td><?= $mhs->nama ?></td>
                        <td><?= $mhs->kelas ?></td>
                        <td>
                            <form method="post">
                                <input type="submit" class="btn btn-success" name="update" value="Ubah">
                                <input type="submit" onClick="return confirm('konfirmasi penghapusan');" 
                                    class="btn btn-danger" name="delete" value="Hapus">
                                <input type="hidden" value="<?= $mhs->nim ?>" name="nim">
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include('footer.php'); ?>