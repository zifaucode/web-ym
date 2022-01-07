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

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Profile Yayasan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>

                    <th>Visi</th>
                    <th>Misi</th>
                    <th>Program kerja</th>
                    <th>Muqaddimah</th>
                    <th>Kegiatan</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $profile = mysqli_query($conn, "SELECT * FROM profile_ym");
                if (mysqli_num_rows($profile) > 0) {
                    while ($ym = mysqli_fetch_array($profile)) {

                ?>


                        <tr>

                            <td><?= $ym['visi'] ?></td>
                            <td><?= $ym['misi'] ?></td>
                            <td><?= $ym['program_kerja'] ?></td>
                            <td><?= $ym['muqaddimah'] ?></td>
                            <td><?= $ym['kegiatan'] ?></td>
                            <td width="60px">
                                <center> <a href="./admin-edit-profile.php?id_ym=<?= $ym['id_ym'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button></a>&nbsp;

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

<div class="box">
    <div class="box-header">
        <?php
        if (isset($_GET['msg'])) {
            echo '<div class="alert alert-success alert-dismissible">' .  $_GET['msg'] . ' </div>';
        }

        ?>
        <h3 class="box-title">Gambar Slide</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>

                    <th>GAMBAR 1</th>
                    <th>GAMBAR 2</th>
                    <th>GAMBAR 3</th>


                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $profile = mysqli_query($conn, "SELECT * FROM profile_ym");
                if (mysqli_num_rows($profile) > 0) {
                    while ($ym = mysqli_fetch_array($profile)) {

                ?>


                        <tr>

                            <td><img src="../uploads/slide/<?= $ym['gambar_slide1'] ?>" width="150px" alt="">
                                <a href="./admin-edit-slide1.php?id_ym=<?= $ym['id_ym'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>
                            </td>
                            <td><img src="../uploads/slide/<?= $ym['gambar_slide2'] ?>" width="150px" alt="">
                                <a href="./admin-edit-slide2.php?id_ym=<?= $ym['id_ym'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>
                            </td>
                            <td><img src="../uploads/slide/<?= $ym['gambar_slide3'] ?>" width="150px" alt="">
                                <a href="./admin-edit-slide3.php?id_ym=<?= $ym['id_ym'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button>
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
    <br><br>
    <!-- /.box-body -->

    <div class="box-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>

                    <th>TEXT SLIDE 1</th>
                    <th>TEXT SLIDE 2</th>
                    <th>TEXT SLIDE 3</th>
                    <th>EDIT</th>

                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $profile = mysqli_query($conn, "SELECT * FROM profile_ym");
                if (mysqli_num_rows($profile) > 0) {
                    while ($ym = mysqli_fetch_array($profile)) {

                ?>


                        <tr>

                            <td><?= $ym['slide1'] ?></td>
                            <td><?= $ym['slide2'] ?></td>
                            <td><?= $ym['slide3'] ?></td>
                            <td width="60px">
                                <center> <a href="./admin-edit-profile2.php?id_ym=<?= $ym['id_ym'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button></a>&nbsp;

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
</div>


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Pimpinan yayasan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>

                    <th>Foto</th>
                    <th>Nama</th>
                    <th>sambutan</th>
                    <th>Edit</th>


                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $profile = mysqli_query($conn, "SELECT * FROM profile_ym");
                if (mysqli_num_rows($profile) > 0) {
                    while ($ym = mysqli_fetch_array($profile)) {

                ?>


                        <tr>

                            <td><img src="../uploads/pimpinan/<?= $ym['foto_pimpinan'] ?>" width="150px" alt="">

                            </td>
                            <td>
                                <?= $ym['nama_pimpinan'] ?>
                            </td>
                            <td><?= $ym['sambutan_pimpinan'] ?>
                            </td>
                            <td> <a href="./admin-edit-pimpinan.php?id_ym=<?= $ym['id_ym'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button></td>

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
    <br><br>
    <!-- /.box-body -->

</div>
<!-- /.box -->
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