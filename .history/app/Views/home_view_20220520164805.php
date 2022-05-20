
<?= $this->extend("base");?>
<?= $this->section("content");?>
<head>
  <style>
 #hero {

 background: url(http://localhost/mobility/public/assets/img/back.jpg) top center;
background-size: cover;
width: 100% !important;
height: 100vh;
/* overflow: hidden; */
position: relative;
/* object-fit: fill; */
background-repeat: no-repeat;
}

  </style>
</head>
  <!-- ======= Home Section ======= -->
  <section id="hero">
    <div class="hero-container home" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">Welcome to<br><span>Electrogati</span></h1>
      <img src="<?= base_url() ?>/public/assets/img/svg11.png">
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
              <img src="<?= base_url() ?>/public/assets/img/buy.jpg" alt="Speaker 1" class="img-fluid">
              <div class="details">
                <h3><a href="#">Buy New Vehicle</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="200">
              <img src="<?= base_url() ?>/public/assets/img/rentcar.jpg" alt="Speaker 2" class="img-fluid">
              <div class="details">
                <h3><a href="#">Rent Car</a></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker" data-aos="fade-up" data-aos-delay="300">
              <img src="<?= base_url() ?>/public/assets/img/rentbike.jpg" alt="Speaker 3" class="img-fluid">
              <div class="details">
                <h3><a href="#">Rent Bike</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End Speakers Section -->


  </main>




<?= $this->endSection() ?>
