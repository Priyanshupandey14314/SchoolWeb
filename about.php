<style>
  .posters
  {
    height: 340px !important;
    width: 100%;
    background-repeat: no-repeat;
    background-size: contain;
    image-rendering: crisp-edges !important;
    border:2px ridge greenyellow;
    border-top-left-radius: 11px;
    border-bottom-right-radius: 11px;
  }
</style>
<body>

  <!-- ======= Header ======= -->
  <?php include('header.php') ?>
  <!-- End Header -->
  <?php include('./admin/connection.php') ?>
  


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>About Us</h2>
            </div>
        </div>
    </div><!-- End Breadcrumbs -->
    <!-- Slider -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="10">
          <div class="swiper-wrapper">
            <?php
            $sqltxt = "SELECT image, imgID FROM gallery ORDER BY imgID DESC LIMIT 10;";
            $result  = mysqli_query($conn, $sqltxt);
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="<?php echo "./admin/" . $data['image'] ?>" class="testimonial-img" alt="">
                  </div>
                </div>
              </div>
            <?php
            }
            ?>
            <!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    <!-- ======= About Section ======= -->
    <?php
  $introduction = "";
  $vision = "";
  $achivement = "";
  $Introthumbnail = "";
  $VisionThumbnail = "";
  $AchiveThumbnail = "";
  $sqltxt = "SELECT Introduction,Vision,Achivements,IntroThumbnail,VisionThumbnail,AchivementThumbnail FROM aboutus";
  $result=mysqli_query($conn,$sqltxt);
  while ($data = mysqli_fetch_assoc($result)) {
  ?>
  <?php
    $introduction = $data['Introduction'];
    $vision = $data['Vision'];
    $achivement = $data['Achivements'];
    $Introthumbnail = "./admin/" . $data['IntroThumbnail'];
    $VisionThumbnail = "./admin/" . $data['VisionThumbnail'];
    $AchiveThumbnail = "./admin/" . $data['AchivementThumbnail'];
  } 
  ?>
    <section id="Intro" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="10">
            <img src="<?php echo $Introthumbnail; ?>" class="posters img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Introduction</h3>
            <p>
              <?php
              echo $introduction; ?>
            </p>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <section id="vision" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-1" data-aos="fade-left" data-aos-delay="10">
            <img src="<?php echo $VisionThumbnail; ?>" class="posters img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-2 content">
            <h3>Our Aim ! </h3>
            <p>
              <?php echo $vision; ?>
            </p>

          </div>
        </div>

      </div>
    </section>
    <section id="vision" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="10">
            <img src="<?php echo $AchiveThumbnail;  ?>" class="posters img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3> Our Avhivements</h3>
            <p>
              <?php echo $achivement; ?>
            </p>

          </div>
        </div>

      </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <?php
    $numberStudents = "";
    $numberCourses = "";
    $numberEvents = "";
    $numberTeachers = "";
    $counter = "SELECT noOfStudents,noOfCourses,noOfEvents,noOfFaculties FROM counters LIMIT 1";
    $result  = mysqli_query($conn, $counter);
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    <?php
      $numberStudents = $data['noOfStudents'];
      $numberCourses = $data['noOfCourses'];
      $numberEvents = $data['noOfEvents'];
      $numberTeachers = $data['noOfFaculties'];
    }
    ?>
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $numberStudents; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $numberCourses; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $numberEvents; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $numberTeachers; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p>Faculties</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php ') ?>
  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>