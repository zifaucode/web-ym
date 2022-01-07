<?php
include('layout/head.php');
?>

<?php
include('layout/header.php');
?>

<main id="main">

  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Informasi</h2>

      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->






  <section id="about">
    <div class="container" data-aos="fade-up">


      <div class="row about-cols">
        <?php
        $no = 1;
        $gambar = mysqli_query($conn, "SELECT * FROM informasi");
        if (mysqli_num_rows($gambar) > 0) {
          while ($gbr = mysqli_fetch_array($gambar)) {

        ?>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="about-col">
                <div class="img">
                  <img src="uploads/informasi/<?= $gbr['gambar'] ?>" alt="" class="img-fluid">
                  <div class="icon"><i class="bi bi-book-half"></i></div>
                </div>
                <h2 class="title"><a href="./informasi-detail.php?id_info=<?= $gbr['id_info'] ?>"><?= $gbr['judul'] ?></a></h2>
                <center>
                  <i class="bi bi-calendar"></i>
                  <p><?= $gbr['tanggal'] ?></p>
                </center>
                <p>

                  <?= substr($gbr['isi_info'], 0, 104) ?><a class="cta-btn" href="./informasi-detail.php?id_info=<?= $gbr['id_info'] ?>">,selengkapnya... -></a>
                </p>

              </div>
            </div>
          <?php }
        } else { ?>

        <?php } ?>


      </div>





    </div>
  </section><!-- End About Us Section -->






</main><!-- End #main -->


<?php
include('layout/footer.php');
?>