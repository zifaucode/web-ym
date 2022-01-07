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
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $s->nama ?>">
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat_lahir." value="<?= $s->tempat_lahir ?>">
            </div>

            <div class="form-group">
                <label>Tanggal:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_lahir" value="<?= $s->tanggal_lahir ?>">
                </div>
                <!-- /.input group -->
            </div>


            <div class="form-group">
                <label>Pendidikan</label>
                <select class="form-control" name="id_pend">
                    <option value="">-- Pilih Pendidikan --</option>
                    <option value="1" <?= ($s->id_pend == '1') ? 'selected' : '' ?>>SD/SMP</option>
                    <option value="2" <?= ($s->id_pend == '2') ? 'selected' : '' ?>>SMP/MTS</option>
                    <option value="3" <?= ($s->id_pend == '3') ? 'selected' : '' ?>>SMA/SMK/MA</option>

                </select>
            </div>

            <button type=" submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>

        </form>
        <?php
        if (isset($_POST['submit'])) {

            $nama = addslashes($_POST['nama']);
            $id_pend = $_POST['id_pend'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $orang_tua = $_POST['orang_tua'];


            $update = mysqli_query($conn, "UPDATE santri SET
                nama = '" . $nama . "',
                id_pend = '" . $id_pend . "',
                tempat_lahir = '" . $tempat_lahir . "',
                tanggal_lahir = '" . $tanggal_lahir . "'
                WHERE id_santri = '" . $_GET['id_santri'] . "'
            ");

            if ($update) {
                echo " <script>window.location = './admin-santri.php?msg= Berhasil Edit Data'</script>";
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