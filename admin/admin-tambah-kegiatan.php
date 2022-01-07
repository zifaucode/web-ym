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
        <h3 class="box-title">Tambah Kegiatan</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
            <!-- text input -->
            <div class="form-group">
                <label>Nama Kegiatan</label>
                <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" required>
            </div>

            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar" required>
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" cols="30" rows="10" placeholder="Keterangan" class="form-control" required></textarea>

            </div>


            <button type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>


        </form>
        <?php
        if (isset($_POST['submit'])) {

            // print_r($_FILES['gambar']);
            $nama_kegiatan = addslashes($_POST['nama_kegiatan']);
            $keterangan = addslashes($_POST['keterangan']);

            $filename = $_FILES['gambar']['name'];
            $tmpname = $_FILES['gambar']['tmp_name'];
            $filesize = $_FILES['gambar']['size'];
            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            $rename = 'kegiatan_ym-' . time() . '.' . $formatfile;
            $allowedtype = array('png', 'jpg', 'jpeg', 'JPG', 'PNG');

            if (!in_array($formatfile, $allowedtype)) {
                echo '<div class="alert alert-warning alert-dismissible">Format file tidak di izinkan</div>';
            } else {


                move_uploaded_file($tmpname, "../uploads/kegiatan/" . $rename);

                $simpan = mysqli_query($conn, "INSERT INTO kegiatan_santri VALUES (
                null,
                '" . $nama_kegiatan . "',
                '" . $rename . "',
                '" . $keterangan . "'
            )");
                if ($simpan) {
                    echo " <script>window.location = './admin-kegiatan-santri.php?msg= Berhasil Menambahkan Kegiatan'</script>";
                } else {
                    echo '<div class="alert alert-danger alert-dismissible">GAGAL MENYIMPAN DATA &nbsp;' . mysqli_error($conn);
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