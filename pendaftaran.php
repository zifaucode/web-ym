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
                <h2>Pendaftaran</h2>

            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->
    <?php
    $no = 1;
    $profile = mysqli_query($conn, "SELECT * FROM info_pendaftaran");
    if (mysqli_num_rows($profile) > 0) {
        while ($ym = mysqli_fetch_array($profile)) {

    ?>

            <section class="inner-page mt-4">
                <div class="container">
                    <section id="about">
                        <div class="container" data-aos="fade-up">

                            <header class="section-header">

                                <h3><?= $ym['judul'] ?></h3>
                                <center><img src="uploads/pendaftaran/<?= $ym['gambar'] ?>" width="450px" height="350px"></center>
                                <p><?= $ym['info'] ?></p>
                            </header>



                        </div>
                    </section>

                </div>
            </section>
        <?php }
    } else { ?>

    <?php } ?>


</main><!-- End #main -->


<?php
include('layout/footer.php');
?>