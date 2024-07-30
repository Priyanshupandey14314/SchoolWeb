<style>
    /* font */
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
.table {
    margin-top: 10px;
    color: white !important;
    font-family: 'Roboto', sans-serif;
}
.table tr td
{
    font-size: 14;
}
.table tr th
{
    font-weight: 400 !important;
    font-size: 17;
}

</style>

<body>
    <?php include('header.php') ?>
    <main id="main">
    <div class="breadcrumbs" data-aos="fade-in">
            <div class="container">
                <h2>Fee Structure</h2>
            </div>
        </div>
        <div class="container">
            <table class="styled-table table table-bordered">
                <thead>
                    <tr>
                        <th>Class</th>
                        <th>Admission Fee (RS)</th>
                        <th>Tution Fees (RS)</th>
                        <th> Yearly Development Charges(RS)</th>
                        <th> Other Charges</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include('./admin/connection.php') ?>
                    <?php 
$class="";
$admFees = "";
$tutionFees="";
$yearlyDevCharge="";
$otherCharges="";
$sqltxt= "SELECT class,admFee,tutionFee,yearlyDevCharge,otherCharge FROM `feestructure`;";
$result  = mysqli_query($conn,$sqltxt);
?>
                    <?php 
     while ($data = mysqli_fetch_assoc($result )) {
 ?>
                    <!-- Class="active-row" -->
                    <tr>
                        <td><?php echo $data['class'] ?></td>
                        <td><?php echo $data['admFee'] ?></td>
                        <td><?php echo $data['tutionFee'] ?></td>
                        <td><?php echo $data['yearlyDevCharge'] ?></td>
                        <td><?php echo $data['otherCharge'] ?></td>
                    </tr>
                    <?php
     }
  ?>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </main>
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
</body>

</html>