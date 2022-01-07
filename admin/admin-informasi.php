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
<br>
<br>
<a href="././admin-tambah-info.php"><button type="button" class="btn btn-primary btn-sm">Tambah Informasi</button></a>
<br>
<br>
<div class="box">
    <div class="box-header">
        <?php
        if (isset($_GET['msg'])) {
            echo '<div class="alert alert-success alert-dismissible">' .  $_GET['msg'] . ' </div>';
        }

        ?>
        <h3 class="box-title">Informasi</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Isi Informasi</th>
                    <th>Gambar / wali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id_info DESC");
                if (mysqli_num_rows($informasi) > 0) {
                    while ($inf = mysqli_fetch_array($informasi)) {

                ?>


                        <tr>
                            <td width="40px"><?= $no++ ?></td>
                            <td><?= $inf['judul'] ?></td>
                            <td><?= $inf['isi_info'] ?></td>
                            <td><?= $inf['gambar'] ?></td>
                            <td width="90px">
                                <center> <a href="./admin-edit-informasi.php?id_info=<?= $inf['id_info'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button></a>&nbsp;
                                    <a href="./admin-hapus-informasi.php?id_info=<?= $inf['id_info'] ?>" onclick="return confirm('Apakah yakin Ingin Menghapus ?')"><button type="button" class="btn  btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
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