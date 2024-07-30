<style>

</style>
<?php include('./admin/pdoConnection.php') ?>
<?php include('header.php') ?>
<?php include('./admin/connection.php') ?>

<main id="main">

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero-section">
        <div class="slider">
        <div id="carouselExampleCaptions" class="carousel slide"  data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php
        // Retrieve data from the database and count the number of slides
        $result = $conn->query("SELECT * FROM hmpageslider");
        $totalSlides = $result->num_rows;

        // Loop through each slide to generate the carousel indicators
        for ($i = 0; $i < $totalSlides; $i++) {
            $activeClass = ($i === 0) ? 'active' : '';
            echo '<button type="button" data-bs-target="#carouselExampleCaptions" style="background:#151515" data-bs-slide-to="' . $i . '" class="' . $activeClass . '" aria-current="true" aria-label="Slide ' . ($i + 1) . '"></button>';
        }
        ?>
    </div>
    <div class="carousel-inner">
        <?php
        // Fetch slide data using fetch_assoc() function and generate the carousel items
        $index = 0;
        while ($slide = $result->fetch_assoc()) {
            $activeClass = ($index === 0) ? 'active' : '';
            echo '<div class="carousel-item ' . $activeClass . '">';
            echo '<img src="./admin/' . $slide['sImagePath'] . '" class="d-block w-100" alt="...">';
            echo '<div class="carousel-caption d-none d-md-block">';
            echo '<h5>' . $slide['sImageTitle'] . '</h5>';
            echo '<p>' . $slide['sImageSubTitle'] . '</p>';
            echo '</div>';
            echo '</div>';
            $index++;
        }

        // Free the result set
        $result->free();
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
        </div>
    </section>

    <?php
    $introduction = "";
    $Introthumbnail = "";
    $sqltxt = "SELECT Introduction,IntroThumbnail FROM aboutus LIMIT 1;";
    $result  = mysqli_query($conn, $sqltxt);
    while ($data = mysqli_fetch_assoc($result)) {
    ?>
    <?php
        $introduction = $data['Introduction'];
        $Introthumbnail = "./admin/" . $data['IntroThumbnail'];
    }
    ?>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="10">
                    <img src="<?php echo $Introthumbnail; ?>" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 order-2 order-lg-1 mt-3 content">
                    <h3>A short description about Our School.</h3>
                    <p class="fst-bold">
                        <?php echo $introduction; ?>
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->


    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Why Us ?</h3>
                        <p>
                            A question can be raised in anyone's mind that why choose our School ?
                            Don't Worry ! We are showing some key features here for your better understanding
                        </p>
                        <div class="text-center">
                            <a href="about.php" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-user"></i>
                                    <h4>Educated Faculties</h4>
                                    <p>We have a group of Highly educated and expirienced faculties with a lot of skills
                                        to tecah your kids along with love.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bxs-tree"></i>
                                    <h4>Learning Environment</h4>
                                    <p>We firstly focuses on Learning environment, because a peacefull place is a
                                        important thing for learning a skill.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-test-tube"></i>
                                    <h4>Our Laboratories</h4>
                                    <p>Theory is not sufficient to keep a thing in mind for a long time, So this is too
                                        necessary to implement things in laboratory
                                        . We provides laboratory to our students with all features.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->


    <!-- ======= Features Section ======= -->
    <div class="section-title">
        <h2>Features</h2>
        <p>Our Features...</p>
    </div>
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-lg-3 col-md-4">
                    <div class="icon-box">
                        <i class="ri-user-3-fill" style="color: #ffbb2c;"></i>
                        <h3>Our Faculties</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="ri-test-tube-fill" style="color: #5578ff;"></i>
                        <h3>Laboratory</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                    <div class="icon-box">
                        <i class="ri-plant-fill" style="color: #e80368;"></i>
                        <h3>Environment</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                    <div class="icon-box">
                        <i class="ri-book-2-fill" style="color: #e361ff;"></i>
                        <h3>Library</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="ri-computer-fill" style="color: #47aeff;"></i>
                        <h3>Computer Lab</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="ri-bus-2-fill" style="color: #ffa76e;"></i>
                        <h3>Buses</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="ri-secure-payment-fill" style="color: #11dbcf;"></i>
                        <h3>Security</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mt-4">
                    <div class="icon-box">
                        <i class="ri-football-fill" style="color: #b2904f;"></i>
                        <h3>Sports</h3>
                    </div>

                </div>
            </div>
    </section><!-- End Features Section -->

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
                    <p>Trainers</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->
    <div class="section-title">
        <h2>News</h2>
        <p>Latest News..</p>
    </div>
    <!-- Latest News Part -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="mrq col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="10" style="background: url(./assets/img/newsbg.png);">

                    <marquee scrollamount="4" direction="up" loop="true" onmouseover="this.stop();" onmouseout="this.start();">

                        <?php
                        $sql = "SELECT newsTitle,newsLink FROM `newsdetails` ";
                        $result  = mysqli_query($conn, $sql);

                        ?>
                        <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                        <?php
                        // LOOP TILL END OF DATA
                        while ($news = mysqli_fetch_assoc($result)) {
                        ?>

                            <a href="<?php echo $news['newsLink']; ?>" style="color:green;font-size:18px;">
                                <img src="./assets/img/newGif.gif" alt="" style="height:30px;width:20px;" />
                                <?php echo $news['newsTitle']; ?></a><br>
                        <?php
                        }
                        ?>
                        </table>



                    </marquee>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Latest News from our school--</h3>
                    <h5>
                        <?php
                        $sql = "SELECT newsTitle,newsLink FROM `newsdetails` ";
                        $result  = mysqli_query($conn, $sql);

                        ?>
                        <?php
                        // LOOP TILL END OF DATA
                        while ($news = mysqli_fetch_assoc($result)) {
                        ?>

                            <a href="<?php echo $news['newsLink']; ?>" style="color:green;font-size:20px;">
                                <img src="./assets/img/newGif.gif" alt="" style="height:30px;width:20px;" />
                                <?php echo $news['newsTitle']; ?></a></br>
                        <?php
                        }
                        ?>
                    </h5>
                </div>
            </div>

        </div>
    </section>


    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="section-title">
            <h2>Events</h2>
            <p>Upcoming Events</p>
        </div>
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <?php
                $eventTitle = "";
                $eventSubtitle = "";
                $eventDescripiton = "";
                $eventImage = "";
                $sqltxt = "SELECT eventsTitle,eventsSubtitle,eventsDescription,eventImg FROM `events` LIMIT 3 ;";
                $result  = mysqli_query($conn, $sqltxt);
                ?>
                <?php
                while ($data = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-lg-4 d-flex align-items-stretch mt-3 ml-lg-0">
                        <div class="course-item">
                            <img src="<?php echo "./admin/" . $data['eventImg'] ?>" class="img-fluid" alt="...">
                            <div class="course-content">
                                <h3><a href="course-details.html"><?php echo $data['eventsTitle'] ?></a></h3>
                                <h5 class="text-link"><?php echo $data['eventsSubtitle'] ?></h5>
                                <p><?php echo $data['eventsDescription'] ?></p>
                            </div>
                        </div>
                    </div> <!-- End Course Item-->
                <?php
                }
                ?>

            </div>

        </div>
    </section><!-- End Popular Courses Section -->

</main><!-- End #main -->

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
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>