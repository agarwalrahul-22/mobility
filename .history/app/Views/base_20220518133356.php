<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>/public/assets/css/style.css" rel="stylesheet">
  <!-- Favicons -->
  <link href="<?= base_url() ?>/public/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>/public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>/public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <title><?= $page_title ?></title>
</head>

<body>
  <header id="header" class="d-flex align-items-center ">
    <div class="container-fluid container-xxl d-flex align-items-center">

      <div id="logo" class="me-auto">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="index.html">The<span>Event</span></a></h1>-->
        <a href="<?= base_url() ?>" class="scrollto"><img src="<?= base_url() ?>/public/assets/img/logo.png" alt="" title=""></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="<?= base_url() ?>">Home</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>/Buy">Buy</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>/Sale">Sale</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>/Rent">Renting</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>/About">About</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url() ?>/Contact">Contact</a></li>
                <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="<?= base_url() ?>/About">About Us</a></li>

            <li><a href="<?= base_url() ?>/Register">Register</a></li>
            <li><a href="<?= base_url() ?>/Register">Subscribe to News Letter</a></li>

          </ul>
        </li>
          <!-- <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a class="buy-tickets scrollto" href="<?= base_url() ?>/login">Log In</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Home Section ======= -->
  <section id="hero">
    <div class="hero-container home" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Welcome to<br><span>Electrogati</span></h1>
      <img src="C:/xampp/htdocs/mobility/public/assets/img/svg11.png">
    </div>
  </section><!-- End Home Section -->
<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="speakers">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our services</h2>
          <!-- <p>Here are some of the services we offer</p> -->
        </div>

        <div class="row service">
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/img/buy.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="#">Buy New Vehicle</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="assets/img/rentcar.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="#">Rent Car</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="assets/img/rentbike.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="#">Rent Bike</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Speakers Section -->


  </main>
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <!-- <img src="assets/img/Egati.png" alt="TheEvenet"> -->
            <h2>Electrogati</h2>
            <p>Electrogati is a company with a difference. Following are the characteristic features that make us distinct from the
            crowded space of other commercial organizations.</p>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Buy</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Renting</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              Teacher Colony<br>
              Angur Bagicha Road Gondia<br>
              Maharashtra, 441614<br>
              India <br>
              <strong>Phone:</strong> +91 7328867833<br>
              <strong>Email:</strong> Contact@Electrogati.com<br>
            </p>

            <div class="social-links">
              <a href="https://twitter.com/electrogati" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="https://www.facebook.com/Electrogati/" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/electrogati/" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="https://t.me/electrogati" class="google-plus"><i class="bi bi-telegram"></i></a>
              <a href="https://www.youtube.com/channel/UCvL1sqwFT6XYv5cYU18nq0g" class="youtube"><i class="bi bi-youtube"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Electrogati Technologies Pvt. Ltd.</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>/public/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= base_url() ?>/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url() ?>/public/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>/public/assets/js/main.js"></script>

</body>

</html>
