<style>
    iframe{
        height:500px;
        width: 100%;
    }
    .breadcrumbs
    {
        margin-top:100px !important;
    }
</style>
<body>
    <!-- ======= Header ======= -->
    <?php include('header.php') ?>
    <?php include('./admin/connection.php') ?>
    <?php 
    $email="";
    $address = "";
    $city="";
    $contact="";
    $pin="";
    $state = "";
    $mapUrl="";
  $sqltxt = "SELECT address,contactNo,schoolEmail,city,state,pincode,mapUrl from schooldetails LIMIT 1";
  $result  = mysqli_query($conn,$sqltxt);
  while ($data = mysqli_fetch_assoc($result )) {

     $email=$data['schoolEmail'];
     $contact = $data['contactNo'];
     $address = $data['address'];
     $city = $data['city'];
     $state = $data['state'];
     $pin = $data['pincode'];
     $mapUrl = $data['mapUrl'];

    }
  ?>
    <!-- End Header -->
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Contact Us for more details.</p>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div data-aos="fade-up">
               <?php echo $mapUrl; ?>
            </div>
            <div class="container" data-aos="fade-up" >
                <div class="row mt-4">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p> <?php echo $address." " .$city ." ".$state." ". $pin ?><br></p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p><?php echo $email; ?></p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p><?php echo $contact; ?></p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
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

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('footer.php') ?>
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
    <!-- End Footer -->
</body>

</html>