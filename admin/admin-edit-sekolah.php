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
<?php
$santri = mysqli_query($conn, "SELECT * FROM sekolah WHERE id_sekolah = '" . $_GET['id_sekolah'] . "' ");
if (mysqli_num_rows($santri) == 0) {
    echo "<script>window.location='./admin-sekolah.php'</script>";
}
$s = mysqli_fetch_object($santri);

?>

<br>
<br>



<!-- general form elements disabled -->
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Pendaftaran</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
            <!-- text input -->
            <div class="form-group">
                <label>Nama Sekolah</label>
                <input type="text" class="form-control" name="nama" value=" <?= $s->nama ?>">
            </div>

            <div class="form-group">
                <label>keterangan</label>
                <input type="text" class="form-control" name="keterangan" value="<?= $s->keterangan ?>">
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>




            <button type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>


        </form>
        <?php
        if (isset($_POST['submit'])) {
            $nama = addslashes($_POST['nama']);
            $keterangan = addslashes($_POST['keterangan']);
            $filename = $_FILES['gambar']['name'];
            $tmpname = $_FILES['gambar']['tmp_name'];
            $filesize = $_FILES['gambar']['size'];
            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            $rename = 'sekolah_ym-' . time() . '.' . $formatfile;
            $allowedtype = array('png', 'jpg', 'jpeg', 'JPG', 'PNG');

            if (!in_array($formatfile, $allowedtype)) {
                echo '<div class="alert alert-warning alert-dismissible">Format file tidak di izinkan</div>';
            } else {


                move_uploaded_file($tmpname, "../uploads/sekolah/" . $rename);

                $update = mysqli_query($conn, "UPDATE sekolah SET
                nama = '" . $nama . "',
                keterangan = '" . $keterangan . "',
                gambar = '" . $rename . "'
                WHERE id_sekolah = '" . $_GET['id_sekolah'] . "'
            ");
                if ($update) {
                    echo " <script>window.location = './admin-sekolah.php?msg= Berhasil Edit Data'</script>";
                } else {
                    echo '<div class="alert alert-danger alert-dismissible">GAGAL EDIT DATA &nbsp;' . mysqli_error($conn);
                }
            }
        }

        ?>

    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->



<?php
include('../layoutadm/footer.php');
?>