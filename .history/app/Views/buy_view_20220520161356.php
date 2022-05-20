<?= $this->extend("base");?>


<?= $this->section("content");?>
<head>
  <style>
 #hero {

 background: url(http://localhost/mobility/public/assets/img/back.jpg) top center;
background-size: cover;
width: 100% !important;
height: 100vh;
position: relative;
/* object-fit: fill; */
background-repeat: no-repeat;
}
  </style>
</head>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1 class="mb-4 pb-0">This is Buy View</h1>
      <p class="mb-4 pb-0">10-12 December, Downtown Conference Center, New York</p>
      <a href="https://youtube.com/shorts/M9XoKPbz0-Y?feature=share" class="glightbox play-btn mb-4"></a>
      <a href="<?= base_url() ?>/About" class="about-btn scrollto">About Us</a>
    </div>
  </section><!-- End Hero Section -->



<?= $this->endSection(); ?>
