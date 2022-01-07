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
        <h3 class="box-title">Tambah Santri</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST">
            <!-- text input -->
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" required>
            </div>

            <div class="form-group">
                <label>Pendidikan</label>
                <select class="form-control" name="id_pend" required>
                    <option value="">-- Pilih Pendidikan --</option>
                    <option value="1">SD/SMP</option>
                    <option value="2">SMP/MTS</option>
                    <option value="3">SMA/SMK/MA</option>

                </select>
            </div>
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir ..." required>
            </div>
            <div class="form-group">
                <label>Tanggal:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="tanggal_lahir">
                </div>
                <!-- /.input group -->
            </div>

            <button type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>


        </form>
        <?php
        if (isset($_POST['submit'])) {

            $nama = addslashes($_POST['nama']);
            $id_pend = $_POST['id_pend'];
            $tempat_lahir = $_POST['tempat_lahir'];
            $tanggal_lahir = $_POST['tanggal_lahir'];

            // $cek = mysqli_query($conn, "SELECT username FROM namadatabase WHERE namakolom = '".$user."' ");
            // if(mysqli_num_rows($cek) > 0) {
            //     echo '<div class="alert alert-warning alert-dismissible"> Username Sudah digunakan</div>';
            // }else{

            // }

            $simpan = mysqli_query($conn, "INSERT INTO santri VALUES (
                null,
                '" . $nama . "',
                '" . $id_pend . "',
                '" . $tempat_lahir . "',
                '" . $tanggal_lahir . "'
            )");
            if ($simpan) {
                echo " <script>window.location = './admin-santri.php?msg= Berhasil Menambahkan Santri'</script>";
            } else {
                echo '<div class="alert alert-danger alert-dismissible">GAGAL MENYIMPAN DATA &nbsp;' . mysqli_error($conn);
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