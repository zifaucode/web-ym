<?php
session_start();
include '../koneksi.php';
?>

<?php
include('../layoutadm/head.php');
?>

<?php
$santri = mysqli_query($conn, "SELECT * FROM profile_ym WHERE id_ym = '" . $_GET['id_ym'] . "' ");
if (mysqli_num_rows($santri) == 0) {
    echo "<script>window.location='./admin-profile-yayasan.php'</script>";
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
        <h3 class="box-title">Edit Profile Ym</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form role="form" action="" method="POST">
            <!-- text input -->

            <!-- ==============================CK EDITOR ================================= -->
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">visi

                    </h3>
                    <!-- tools box -->

                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <textarea id="editor1" name="visi" rows="10" cols="80">
                    <?= $s->visi ?>
                    </textarea>



                </div>
            </div>
            <!--================================== CK EDITOR========================== -->


            <!-- ==============================CK EDITOR ================================= -->
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Misi

                    </h3>
                    <!-- tools box -->

                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <textarea id="editor2" name="misi" rows="10" cols="80">
                    <?= $s->misi ?>
                    </textarea>



                </div>
            </div>
            <!--================================== CK EDITOR========================== -->

            <!-- ==============================CK EDITOR ================================= -->
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Muqaddimah

                    </h3>
                    <!-- tools box -->

                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <textarea id="editor3" name="muqaddimah" rows="10" cols="80">
                    <?= $s->muqaddimah ?>
                    </textarea>



                </div>
            </div>
            <!--================================== CK EDITOR========================== -->



            <!-- ==============================CK EDITOR ================================= -->
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Kegiatan
                    </h3>
                    <!-- tools box -->

                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <textarea id="editor4" name="kegiatan" rows="10" cols="80">
                    <?= $s->kegiatan ?>
                    </textarea>



                </div>
            </div>
            <!--================================== CK EDITOR========================== -->




            <!-- ==============================CK EDITOR ================================= -->
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">Program Kerja

                    </h3>
                    <!-- tools box -->

                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">

                    <textarea id="editor4" name="program_kerja" rows="10" cols="80">
                    <?= $s->program_kerja ?>
                    </textarea>



                </div>
            </div>
            <!--================================== CK EDITOR========================== -->





            <button type=" submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">Simpan</button>

        </form>
        <?php
        if (isset($_POST['submit'])) {


            $visi = addslashes($_POST['visi']);
            $misi =  addslashes($_POST['misi']);
            $muqaddimah =  addslashes($_POST['muqaddimah']);
            $kegiatan =  addslashes($_POST['kegiatan']);
            $program_kerja =  addslashes($_POST['program_kerja']);



            $update = mysqli_query($conn, "UPDATE profile_ym SET
            
                visi = '" . $visi . "',
                misi = '" . $misi . "',
                muqaddimah = '" . $muqaddimah . "',
                kegiatan = '" . $kegiatan . "',
                program_kerja = '" . $program_kerja . "'
                WHERE id_ym = '" . $_GET['id_ym'] . "'
            ");

            if ($update) {
                echo " <script>window.location = './admin-profile-yayasan.php?msg= Berhasil Edit Data'</script>";
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