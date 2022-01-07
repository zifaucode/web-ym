<?php
session_start();
include '../koneksi.php';
?>

<?php
include('../layoutortu/head.php');
?>

<?php
include('../layoutortu/header.php');
?>

<?php

$id = $_SESSION['uid_santri'];
$santri = mysqli_query($conn, "SELECT * FROM santri WHERE id_santri = '" . $id . "' ");
if (mysqli_num_rows($santri) == 0) {
    echo "hallo";
}
$p = mysqli_fetch_object($santri);



?>




<section class="content-header">
    <h1>Selamat Datang
        <small></small>
    </h1>

</section>
<br>

<br>
<div class="row">

    <div class="callout callout-info">
        <h4></h4>

        <p>Untuk Melihat Nilai Hafalan dan Nilai Raport Klik di Bawah Ini: </p>
    </div>
    <br>


    <div class="col-md-12">
        <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Siswa</h3>

                <div class="box-tools pull-right">

                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <p>NAMA &nbsp;: <td><?= $p->nama ?></td>
                </p>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

    <br>
    <!-- /.col -->
    <a href="././ortu-nilai-hafalan.php?id_santri=<?= $_SESSION['uid_santri'] ?>">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
                <span class="info-box-icon bg-yellow"><i class="fa fa-file-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">KLIK UNTUK MELIHAT</span>
                    <span class="info-box-number">Nilai Hafalan</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </a>
    <a href="././ortu-nilai-raport.php?id_santri=<?= $_SESSION['uid_santri'] ?>">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
                <span class="info-box-icon bg-red"><i class="fa fa-file-pdf-o"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">KLIK UNTUK MELIHAT</span>
                    <span class="info-box-number">Nilai Raport</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </a>
</div>

<?php
include('../layoutortu/footer.php');
?>