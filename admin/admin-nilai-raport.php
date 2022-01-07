<?php
session_start();
include '../koneksi.php';
?>


<?php
include('../layoutadm/head.php');
?>

<?php
include('../layoutadm/header.php');
?>

<?php
include('../layoutadm/navbar.php');
?>
<!-- DataTables -->
<link rel="stylesheet" href="tempalte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Theme style -->

<a href="./admin-tambah-raport.php"><button type="button" class="btn btn-primary btn-sm">Tambah Data Raport</button></a>
<br>
<br>
<div class="box">
    <div class="box-header">
        <?php
        if (isset($_GET['msg'])) {
            echo '<div class="alert alert-success alert-dismissible">' .  $_GET['msg'] . ' </div>';
        }

        ?>
        <h3 class="box-title">Data Nilai Raport</h3>
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
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Semester</th>
                    <th>Raport</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $santri = mysqli_query($conn, "SELECT * FROM nilai_raport INNER JOIN santri ON 
                nilai_raport.id_santri = santri.id_santri");
                if (mysqli_num_rows($santri) > 0) {
                    while ($s = mysqli_fetch_array($santri)) {

                ?>


                        <tr>
                            <td width="40px"><?= $no++ ?></td>
                            <td><?= $s['nama'] ?></td>
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
<script type="text/javascript">
    window.setTimeout(function() {
        $(".alert").fadeTo(300, 0).slideUp(300, function() {
            $(this).remove();
        });

    }, 3000);
</script>


<?php
include('../layoutadm/footer.php');
?>