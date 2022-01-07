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
        <h3 class="box-title">Tambah Akun Orangtua</h3>
    </div>
    <!-- /.box-header -->



    <div class="box-body">
        <form role="form" action="" method="POST">
            <!-- text input -->

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama_ortu" class="form-control" placeholder="Nama" required>
            </div>

            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="password" class="form-control" placeholder="Password" required>
            </div>


            <div class="form-group">
                <label>Nama Anak</label>

                <select class="form-control" name="id_santri" required>
                    <option value="">-- Pilih Santri --</option>
                    <?php


                    $query = mysqli_query($conn, 'SELECT * FROM santri');

                    $result = array();
                    while ($data = mysqli_fetch_array($query)) {
                        $result[] = $data; //result dijadikan array 
                    }
                    //selanjutnya result array di foreach
                    foreach ($result as $value) { ?>

                        <option value="<?= $value['id_santri'] ?>"><?= $value['nama'] ?></option>
                    <?php } ?>
                </select>

            </div>

            <div class="form-group">
                <label>No Handphone</label>
                <input type="text" class="form-control" name="no_hp" placeholder="No hp" required>
            </div>

            <div class="form-group">
                <label>Level</label>
                <input type="text" class="form-control" name="level" placeholder="Level" value="2" disabled>
            </div>


            <button type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>


        </form>

        <?php
        if (isset($_POST['submit'])) {


            $nama_ortu = addslashes($_POST['nama_ortu']);
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id_santri = $_POST['id_santri'];
            $no_hp = $_POST['no_hp'];
            $level = 2;

            // $cek = mysqli_query($conn, "SELECT username FROM namadatabase WHERE namakolom = '".$user."' ");
            // if(mysqli_num_rows($cek) > 0) {
            //     echo '<div class="alert alert-warning alert-dismissible"> Username Sudah digunakan</div>';
            // }else{

            // }

            $simpan = mysqli_query($conn, "INSERT INTO user_akun VALUES (
                null,
                '" . $nama_ortu . "',
                '" . $username . "',
                '" . MD5($password) . "',
                '" . $id_santri . "',
                '" . $no_hp . "',
                '" . $level . "'
            )");
            if ($simpan) {
                echo " <script>window.location = './admin-akun.php?msg= Berhasil Menambahkan Akun / Orangtua'</script>";
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