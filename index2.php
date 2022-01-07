<!DOCTYPE html>
<html lang="en">
<?php
include './koneksi.php';
?>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Yayasan Mushlihun (YM)</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="depan/assets/img/favicon.png" rel="icon">
  <link href="depan/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="depan/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="depan/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="depan/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="depan/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="depan/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="depan/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="depan/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizPage - v5.7.0
  * Template URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
<-- ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">

          <img src="depan/assets/img/logo-web.png" class="logo" alt="" height="70px" width="190px">

          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo"><img src="depan/assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav id="navbar" class="navbar">
            <ul>
              <!-- <li><a class="nav-link scrollto active" href="index.php">Home</a></li> -->

              <!--<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Drop Down 1</a></li>
                  <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                      <li><a href="#">Deep Drop Down 1</a></li>
                      <li><a href="#">Deep Drop Down 2</a></li>
                      <li><a href="#">Deep Drop Down 3</a></li>
                      <li><a href="#">Deep Drop Down 4</a></li>
                      <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Drop Down 2</a></li>
                  <li><a href="#">Drop Down 3</a></li>
                  <li><a href="#">Drop Down 4</a></li>
                </ul>
              </li>-->

              <li class="dropdown"><a href="#"><span>Profile Yayasan</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Visi - Misi</a></li>
                  <li><a href="#">Kegiatan</a></li>
                  <li><a href="#">Program Kerja</a></li>
                </ul>
              </li>
              <li><a class="nav-link scrollto" href="#">Pendidikan</a></li>

              <li><a class="nav-link scrollto" href="kegiatan.php">Kegiatan Santri</a></li>

              <li class="dropdown"><a href="#"><span>Pendaftaran</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Informasi Penerimaan Santri</a></li>
                </ul>
              </li>

              <li><a class="nav-link scrollto" href="ortu/login.php">Data Santri</a></li>



              <li><a class="nav-link scrollto" href="kontak.php">Kontak Kami</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

  <?php
  $no = 1;
  $profile = mysqli_query($conn, "SELECT * FROM profile_ym");
  if (mysqli_num_rows($profile) > 0) {
    while ($ym = mysqli_fetch_array($profile)) {

  ?>

      <!-- ======= hero Section ======= -->
      <section id="hero">
        <div class="hero-container">
          <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">


              <div class="carousel-item active" style="background-image: url(uploads/slide/<?= $ym['gambar_slide1'] ?>)">
                <div class="carousel-container">
                  <div class="container">
                    <h2 class="animate__animated animate__fadeInDown">Yayasan Mushlihun (YM)</h2>
                    <p class="animate__animated animate__fadeInUp"><?= $ym['slide1'] ?></p>

                  </div>
                </div>
              </div>

              <div class="carousel-item" style="background-image: url(uploads/slide/<?= $ym['gambar_slide2'] ?>)">
                <div class="carousel-container">
                  <div class="container">
                    <h2 class="animate__animated animate__fadeInDown"></h2>
                    <p class="animate__animated animate__fadeInUp"><?= $ym['slide2'] ?></p>

                  </div>
                </div>
              </div>

              <div class="carousel-item" style="background-image: url(uploads/slide/<?= $ym['gambar_slide3'] ?>)">
                <div class="carousel-container">
                  <div class="container">
                    <h2 class="animate__animated animate__fadeInDown"></h2>
                    <p class="animate__animated animate__fadeInUp"><?= $ym['slide3'] ?></p>

                  </div>
                </div>
              </div>





            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

          </div>
        </div>
      </section><!-- End Hero Section -->

      <main id="main">

        <!-- ======= Featured Services Section Section ======= -->
        <section id="featured-services">
          <div class="container">
            <div class="row">

              <div class="col-lg-4 box">
                <i class="bi bi-bank2"></i>
                <h4 class="title"><a href="#">Rumah Yatim dan Dhuafa</a></h4>
                <p class="description"></p>
              </div>

              <div class="col-lg-4 box box-bg">
                <i class="bi bi-book-half"></i>
                <h4 class="title"><a href="#">Pendidikan</a></h4>
                <p class="description"></p>
              </div>

              <div class="col-lg-4 box">
                <i class="bi bi-people-fill"></i>
                <h4 class="title"><a href="#">Sosial</a></h4>
                <p class="description"></p>
              </div>

            </div>
          </div>
        </section>
        <!-- End Featured Services Section -->
        <section id="call-to-action">
          <div class="container text-center" data-aos="zoom-in">
            <h3>Muqaddimah</h3>
            <br>

            <br>
            <p><?= $ym['muqaddimah'] ?></p>

          </div>
        </section>
        <section id="about">
          <div class="container" data-aos="fade-up">

            <header class="section-header">
              <h3>Visi</h3>
              <p><?= $ym['visi'] ?></p>
            </header>

            <header class="section-header">
              <h3>Misi</h3>
              <p><?= $ym['misi'] ?></p>
              <!-- <p>2. Menumbuh kembangkan potensi umat melalui pendidikan.</p>
              <p>3. Mengelola amanah dengan jujur, kreatif dan transparan.</p>
              <p>4. Berkumpulnya orang-orang soleh dan solehah untuk mengembangkan yayasan sesuai dengan profesinya.</p>
              <p>5. Mewujudkan yayasan berpola pikir maju, berwawasan, peduli terhadap lingkungan dengan meningkatkan 6K yaitu : (Keimanan, Ketertiban, Kebersihan, Keindahan, Keramahan dan Kekeluargaan ).</p> -->
            </header>

            <div class="row about-cols">

              <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="about-col">
                  <div class="img">
                    <img src="depan/assets/img/about-mission.jpg" alt="" class="img-fluid">
                    <div class="icon"><i class="bi bi-bar-chart"></i></div>
                  </div>
                  <h2 class="title"><a href="#">Our Mission</a></h2>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </div>
              </div>

              <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="about-col">
                  <div class="img">
                    <img src="depan/assets/img/about-plan.jpg" alt="" class="img-fluid">
                    <div class="icon"><i class="bi bi-brightness-high"></i></div>
                  </div>
                  <h2 class="title"><a href="#">Our Plan</a></h2>
                  <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                  </p>
                </div>
              </div>

              <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="about-col">
                  <div class="img">
                    <img src="depan/assets/img/about-vision.jpg" alt="" class="img-fluid">
                    <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                  </div>
                  <h2 class="title"><a href="#">Our Vision</a></h2>
                  <p>
                    Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores eos qui ratione voluptatem sequi nesciunt Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.
                  </p>
                  <a class="cta-btn" href="#">Call To Action</a>
                </div>
              </div>

            </div>

          </div>
        </section><!-- End About Us Section -->



        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
          <div class="container text-center" data-aos="zoom-in">
            <h3>Ketua Yayasan</h3>
            <img src="uploads/galery/pimpinan.jpeg" class="img-fluid" alt="" width="150px">
            <br>
            <h3>Drs. H. Sarbodin Sohir</h3>
            <br>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          </div>
        </section><!-- End Call To Action Section -->



        <!-- ======= Facts Section ======= -->

        <section id="facts">
          <div class="container" data-aos="fade-up">

            <header class="section-header">
              <h3>Facts</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </header>

            <div class="row counters">

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Clients</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="1364" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-purecounter-start="0" data-purecounter-end="38" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>

            </div>



          </div>
        </section>
        <!-- End Facts Section -->

        <!-- ======= Portfolio Section ======= -->

        <section id="portfolio" class="section-bg">
          <div class="container" data-aos="fade-up">

            <header class="section-header">
              <h3 class="section-title">Galeri</h3>
            </header>


          </div>

          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php
            $no = 1;
            $gambar = mysqli_query($conn, "SELECT * FROM galery");
            if (mysqli_num_rows($gambar) > 0) {
              while ($gbr = mysqli_fetch_array($gambar)) {

            ?>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                  <div class="portfolio-wrap">
                    <figure>
                      <img src="uploads/galery/<?= $gbr['gambar'] ?>" class="img-fluid" alt="">
                      <a href="uploads/galery/<?= $gbr['gambar'] ?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"><i class="bi bi-plus"></i></a>
                    </figure>

                    <div class="portfolio-info">
                      <h4><a href="depan/assets/img/portfolio/renov.jpeg" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"><?= $gbr['nama'] ?></a></h4>

                    </div>
                  </div>
                </div>
              <?php }
            } else { ?>

            <?php } ?>








          </div>

          </div>
        </section>

        <!-- End Portfolio Section -->

        <!-- ======= Our Clients Section ======= -->
        <section id="clients">
          <div class="container" data-aos="zoom-in">

            <header class="section-header">
              <h3>Donatur</h3>
            </header>

            <div class="clients-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="depan/assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="depan/assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="depan/assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="depan/assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="depan/assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="depan/assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="depan/assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="depan/assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </section>End Our Clients Section -->


        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="section-bg">
          <div class="container" data-aos="fade-up">

            <header class="section-header">
              <h3>Para Alumni</h3>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="depan/assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                      <img src="depan/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                      <img src="depan/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="depan/assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                      <img src="depan/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                      <img src="depan/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="depan/assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                      <img src="depan/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                      <img src="depan/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="depan/assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                      <img src="depan/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                      <img src="depan/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <img src="depan/assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                      <img src="depan/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                      <img src="depan/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                  </div>
                </div </div>
                <div class="swiper-pagination"></div>
              </div>

            </div>
        </section> -->
        <!-- End Testimonials Section -->

        <!-- ======= Team Section ======= -->
        <section id="team">
          <div class="container" data-aos="fade-up">
            <div class="section-header">
              <h3>Team</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row">

              <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                  <img src="depan/assets/img/team-1.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Walter White</h4>
                      <span>Chief Executive Officer</span>
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                  <img src="depan/assets/img/team-2.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Sarah Jhonson</h4>
                      <span>Product Manager</span>
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="300">
                  <img src="depan/assets/img/team-3.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>William Anderson</h4>
                      <span>CTO</span>
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="member" data-aos="fade-up" data-aos-delay="400">
                  <img src="depan/assets/img/team-4.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                      <div class="social">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section>-->
        <!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="section-bg">
          <div class="container" data-aos="fade-up">

            <div class="section-header">
              <h3>Contact Us</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row contact-info">

              <div class="col-md-4">
                <div class="contact-address">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Alamat</h3>
                  <address>A108 Adam Street, NY 535022, USA</address>
                </div>
              </div>

              <div class="col-md-4">
                <div class="contact-phone">
                  <i class="bi bi-phone"></i>
                  <h3>Nomor Telepon</h3>
                  <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
                </div>
              </div>

              <div class="col-md-4">
                <div class="contact-email">
                  <i class="bi bi-envelope"></i>
                  <h3>Email</h3>
                  <p><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
              </div>

            </div>

            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group col-md-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>
        </section>-->
        <!-- End Contact Section -->

      </main><!-- End #main -->

      <!-- ======= Footer ======= -->
      <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-6 footer-info">
                <img src="depan/assets/img/logo-web.png" class="logo" alt="" height="70px" width="190px">
                <p>Memfasilitasi anak Yatim, Piatu, Dhuafa dan Lansia dalam mencari, memilih dan menentukan arah hidup yang bermanfaat bagi diri sendiri, keluarga dan masyarakat.</p>
              </div>

              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Link Terkait</h4>
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Profile yayasan</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Kegiatan santri</a></li>
                  <li><i class="bi bi-chevron-right"></i> <a href="#">Pendaftaran</a></li>
                </ul>
              </div>

              <div class="col-lg-6 col-md-6 footer-contact">
                <h4>KONTAK</h4>
                <p>
                  Jl.Masjid Al-Irfan
                  Rt. 001 RW.001
                  PEMAGARSARI KEC.PARUNG
                  KAB.BOGOR PROV JAWABARAT <br>
                  <strong>Hanif Ramadhan ( Humas ):</strong> +62 822-9823-8278 <br>
                  <strong>Bambang ( Pembina ):</strong> +62 821-8697-4884 <br>

                </p>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>

              </div>

              <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>BERLANGGANAN</h4>
                <p>Nantikan Info Update Terkait perkembangan yayasan melalui Blog yayasan atau pun yang lainya dengan cara input email</p>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit" value="KIRIM">
                </form>
              </div>

            </div>
          </div>
        </div>

        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong>Yayasan Mushlihun (YM)</strong>
          </div>

        </div>
      </footer><!-- End Footer -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <!-- Uncomment below i you want to use a preloader -->
      <!-- <div id="preloader"></div> -->

      <!-- Vendor JS Files -->
      <script src="depan/assets/vendor/aos/aos.js"></script>
      <script src="depan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="depan/assets/vendor/glightbox/js/glightbox.min.js"></script>
      <script src="depan/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
      <script src="depan/assets/vendor/php-email-form/validate.js"></script>
      <script src="depan/assets/vendor/purecounter/purecounter.js"></script>
      <script src="depan/assets/vendor/swiper/swiper-bundle.min.js"></script>
      <script src="depan/assets/vendor/waypoints/noframework.waypoints.js"></script>

      <!-- Template Main JS File -->
      <script src="depan/assets/js/main.js"></script>

</body>


<?php }
  } else { ?>

<?php } ?>

</html>