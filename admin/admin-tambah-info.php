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
        <h3 class="box-title">Tambah Informasi</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
            <!-- text input -->
            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul" required>
            </div>



            <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="gambar" required>
            </div>

            <!-- ==============================CK EDITOR ================================= -->
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">isi Informasi

                    </h3>
                    <!-- tools box -->

                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <textarea id="editor1" name="isi_info" rows="10" cols="80">

                    </textarea>



                </div>
            </div>
            <!--================================== CK EDITOR========================== -->
            <div class="form-group">
                <label>Tanggal:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="tanggal" autocomplete="off">
                </div>
            </div>


            <button type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm pull-right">Simpan</button>


        </form>
        <?php
        if (isset($_POST['submit'])) {

            // print_r($_FILES['gambar']);
            $judul = addslashes($_POST['judul']);
            $tanggal = addslashes($_POST['tanggal']);
            $isi_info = addslashes($_POST['isi_info']);

            $filename = $_FILES['gambar']['name'];
            $tmpname = $_FILES['gambar']['tmp_name'];
            $filesize = $_FILES['gambar']['size'];
            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            $rename = 'informasi_ym-' . time() . '.' . $formatfile;
            $allowedtype = array('png', 'jpg', 'jpeg', 'JPG', 'PNG');

            if (!in_array($formatfile, $allowedtype)) {
                echo '<div class="alert alert-warning alert-dismissible">Format file tidak di izinkan</div>';
            } else {




                move_uploaded_file($tmpname, "../uploads/informasi/" . $rename);

                $simpan = mysqli_query($conn, "INSERT INTO informasi VALUES (
                null,
                '" . $judul . "',
                '" . $rename . "',
                '" . $isi_info . "',
                '" . $tanggal . "'
            )");
                if ($simpan) {
                    echo " <script>window.location = './admin-informasi.php?msg= Berhasil Menambahkan Informasi'</script>";
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