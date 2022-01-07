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
        <h2>Kegiatan</h2>

      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->





  <section id="about">
    <div class="container" data-aos="fade-up">


      <div class="row about-cols">
        <?php
        $no = 1;
        $gambar = mysqli_query($conn, "SELECT * FROM kegiatan_santri");
        if (mysqli_num_rows($gambar) > 0) {
          while ($gbr = mysqli_fetch_array($gambar)) {

        ?>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
              <div class="about-col">
                <div class="img">
                  <img src="uploads/kegiatan/<?= $gbr['gambar'] ?>" alt="" class="img-fluid">
                  <div class="icon"><i class="bi bi-book-half"></i></div>
                </div>
                <h2 class="title"><?= $gbr['nama_kegiatan'] ?></h2>
                <br>

                <p>

                  <?= $gbr['keterangan'] ?>
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