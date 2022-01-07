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
$santri = mysqli_query($conn, "SELECT * FROM nilai_hafalan WHERE id_santri = '" . $_GET['id_santri'] . "' ");
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
        <h3 class="box-title">Data Nilai Hafalan : &nbsp;<?= $p->nama ?></h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example" class="table table-bordered table-striped">
            <thead>
                <tr>


                    <th>Tanggal</th>
                    <th>Surat Hafalan</th>
                    <th>Keterangan</th>


                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $santri = mysqli_query($conn, "SELECT * FROM nilai_hafalan WHERE id_santri = '" . $_GET['id_santri'] . "'");
                if (mysqli_num_rows($santri) > 0) {
                    while ($s = mysqli_fetch_array($santri)) {

                ?>

                        <tr>

                            <td><?= $s['tanggal'] ?></td>
                            <td><?= $s['surat_hafalan'] ?></td>
                            <td><?= $s['keterangan'] ?></td>


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