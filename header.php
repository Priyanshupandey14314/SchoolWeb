<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?php include('./admin/connection.php') ?>
      <?php 
       $logopath="";
       $faviconpath="";
       $tagline="";
      $logo = "SELECT logo,favIcon,banner,tagline FROM schoolDetails LIMIT 1";
      $result  = mysqli_query($conn,$logo);
      while ($data = mysqli_fetch_assoc($result )) {
        ?>
        <?php
         $logopath="./admin/".$data['logo'];
         $faviconpath = "./admin/".$data['favIcon'];
         $tagline = $data['tagline'];
        }
      ?>
    
  <title>JP Sunrise Group</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo $faviconpath?>" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/slider.css">
  <link href="assets/css/lightbox.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- Uncomment below if you prefer to use an image logo -->
      
       <a href="index.php" class="logo me-auto"><img src="<?php echo $logopath ?>" class="img-fluid"></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="index.php">Home</a></li>
          <!-- <li><a href="">About</a></li> -->
          <li class="dropdown"><a href="#"><span style="font-family: poppins;">About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.php#Intro">Introduction</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a> -->
               
              </li>
              <li><a href="about.php#vision">Vision & Mission</a></li>
              <li><a href="principle.php">Chairman's Desk</a></li>
              <li><a href="principle.php">Principle's Desk</a></li>
              <li><a href="faculties.php">Faculties</a></li>
              
            </ul>
          </li>
          
          <li class="dropdown"><a href="feeStructure.php"><span style="font-family: poppins;">Academics</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a  href="admProcess.php">Admission Process</a></li>
              </li>
              <li><a href="feeStructure.php">Fee Structure</a></li>
              <li><a href="documents.php">Documents</a></li>
              <li><a href="tcVerification.php">TC Verification</a></li>
              
            </ul>
          </li>
          <li class="dropdown"><a href="Infrastructure.php"><span style="font-family: poppins;">Infrastructure</span> </i></a>
          </li>
          <li class="dropdown"><a href="feeStructure.php"><span style="font-family: poppins;">Media</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
            <li><a  href="gallery.php">Gallery</a></li>
            <li><a  href="events.php">Events</a></li>
              
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="loginForm.php" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->
</body>
</html>