<?php
session_start();
include '../koneksi.php';
?>

<?php
include('../layoutadm/head.php');
?>


<?php
$santri = mysqli_query($conn, "SELECT * FROM user_akun WHERE id_ortu = '" . $_GET['id_ortu'] . "' ");
if (mysqli_num_rows($santri) == 0) {
    echo "<script>window.location='./admin-akun.php'</script>";
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
                <input type="text" name="nama_ortu" class="form-control" placeholder="Nama" value="<?= $s->nama_ortu ?>">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="username" value="<?= $s->username ?>">
            </div>
            <div class="form-group">
                <label>No HP</label>
                <input type="text" name="no_hp" class="form-control" placeholder="no hp" value="<?= $s->no_hp ?>">
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

            <button type=" submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>

        </form>
        <?php
        if (isset($_POST['submit'])) {

            $nama_ortu = addslashes($_POST['nama_ortu']);
            $username = $_POST['username'];
            $no_hp = $_POST['no_hp'];
            $id_santri = $_POST['id_santri'];



            $update = mysqli_query($conn, "UPDATE user_akun SET
                nama_ortu = '" . $nama_ortu . "',
                username = '" . $username . "',
                no_hp = '" . $no_hp . "',
                id_santri = '" . $id_santri . "'
                WHERE id_ortu = '" . $_GET['id_ortu'] . "'
            ");

            if ($update) {
                echo " <script>window.location = './admin-akun.php?msg= Berhasil Edit Data'</script>";
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