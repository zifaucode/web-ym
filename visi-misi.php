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
        <h2>Visi - Misi</h2>

      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->
  <?php
  $no = 1;
  $profile = mysqli_query($conn, "SELECT * FROM profile_ym");
  if (mysqli_num_rows($profile) > 0) {
    while ($ym = mysqli_fetch_array($profile)) {

  ?>

      <section class="inner-page mt-4">
        <div class="container">
          <section id="about">
            <div class="container" data-aos="fade-up">

              <header class="section-header">
                <h3>Visi</h3>
                <p><?= $ym['visi'] ?></p>
              </header>

              <header class="section-header">
                <h3>Misi</h3>
                <p><?= $ym['misi'] ?></p>

              </header>



            </div>
          </section><!-- End About Us Section -->

        </div>
      </section>
    <?php }
  } else { ?>

  <?php } ?>


</main><!-- End #main -->


<?php
include('layout/footer.php');
?>