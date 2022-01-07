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
$santri = mysqli_query($conn, "SELECT * FROM informasi WHERE id_info = '" . $_GET['id_info'] . "' ");
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
        <h3 class="box-title">Edit Informasi</h3>
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
                <label>Tanggal:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="tanggal" value=" <?= $s->tanggal ?>">
                </div>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <!-- ==============================CK EDITOR ================================= -->
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Sambutan

                    </h3>
                    <!-- tools box -->

                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <textarea id="editor1" name="isi_info" rows="10" cols="80">
                    <?= $s->isi_info ?>
                    </textarea>



                </div>
            </div>
            <!--================================== CK EDITOR========================== -->



            <button type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>


        </form>
        <?php
        if (isset($_POST['submit'])) {
            $judul = addslashes($_POST['judul']);
            $tanggal = addslashes($_POST['tanggal']);
            $isi_info = addslashes($_POST['isi_info']);
            $filename = $_FILES['gambar']['name'];
            $tmpname = $_FILES['gambar']['tmp_name'];
            $filesize = $_FILES['gambar']['size'];
            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            $rename = 'informasi_ym-' . time() . '.' . $formatfile;
            $allowedtype = array('png', 'jpg', 'jpeg', 'JPG', 'PNG');

            if (!in_array($formatfile, $allowedtype)) {
                echo '<div class="alert alert-warning alert-dismissible">Format file tidak di izinkan</div>';
            } else {


                move_uploaded_file($tmpname, "../uploads/informasi/" . $rename);

                $update = mysqli_query($conn, "UPDATE informasi SET
                judul = '" . $judul . "',
                tanggal = '" . $tanggal . "',
                isi_info = '" . $isi_info . "',
                gambar = '" . $rename . "'
                WHERE id_info = '" . $_GET['id_info'] . "'
            ");
                if ($update) {
                    echo " <script>window.location = './admin-informasi.php?msg= Berhasil Edit Data'</script>";
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