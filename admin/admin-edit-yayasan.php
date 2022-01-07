<?php
session_start();
include '../koneksi.php';
?>

<?php
include('../layoutadm/head.php');
?>

<?php
$santri = mysqli_query($conn, "SELECT * FROM santri WHERE id_santri = '" . $_GET['id_santri'] . "' ");
if (mysqli_num_rows($santri) == 0) {
    echo "<script>window.location='./admin-santri.php'</script>";
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
        <h3 class="box-title">Edit Santri</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST">
            <!-- text input -->
            <div class="form-group">
                <label>Visi</label>
                <textarea name="visi" id="" cols="30" rows="10"></textarea>

            </div>

            <div class="form-group">
                <label>Misi</label>
                <textarea name="misi" id="" cols="30" rows="10"></textarea>

            </div>

            <div class="form-group">
                <label>Program Kerja</label>
                <textarea name="program_kerja" id="" cols="30" rows="10"></textarea>

            </div>

            <div class="form-group">
                <label>Muqaddimah</label>
                <textarea name="muqaddimah" id="" cols="30" rows="10"></textarea>

            </div>
            <!-- <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tanggal_lahir." value="<?= $s->tanggal_lahir ?>">
            </div> -->


            <button type=" submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>

        </form>
        <?php
        if (isset($_POST['submit'])) {

            $visi = addslashes($_POST['visi']);
            $visi = $_POST['visi'];
            $program_kerja = $_POST['program_kerja'];
            $muqaddimah = $_POST['muqaddimah'];


            $update = mysqli_query($conn, "UPDATE profie_ym SET
                visi = '" . $visi . "',
                misi = '" . $misi . "',
                program_kerja = '" . $program_kerja . "',
                muqaddimah = '" . $muqaddimah . "'
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