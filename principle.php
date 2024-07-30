<body>
<?php include('header.php') ?>
<main id="main">
<?php include('./admin/connection.php') ?>
<?php 
    $principleName="";
    $chairmanName = "";
    $principleEducate="";
    $chairmanEducate="";
    $principleMsg="";
    $chairmanMsg = "";
    $principlePhoto="";
    $chairmanPhoto="";
  $sqltxt = "SELECT principleName,chairmanName,principleQualification,chairmanQualification,principleMessege,chairmanMessege,principleImage,chairmanImage FROM `pricipleandchairman` LIMIT 1";
  $result  = mysqli_query($conn,$sqltxt);
  while ($data = mysqli_fetch_assoc($result )) {
    ?>
    <?php
     $chairmanPhoto = $data['chairmanImage'];
     $principleName=$data['principleName'];
     $chairmanName = $data['chairmanName'];
     $principleEducate = $data['principleQualification'];
     $chairmanEducate = $data['chairmanQualification'];
     $principleMsg = $data['principleMessege'];
     $chairmanMsg = $data['chairmanMessege'];
     $principlePhoto = $data['principleImage'];

    }
  ?>
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Principle's and Chairman's Desk</h2>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Events Section ======= -->
<section id="events" class="events">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="card">
          <div class="card-img">
            <img src="<?php echo "./admin/".$principlePhoto ?>" alt="principlephoto">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $principleName ?></h5>
            <h6 class="fst-italic text-center">The Principle</h6>
            <p class="fst-italic text-center"><?php echo $principleEducate ?></p>
            <p class="card-text"><?php echo $principleMsg ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="card">
          <div class="card-img">
            <img src="<?php echo "./admin/".$chairmanPhoto ?>" alt="principlephoto">
          </div>
          <div class="card-body">
            <h5 class="card-title"><?php echo $chairmanName ?></h5>
            <h6 class="fst-italic text-center">The Principle</h6>
            <p class="fst-italic text-center"><?php echo $chairmanEducate ?></p>
            <p class="card-text"><?php echo $chairmanMsg ?></p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Events Section -->

</main><!-- End #main -->

<?php include('footer.php') ?>
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