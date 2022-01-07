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

<a href="./admin-tambah-santri.php"><button type="button" class="btn btn-primary btn-sm">Tambah Santri</button></a>
<br>
<br>
<div class="box">
    <div class="box-header">
        <?php
        if (isset($_GET['msg'])) {
            echo '<div class="alert alert-success alert-dismissible">' .  $_GET['msg'] . ' </div>';
        }

        ?>
        <h3 class="box-title">Data Santri</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>TTL</th>
                    <th>Pendidikan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $santri = mysqli_query($conn, "SELECT * FROM santri INNER JOIN pendidikan ON 
                santri.id_pend = pendidikan.id_pend");
                if (mysqli_num_rows($santri) > 0) {
                    while ($s = mysqli_fetch_array($santri)) {

                ?>


                        <tr>
                            <td width="40px"><?= $no++ ?></td>
                            <td><?= $s['nama'] ?></td>
                            <td><?= $s['tempat_lahir'] ?>,<?= $s['tanggal_lahir'] ?></td>
                            <td><?= $s['nama_pend'] ?></td>
                            <td width="90px">
                                <center> <a href="./admin-edit-santri.php?id_santri=<?= $s['id_santri'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button></a>&nbsp;
                                    <a href="./admin-hapus.php?idsantri=<?= $s['id_santri'] ?>" onclick="return confirm('Apakah yakin Ingin Menghapus ?')"><button type="button" class="btn  btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
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