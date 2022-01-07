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
$santri = mysqli_query($conn, "SELECT * FROM info_pendaftaran WHERE id = '" . $_GET['id'] . "' ");
if (mysqli_num_rows($santri) == 0) {
    echo "<script>window.location='./admin-profile-yayasan.php'</script>";
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
                <label>Judul</label>
                <input type="text" class="form-control" name="judul" value=" <?= $s->judul ?>">
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <!-- ==============================CK EDITOR ================================= -->
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Info Pendafataran

                    </h3>
                    <!-- tools box -->

                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <textarea id="editor1" name="info" rows="10" cols="80">
                    <?= $s->info ?>
                    </textarea>



                </div>
            </div>
            <!--================================== CK EDITOR========================== -->



            <button type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>


        </form>
        <?php
        if (isset($_POST['submit'])) {
            $judul = addslashes($_POST['judul']);
            $info = addslashes($_POST['info']);
            $filename = $_FILES['gambar']['name'];
            $tmpname = $_FILES['gambar']['tmp_name'];
            $filesize = $_FILES['gambar']['size'];
            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            $rename = 'pendaftaran_ym-' . time() . '.' . $formatfile;
            $allowedtype = array('png', 'jpg', 'jpeg', 'JPG', 'PNG');

            if (!in_array($formatfile, $allowedtype)) {
                echo '<div class="alert alert-warning alert-dismissible">Format file tidak di izinkan</div>';
            } else {


                move_uploaded_file($tmpname, "../uploads/pendaftaran/" . $rename);

                $update = mysqli_query($conn, "UPDATE info_pendaftaran SET
                judul = '" . $judul . "',
                info = '" . $info . "',
                gambar = '" . $rename . "'
                WHERE id = '" . $_GET['id'] . "'
            ");
                if ($update) {
                    echo " <script>window.location = './admin-pendaftaran.php?msg= Berhasil Edit Data'</script>";
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