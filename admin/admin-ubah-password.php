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
        <h3 class="box-title">Ubah Password</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST">
            <!-- text input -->
            <div class="form-group">
                <label>Password Baru</label>
                <input type="password" name="pass1" class="form-control" placeholder="Password" required>
            </div>

            <div class="form-group">
                <label>Ulangi Password</label>
                <input type="password" name="pass2" class="form-control" placeholder="Ulangi Password" required>
            </div>



            <button type="submit" name="submit" value="Ubah Password" class="btn btn-primary btn-sm">Simpan</button>


        </form>
        <?php
        if (isset($_POST['submit'])) {

            $pass1 = addslashes($_POST['pass1']);
            $pass2 = addslashes($_POST['pass2']);

            if ($pass2 != $pass1) {
                echo 'Password tidak sama';
            } else {


                $update = mysqli_query($conn, "UPDATE admin_akun SET
            password = '" . MD5($pass1) . "'
            WHERE id = '" . $_SESSION['uid'] . "'
        ");

                if ($update) {
                    echo 'Ubah Password Berhasil';
                } else {
                    echo 'Gagal Edit data' . mysqli_error($conn);
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