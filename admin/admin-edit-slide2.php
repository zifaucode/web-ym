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

<br>
<br>



<!-- general form elements disabled -->
<div class="box box-warning">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Gambar Slide 2</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
            <!-- text input -->

            <div class="form-group">
                <label>GAMBAR SLIDE 1</label>
                <input type="file" class="form-control" name="gambar_slide2" required>
            </div>



            <button type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>


        </form>
        <?php
        if (isset($_POST['submit'])) {
            $filename = $_FILES['gambar_slide2']['name'];
            $tmpname = $_FILES['gambar_slide2']['tmp_name'];
            $filesize = $_FILES['gambar_slide2']['size'];
            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            $rename = 'slide_ym-' . time() . '.' . $formatfile;
            $allowedtype = array('png', 'jpg', 'jpeg', 'JPG', 'PNG');

            if (!in_array($formatfile, $allowedtype)) {
                echo '<div class="alert alert-warning alert-dismissible">Format file tidak di izinkan</div>';
            } else {


                move_uploaded_file($tmpname, "../uploads/slide/" . $rename);

                $update = mysqli_query($conn, "UPDATE profile_ym SET
                gambar_slide2 = '" . $rename . "'
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