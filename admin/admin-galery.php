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
<a href="./admin-tambah-galery.php"><button type="button" class="btn btn-primary btn-sm">Tambah Gambar</button></a>
<br>
<br>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Galery Yayasan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                $galery = mysqli_query($conn, "SELECT * FROM galery ORDER BY id DESC");
                if (mysqli_num_rows($galery) > 0) {
                    while ($s = mysqli_fetch_array($galery)) {

                ?>


                        <tr>
                            <td width="40px"><?= $no++ ?></td>
                            <td><?= $s['nama'] ?></td>
                            <td><img src="../uploads/galery/<?= $s['gambar'] ?>" width="150px" alt=""></td>
                            <td><?= $s['keterangan'] ?></td>
                            <td width="90px">
                                <center> <a href="./admin-edit-galery.php?id=<?= $s['id'] ?>"><button type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></button></a>&nbsp;
                                    <a href="./admin-hapus-galery.php?id=<?= $s['id'] ?>" onclick="return confirm('Apakah yakin Ingin Menghapus ?')"><button type="button" class="btn  btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
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