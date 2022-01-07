<?php
session_start();
include '../koneksi.php';
?>
<?php
include('../layoutadm/head.php');
?>

<?php
$santri = mysqli_query($conn, "SELECT * FROM profile_ym WHERE id_ym = '" . $_GET['id_ym'] . "' ");
if (mysqli_num_rows($santri) == 0) {
    echo "<script>window.location='./admin-profile-yayasan.php'</script>";
}
$s = mysqli_fetch_object($santri);

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
        <h3 class="box-title">Edit Profile Ym</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST">
            <!-- text input -->
            <div class="form-group">
                <label>GAMBAR SLIDE 1</label>
                <br>
                <input type="file" class="form-control" name="gambar_slide1" value="<?= $s->gambar_slide1 ?>">

            </div>

            <div class="form-group">
                <label>GAMBAR SLIDE 2</label>
                <br>
                <input type="file" class="form-control" name="gambar_slide2" value="<?= $s->gambar_slide2 ?>">

            </div>

            <div class="form-group">
                <label>GAMBAR SLIDE 3</label>
                <br>
                <input type="file" class="form-control" name="gambar_slide3" value="<?= $s->gambar_slide3 ?>">

            </div>




            <button type=" submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>

        </form>
        <?php
        if (isset($_POST['submit'])) {

            $gambar_slide1 = $_POST['gambar_slide1'];
            $gambar_slide2 = $_POST['gambar_slide2'];
            $gambar_slide3 = $_POST['gambar_slide3'];




            $update = mysqli_query($conn, "UPDATE profile_ym SET
                gambar_slide1 = '" . $gambar_slide1 . "',
                gambar_slide2 = '" . $gambar_slide2 . "',
                gambar_slide3 = '" . $gambar_slide3 . "'
                WHERE id_ym = '" . $_GET['id_ym'] . "'
            ");

            if ($update) {
                echo " <script>window.location = './admin-profile-yayasan.php?msg= Berhasil Edit Data'</script>";
            } else {
                echo '<div class="alert alert-danger alert-dismissible">GAGAL EDIT DATA &nbsp;' . mysqli_error($conn);
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