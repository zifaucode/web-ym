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
$santri = mysqli_query($conn, "SELECT * FROM profile_ym WHERE id_ym = '" . $_GET['id_ym'] . "' ");
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
        <h3 class="box-title">Edit Pimpinan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
            <!-- text input -->
            <div class="form-group">
                <label>Nama Pimpinan</label>
                <input type="text" class="form-control" name="nama_pimpinan" value=" <?= $s->nama_pimpinan ?>">
            </div>

            <div class="form-group">
                <label>Foto Pimpinan</label>
                <input type="file" class="form-control" name="foto_pimpinan">
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

                    <textarea id="editor1" name="sambutan_pimpinan" rows="10" cols="80">
                    <?= $s->sambutan_pimpinan ?>
                    </textarea>



                </div>
            </div>
            <!--================================== CK EDITOR========================== -->



            <button type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>


        </form>
        <?php
        if (isset($_POST['submit'])) {
            $nama_pimpinan = addslashes($_POST['nama_pimpinan']);
            $sambutan_pimpinan = addslashes($_POST['sambutan_pimpinan']);
            $filename = $_FILES['foto_pimpinan']['name'];
            $tmpname = $_FILES['foto_pimpinan']['tmp_name'];
            $filesize = $_FILES['foto_pimpinan']['size'];
            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            $rename = 'pimpinan_ym-' . time() . '.' . $formatfile;
            $allowedtype = array('png', 'jpg', 'jpeg', 'JPG', 'PNG');

            if (!in_array($formatfile, $allowedtype)) {
                echo '<div class="alert alert-warning alert-dismissible">Format file tidak di izinkan</div>';
            } else {


                move_uploaded_file($tmpname, "../uploads/pimpinan/" . $rename);

                $update = mysqli_query($conn, "UPDATE profile_ym SET
                nama_pimpinan = '" . $nama_pimpinan . "',
                sambutan_pimpinan = '" . $sambutan_pimpinan . "',
                foto_pimpinan = '" . $rename . "'
                WHERE id_ym = '" . $_GET['id_ym'] . "'
            ");
                if ($update) {
                    echo " <script>window.location = './admin-profile-yayasan.php?msg= Berhasil Edit Data'</script>";
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