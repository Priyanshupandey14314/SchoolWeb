<?php include('header.php')?>
<main id="main">

<div class="section-title mt-2">
      <h2>Faculties</h2>
      <p>Our top Faculties</p>
    </div> 

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php 
                      $sql = "SELECT facultyName,facultyPost,facultyMessege,instaLink,fbLink,twitterLink,linkedInLink,facultyPhoto FROM `faculties` ";
                      $result  = mysqli_query($conn,$sql);
                     
                      ?>
                        <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                        <?php
                // LOOP TILL END OF DATA
                while ($data = mysqli_fetch_assoc($result ))
                {
            ?>
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo "./admin/".$data['facultyPhoto'] ?>" class="img-fluid" alt="teachersImg">
              <div class="member-content">
                <h4><?php echo $data['facultyName'] ?></h4>
                <span><?php echo $data['facultyPost'] ?></span>
                <p>
                <?php echo $data['facultyMessege'] ?>
                </p>
                <div class="social">
                  <a href="<?php echo $data['instaLink'] ?>" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo $data['fbLink'] ?>" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo $data['twitterLink'] ?>" target="_blank"><i class="bi bi-instagram"></i></a>
                  <a href="<?php echo $data['linkedInLink'] ?>" target="_blank"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
                        <?php
                }
            ?>
          
                           

        </div>

      </div>
    </section>
    <!-- End Trainers Section -->

</main>
<?php include('footer.php') ?>
<!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

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