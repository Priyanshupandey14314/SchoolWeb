<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Geologica:wght@300&display=swap');
    </style>


    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Tempalate main CSS  -->
    <link rel="stylesheet" href="./css/adminSidebar.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <?php include('connection.php') ?>
    <?php 
       $bannerPath="";
      $logo = "SELECT logo,banner,tagline,schoolName FROM schoolDetails LIMIT 1";
      $result  = mysqli_query($conn,$logo);
      while ($data = mysqli_fetch_assoc($result )) {
        ?>
    <?php
         $logopath= $data['logo'];
         $tagline= $data['tagline'];
         $bannerPath = $data['banner'];
         $schName = $data['schoolName'];
        }
      ?>
    <div class="sidebar close">
        <div class="logo-details">
            <a href="../index.php"> <img src="<?php echo $logopath; ?>" class="sidelogo"></a>

            <span class="logo_name"><a href="../index.php" style="text-decoration: none; margin-left: 17px;">
                    <?php echo $schName; ?></a></span>
        </div>
        <ul class="nav-links">
            <li class="active">
                <a href="./dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="./dashboard.php">Dashboard</a></li>

                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-cog'></i>
                        <span class="link_name">School</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">School</a></li>
                    <li><a href="schoolDetails.php">School Details</a></li>
                    <li><a href="editPrincipleChairman.php">Principle & Chairman</a></li>
                    <li><a href="editFaculties.php">Faculties</a></li>
                    <li><a href="editInfrastructure.php">Infrastructure</a></li>
                    <li><a href="editSocialLinks.php">Social Links</a></li>
                    <li><a href="editHmPageSlider.php">Home Page Slider</a></li>

                    <!-- <li><a href="#">Favicon Logo</a></li>
          <li><a href="logoUpdate.php">Oroginal </a></li> -->
                    <!-- <li><a href="#">PHP & MySQL</a></li> -->
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bxs-book'></i>
                        <span class="link_name">Academics</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Academics</a></li>
                    <li><a href="editDocuments.php">Academic Documents</a></li>
                    <li><a href="editAdmProcess.php">Admission Process</a></li>
                    <li><a href="editFeeStructure.php">Fee Structure</a></li>
                    <li><a href="addTcDetails.php">TC Details</a></li>
                </ul>
            </li>
            <li>
                <a href="editNews.php">
                    <i class='bx bx-news'></i>
                    <span class="link_name">News Edit </span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">News</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class='bx bx-images'></i>
                        <span class="link_name">Media</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Media</a></li>
                    <li><a href="editGallery.php">Gallery</a></li>
                    <li><a href="editEvents.php">Events</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="editAbout.php">
                        <i class='bx bx-user-pin'></i>
                        <span class="link_name">About Us</span>
                    </a>
                    <!-- <i class='bx bxs-chevron-down arrow' ></i> -->
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="editAbout.php">About Us</a></li>
                    <!-- <li><a href="#">Introduction</a></li>
          <li><a href="#">Vision & Mission</a></li>
          <li><a href="#">Principle & Chairman</a></li> -->
                </ul>
            </li>
            <li>
                <a href="editPrincipleChairman.php">
                    <i class='bx bxs-user-account'></i>
                    <span class="link_name">Principle & Chairman</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="editPrincipleChairman.php">Principle & Chairman</a></li>
                </ul>
            </li>

            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="<?php echo $logopath; ?>" alt="profileImg">
                    </div>
                    <div class="name-job">
                        <div class="profile_name">JP Sunrise</div>
                        <div class="job">CBSE School</div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>
            </li>
        </ul>
  </div>
</body>

</html>