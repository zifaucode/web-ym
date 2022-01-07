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
                <label>TEXT SLIDE 1</label>
                <br>
                <textarea name="slide1" cols="80" rows="7" value=""><?= $s->slide1 ?></textarea>

            </div>
            <div class="form-group">
                <label>TEXT SLIDE 2</label>
                <br>
                <textarea name="slide2" cols="80" rows="7" value=""><?= $s->slide2 ?></textarea>

            </div>
            <div class="form-group">
                <label>TEXT SLIDE 3</label>
                <br>
                <textarea name="slide3" cols="80" rows="7" value=""><?= $s->slide3 ?></textarea>

            </div>



            <button type=" submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>

        </form>
        <?php
        if (isset($_POST['submit'])) {

            $slide1 = addslashes($_POST['slide1']);
            $slide2 = $_POST['slide2'];
            $slide3 = $_POST['slide3'];




            $update = mysqli_query($conn, "UPDATE profile_ym SET
                slide1 = '" . $slide1 . "',
                slide2 = '" . $slide2 . "',
                slide3 = '" . $slide3 . "'
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