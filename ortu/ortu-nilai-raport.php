<?php
session_start();
include '../koneksi.php';
?>

<?php

$id = $_SESSION['uid_santri'];
$santri = mysqli_query($conn, "SELECT * FROM santri WHERE id_santri = '" . $id . "' ");
if (mysqli_num_rows($santri) == 0) {
    echo "hallo";
}
$p = mysqli_fetch_object($santri);



?>


<?php
$santri = mysqli_query($conn, "SELECT * FROM nilai_raport WHERE id_santri = '" . $_GET['id_santri'] . "' ");
if (mysqli_num_rows($santri) == 0) {
    echo "";
}
$s = mysqli_fetch_object($santri);

?>

<?php
include('../layoutortu/head.php');
?>


<?php
include('../layoutortu/header.php');
?>
<!-- DataTables -->
<link rel="stylesheet" href="tempalte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Theme style -->

<br>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Nilai Raport : &nbsp;<?= $p->nama ?></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <?php
        // $santri = mysqli_query($conn, "SELECT * FROM nilai_hafalan INNER JOIN santri ON 
        // nilai_hafalan.id_santri = santri.id_santri");
        ?>
        <table id="example" class="table table-bordered table-striped">
            <thead>
                <tr>


                    <th>Kelas</th>
                    <th>Semester</th>
                    <th>Raport</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $santri = mysqli_query($conn, "SELECT * FROM nilai_raport WHERE id_santri = '" . $_GET['id_santri'] . "'");
                if (mysqli_num_rows($santri) > 0) {
                    while ($s = mysqli_fetch_array($santri)) {

                ?>
                        <tr>
                            <td><?= $s['kelas'] ?></td>
                            <td><?= $s['semester'] ?></td>
                            <td><?= $s['raport'] ?></td>
                            <td width="90px">
                                <center> <a href="../uploads/raport/<?= $s['raport'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-download"></i></button></a>
                                </center>

                            </td>
                        </tr>
                    <?php }
                } else { ?>

                    <tr>
                        <td>Data tidak ada</td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

<?php
include('../layoutortu/footer.php');
?>