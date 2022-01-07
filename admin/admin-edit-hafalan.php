<?php
session_start();
include '../koneksi.php';
?>
<?php
include('../layoutadm/head.php');
?>



<?php
$santri = mysqli_query($conn, "SELECT * FROM nilai_hafalan WHERE id_hafalan = '" . $_GET['id_hafalan'] . "' ");
if (mysqli_num_rows($santri) == 0) {
    echo "<script>window.location='./admin-nilai-hafalan.php'</script>";
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
        <h3 class="box-title">Edit Hafalan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST">
            <!-- text input -->
            <div class="form-group">
                <label>Surat Hafalan</label>
                <input type="text" name="surat_hafalan" class="form-control" placeholder="surat_hafalan" value="<?= $s->surat_hafalan ?>">
            </div>



            <div class="form-group">
                <label>Keterangan</label>
                <select class="form-control" name="keterangan">
                    <option value="LULUS" <?= ($s->keterangan == 'LULUS') ? 'selected' : '' ?>>LULUS</option>
                    <option value="TIDAK LULLUS" <?= ($s->keterangan == 'TIDAK LULUS') ? 'selected' : '' ?>>TIDAK LULUS</option>

                </select>
            </div>
            <div class="form-group">
                <label>Tanggal:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="tanggal" autocomplete="off" value="<?= $s->tanggal ?>">
                </div>
                <!-- /.input group -->
            </div>


            <button type=" submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>

        </form>
        <?php
        if (isset($_POST['submit'])) {

            $surat_hafalan = addslashes($_POST['surat_hafalan']);
            $keterangan = $_POST['keterangan'];
            $tanggal = $_POST['tanggal'];


            $update = mysqli_query($conn, "UPDATE nilai_hafalan SET
                surat_hafalan = '" . $surat_hafalan . "',
                keterangan = '" . $keterangan . "',
                tanggal = '" . $tanggal . "'
                WHERE id_hafalan = '" . $_GET['id_hafalan'] . "'
            ");

            if ($update) {
                echo " <script>window.location = './admin-nilai-hafalan.php?msg= Berhasil Edit Data'</script>";
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