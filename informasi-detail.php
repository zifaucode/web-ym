<?php
include('layout/head.php');
?>

<?php
include('layout/header.php');
?>

<?php
$santri = mysqli_query($conn, "SELECT * FROM informasi WHERE id_info = '" . $_GET['id_info'] . "' ");
if (mysqli_num_rows($santri) == 0) {
    echo "<script>window.location='./admin-akun.php'</script>";
}
$s = mysqli_fetch_object($santri);

?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Detail informasi</h2>

            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page mt-4">
        <div class="container">
            <!-- ======= Blog Single Section ======= -->
            <section id="blog" class="blog">
                <div class="container" data-aos="fade-up">

                    <div class="row">

                        <div class="col-lg-12 entries">

                            <article class="entry entry-single">

                                <div class="entry-img">
                                    <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                                </div>

                                <h2 class="entry-title">
                                    <?= $s->judul ?>
                                </h2>

                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> ADMIN</li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="2020-01-01"><?= $s->tanggal ?></time></li>

                                    </ul>
                                </div>

                                <div class="entry-content">

                                    <center><img src="uploads/informasi/<?= $s->gambar ?>" class="img-fluid" alt=""></center>
                                    <p><?= $s->isi_info ?></p>

                                </div>

                                <div class="entry-footer">

                                    <i class="bi bi-tags"></i>

                                </div>

                            </article><!-- End blog entry -->

                            <div class="blog-author d-flex align-items-center">
                                <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
                                <div>
                                    <h4>Catatan :</h4><br>
                                    <div class="social-links">
                                        <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                        <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                        <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                    </div>
                                    <p>
                                        Informasi ini di buat dari berbagai sumber ataupun opini penulis, saran edit dan lainya bisa hub kontak kami
                                    </p>
                                </div>
                            </div><!-- End blog author bio -->



                        </div><!-- End blog entries list -->


                    </div>

                </div>
            </section><!-- End Blog Single Section -->
        </div>
    </section>

</main><!-- End #main -->


<?php
include('layout/footer.php');
?>