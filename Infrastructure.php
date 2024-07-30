<style>
  .card {
    border: 2px ridge #151515 !important;
    margin: 10px;
    max-width: 420px !important;
}
.card img
{
  margin-top: 5px;
  height: 270px;
}
.card i
{
  color: green;
}
</style>
<body>
    <?php include('header.php') ?>
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Infrastructure</h2>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">
            <table class="styled-table table  table-bordered">
                <thead>
                <tr>
                <th>Building Type</th>
                <th>Area</th>
                <th>Numbers</th>
                <th>Description</th>
                </tr>
                </thead>
                <tbody>
                <?php include('./admin/connection.php') ?>
                    <?php 
$buildingType="";
$Area = "";
$Numbers="";
$yearlyDevCharge="";
$Description="";
$sqltxt= "SELECT buildingType,area,numbers,description FROM `infrastructure`;";
$result  = mysqli_query($conn,$sqltxt);
?>
                    <?php 
     while ($data = mysqli_fetch_assoc($result )) {
 ?>
                    <!-- Class="active-row" -->
                    <tr>
                        <td><?php echo $data['buildingType'] ?></td>
                        <td><?php echo $data['area'] ?></td>
                        <td><?php echo $data['numbers'] ?></td>
                        <td><?php echo $data['description'] ?></td>
                    </tr>
                    <?php
     }
  ?>
                </tbody>
            </table>

                <!-- <div class="row">

                    <div class="card col-md-4 mb-3"  >
                        <img src="./assets/img/events-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Computer Lab</h5>
                            <p class="card-text">This is our computer Lab.</p>
                                <p> <i class="bi bi-check-circle"></i> AREA : 1200x1500 ft.</p> 
                                <p> <i class="bi bi-check-circle"></i> 50 systems.</p>
                                <p> <i class="bi bi-check-circle"></i> 4 GB,1TB,i3 10th Gen.</p>
                        </div>
                    </div>
                    <div class="card col-md-4 mb-3"  >
                        <img src="./assets/img/events-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <p> <i class="bi bi-check-circle"></i> TEXT !</p> 
                                <p> <i class="bi bi-check-circle"></i> TEXT !</p>
                                <p> <i class="bi bi-check-circle"></i> TEXT !</p>
                        </div>
                    </div>
                    <div class="card col-md-4 mb-3"  >
                        <img src="./assets/img/events-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                                <p> <i class="bi bi-check-circle"></i> TEXT !</p> 
                                <p> <i class="bi bi-check-circle"></i> TEXT !</p>
                                <p> <i class="bi bi-check-circle"></i> TEXT !</p>
                        </div>
                    </div>
                </div> -->

            </div>
        </section><!-- End Pricing Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
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