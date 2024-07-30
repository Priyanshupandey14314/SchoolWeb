<?php include('header.php') ?>
<body>
<?php include('./admin/connection.php') ?>

  <main id="main">
    <!-- #region -->
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Our Events</h2>
            </div>
        </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
      <div class="row">
      <?php 
$eventTitle="";
$eventSubtitle = "";
$eventDescripiton="";
$eventImage="";
$sqltxt= "SELECT eventsTitle,eventsSubtitle,eventsDescription,eventImg FROM `events` ;";
$result  = mysqli_query($conn,$sqltxt);
?>
<?php 
while ($data = mysqli_fetch_assoc($result )) {
 ?>
          <div class="col-md-4 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="<?php echo "./admin/". $data['eventImg']; ?>" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href=""><?php echo $data['eventsTitle']; ?></a></h5>
                <p class="fst-italic text-center"><?php echo $data['eventsSubtitle'];?></p>
                <p class="card-text"><?php echo $data['eventsDescription'];?></p> 
              </div>
            </div>
          </div>
 <?php
 }
?>
      </div>
      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include('footer.php') ?>
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