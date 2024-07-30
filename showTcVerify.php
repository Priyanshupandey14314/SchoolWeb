<style>
.form {
    margin-top: 120px;
    margin-left: 20px;
}
.alert
{

 margin-left: 20px;
   margin-right: 240px;
   width: 95%;
   margin-top: 140px;
}
.btn {
    margin-top: 31px !important;
}
#footer .footer-top
{
    margin-top:110px !important;
}
input {
    margin-top: 6px !important;
}
</style>
<body>
<?php include('header.php') ?>
</body>
<main id="main">
<?php include('./admin/connection.php') ?>
<?php
        if (isset($_POST['verifyTc'])) {
            $input = $_REQUEST['tcnumber'];
            $sqlQuery = "SELECT * FROM tcdetails WHERE tcNumber = '$input'";
            $result = mysqli_query($conn, $sqlQuery);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount > 0) {
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Record Found !!
            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
        </div>
        <table class="styled-table table table-stripped table-bordered mt-4" style="margin-left:13px;">
        <thead>
        <tr>
                <th>Student Name</th>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Adress</th>
                <th>Contact No.</th>
                <th>Last Class</th>
                <th>Tc Number</th>
                <th>Issue Date</th>
            </tr> 
        </thead>
            
            <tr>
                <td><?php echo $data['studentName'] ?></td>
                <td><?php echo $data['fatherName'] ?></td>
                <td><?php echo $data['MotherName'] ?></td>
                <td><?php echo $data['adress'] ?></td>
                <td><?php echo $data['contactNo'] ?></td>
                <td><?php echo $data['lastClass'] ?></td>
                <td><?php echo $data['tcNumber'] ?></td>
                <td><?php echo $data['tcIssueDate'] ?></td>
            </tr>
        </table>

        <?php
                }
            } else {
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  No Record Found !!
            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
        </div>
        <?php
            }
        }
        ?>
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