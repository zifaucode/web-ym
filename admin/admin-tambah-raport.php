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
        <h3 class="box-title">Tambah Raport</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST" enctype="multipart/form-data">
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
                <label>FILE SCAN PDF / WORD</label>
                <input type="file" class="form-control" name="raport" required>
            </div>

            <div class="form-group">
                <label>KELAS</label>
                <select class="form-control" name="kelas" required>
                    <option value="">-- Pilih Kelas --</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>


                </select>
            </div>

            <div class="form-group">
                <label>Semester</label>
                <select class="form-control" name="semester" required>
                    <option value="">-- Pilih Semester --</option>
                    <option value="SEMESTER 1">SEMESTER 1</option>
                    <option value="SEMESTER 2">SEMESTER 2</option>

                </select>
            </div>


            <button type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>


        </form>
        <?php
        if (isset($_POST['submit'])) {

            // print_r($_FILES['gambar']);
            $id_santri = addslashes($_POST['id_santri']);
            $kelas = addslashes($_POST['kelas']);
            $semester = addslashes($_POST['semester']);

            $filename = $_FILES['raport']['name'];
            $tmpname = $_FILES['raport']['tmp_name'];
            $filesize = $_FILES['raport']['size'];

            $formatfile = pathinfo($filename, PATHINFO_EXTENSION);
            $rename = 'raport_ym-' . time() . '.' . $formatfile;
            $allowedtype = array('png', 'jpg', 'jpeg', 'JPG', 'PNG', 'pdf', 'doc', 'docx');

            if (!in_array($formatfile, $allowedtype)) {
                echo '<div class="alert alert-warning alert-dismissible">Format file tidak di izinkan</div>';
            } else {


                move_uploaded_file($tmpname, "../uploads/raport/" . $rename);

                $simpan = mysqli_query($conn, "INSERT INTO nilai_raport VALUES (
                null,
                '" . $id_santri . "',
                '" . $kelas . "',
                '" . $semester . "',
                '" . $rename . "'
            )");
                if ($simpan) {
                    echo " <script>window.location = './admin-nilai-raport.php?msg= Berhasil Menambahkan Raport'</script>";
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