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




<section class="content-header">
  <h1>
    Dashboard
    <small><?= $_SESSION['uname'] ?></small>
  </h1>

</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>
            <?php
            $query = "SELECT count(nama) AS total FROM santri";
            $result = mysqli_query($conn, $query);
            $values = mysqli_fetch_assoc($result);
            $num_rows = $values['total'];
            echo $num_rows;

            ?>
          </h3>

          <p>Santri</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <!-- ./col -->

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php
              $query = "SELECT count(nama_ortu) AS total FROM user_akun";
              $result = mysqli_query($conn, $query);
              $values = mysqli_fetch_assoc($result);
              $num_rows = $values['total'];
              echo $num_rows;

              ?></h3>

          <p>Akun Terdaftar</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="../admin-akun.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>

    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php
              $query = "SELECT count(id_hafalan) AS total FROM nilai_hafalan";
              $result = mysqli_query($conn, $query);
              $values = mysqli_fetch_assoc($result);
              $num_rows = $values['total'];
              echo $num_rows;

              ?></h3>

          <p>Nilai Hafalan</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>



    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?php
              $query = "SELECT count(id) AS total FROM nilai_raport";
              $result = mysqli_query($conn, $query);
              $values = mysqli_fetch_assoc($result);
              $num_rows = $values['total'];
              echo $num_rows;

              ?></h3>

          <p>Nilai Rapor</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>
  <!-- /.row -->
  <!-- Main row -->

  <?php
  include('../layoutadm/footer.php');
  ?>