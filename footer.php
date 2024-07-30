<!DOCTYPE html>
<html lang="en">
<?php include('./admin/connection.php') ?>
      <?php 
       $logopath="";
       $bannerPath="";
       $faviconpath="";
      $logo = "SELECT logo,favIcon,banner FROM schoolDetails LIMIT 1";
      $result  = mysqli_query($conn,$logo);
      while ($data = mysqli_fetch_assoc($result )) {
        ?>
        <?php
         $logopath="./admin/".$data['logo'];
         $faviconpath = "./admin/".$data['favIcon'];
        }
      ?>
<?php include('./admin/connection.php') ?>
    <?php 
    $emai="";
    $address = "";
    $city="";
    $contact="";
    $pin="";
    $state = "";
    $mapUrl="";
  $sqltxt = "SELECT address,contactNo,schoolEmail,city,schoolName,state,pincode,mapUrl from schooldetails LIMIT 1";
  $result  = mysqli_query($conn,$sqltxt);
  while ($data = mysqli_fetch_assoc($result )) {
    ?>
    <?php
     $email=$data['schoolEmail'];
     $contact = $data['contactNo'];
     $address = $data['address'];
     $schoolName= $data['schoolName'];
     $city = $data['city'];
     $state = $data['state'];
     $pin = $data['pincode'];

    }
  ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JP Sunrise Group</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
     <!-- =======FOOTER SECTION ======= -->
  <footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <a href=""><img src="<?php echo $logopath ?>" alt="" height="100px" width="100px"></a>
        <p>
          <b>JP Sunrise Group</b><br>
          <?php echo $address." " .$city ." ".$state." ". $pin ?><br><br>
          <strong>Phone:</strong><?php echo $contact; ?><br>
          <strong>Email : </strong><?php echo $email; ?><br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="principle.php">Principle & Chairman  </a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Infrastructure.php">Infrastructure</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="gallery.php">Gallery</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="events.php">Events</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="feeStructure.php">Fee Structures</a></li>
          
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          
          <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact Us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms & Conditions</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="privacyPolicy.php">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form> 
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span><?php echo $schoolName; ?></span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
      Designed by : <a href="http://keycodetech.com" target="_blank"><img src="./assets/img/k_white_nobg.png" height="90px" alt=""></a>
    </div>
  </div>
  <?php 
$instaLink="";
$fbLink="";
$twitLink="";
$linkedLink="";
$sqltxt= "SELECT * FROM sociallinks LIMIT 1;";
$result  = mysqli_query($conn,$sqltxt);
while ($data = mysqli_fetch_assoc($result )) {
 ?>
    <?php
 $instaLink = $data['instaLink'];
 $fbLink = $data['fbLink'];
 $twitLink = $data['twitterLink'];
 $linkedLink =$data['linkedLink'];

 }
?>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
    <a href="<?php echo $twitLink ?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="<?php echo $fbLink ?>" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="<?php echo $instaLink ?>" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="<?php echo $linkedLink ?>" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->
<script lang="javascript" src="./assets/js/lightbox-plus-jquery.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jQuery/3.1.0/jQuery.min.js"></script>
<script src="assets/js/lightbox-plus-jquery.js"></script>

</body>
</html>