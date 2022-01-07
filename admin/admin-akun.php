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

<a href="./admin-tambah-akun.php"><button type="button" class="btn btn-primary btn-sm">Tambah Akun OrangTua</button></a>
<br>
<br>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Akun Terdaftar</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Anak</th>
                    <th>no_hp</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $orangtua = mysqli_query($conn, "SELECT * FROM user_akun INNER JOIN santri ON 
                user_akun.id_santri = santri.id_santri");
                if (mysqli_num_rows($orangtua) > 0) {
                    while ($o = mysqli_fetch_array($orangtua)) {


                ?>

                        <tr>
                            <td><?= $o['nama_ortu'] ?></td>
                            <td><?= $o['username'] ?></td>
                            <td><?= $o['nama'] ?></td>
                            <td><?= $o['no_hp'] ?></td>
                            <td width="20%">
                                <center> <a href="./admin-edit-akun.php?id_ortu=<?= $o['id_ortu'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button></a>&nbsp;
                                    <a href="./admin-hapus-user.php?idortu=<?= $o['id_ortu'] ?>" onclick="return confirm('Apakah yakin Ingin Menghapus ?')"><button type="button" class="btn  btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
                                    <a href="./admin-gantipw.php?id_ortu=<?= $o['id_ortu'] ?>"><button type="button" class="btn  btn-primary btn-sm">Ganti Password</button></a>
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
<!-- jQuery 3 -->
<script src="template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="template/dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function() {
        $('#example').DataTable(

        )

    })
</script>


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