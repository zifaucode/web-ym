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
        <h3 class="box-title">Tambah Nilai Hafalan</h3>
    </div>
    <!-- /.box-header -->



    <div class="box-body">
        <form role="form" action="" method="POST">
            <!-- text input -->
            <div class="form-group">
                <label>Nama</label>

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
                <label>Surat Hafalan</label>
                <input type="text" class="form-control" name="surat_hafalan" placeholder="Surat Hafalan" required>
            </div>




            <div class="form-group">
                <label>Keterangan</label>
                <select class="form-control" name="keterangan" required>
                    <option value="">-- Pilih Keterangan --</option>
                    <option value="LULUS">LULUS</option>
                    <option value="TIDAK LULUS">TIDAK LULUS</option>

                </select>
            </div>

            <div class="form-group">
                <label>Tanggal:</label>

                <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker" name="tanggal" autocomplete="off">
                </div>
                <!-- /.input group -->
            </div>

            <button type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>


        </form>

        <?php
        if (isset($_POST['submit'])) {

            $id_santri = addslashes($_POST['id_santri']);
            $surat_hafalan = $_POST['surat_hafalan'];
            $keterangan = $_POST['keterangan'];
            $tanggal = $_POST['tanggal'];

            // $cek = mysqli_query($conn, "SELECT username FROM namadatabase WHERE namakolom = '".$user."' ");
            // if(mysqli_num_rows($cek) > 0) {
            //     echo '<div class="alert alert-warning alert-dismissible"> Username Sudah digunakan</div>';
            // }else{

            // }

            $simpan = mysqli_query($conn, "INSERT INTO nilai_hafalan VALUES (
                null,
                '" . $id_santri . "',
                '" . $surat_hafalan . "',
                '" . $keterangan . "',
                '" . $tanggal . "'
            )");
            if ($simpan) {
                echo " <script>window.location = './admin-nilai-hafalan.php?msg= Berhasil Menambahkan Nilai Hapalan'</script>";
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