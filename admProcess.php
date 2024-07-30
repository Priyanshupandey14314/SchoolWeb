<style>
.card {
    margin-left: auto;
    margin-right: auto;
    height:fit-content !important;
    width: 60%;
    border-radius: 14px !important;
    background: rgba(3, 190, 105,0.70) !important;
  box-shadow: 0 0 8px 0 rgba(0, 0, 50, 0.50);
    text-align: center;
    align-self: center;
}
.process
{
    margin-top: 110px;
    text-align: center;
    display: block;
    align-items: center;
    justify-content: center;
}
.process i
{
    font-size: 28px;
    font-weight: 800;
}
</style>

<body>
    <?php include('header.php') ?>
    <main id="main">
        <div class="process">
        <?php 
                 $i=1;
                      $sql = "SELECT processDetails FROM `processes` ";
                      $result  = mysqli_query($conn,$sql);
                      $rowCount=mysqli_num_rows( $result );
                     
                      ?>
                            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                            <?php
                // LOOP TILL END OF DATA
                while ($data = mysqli_fetch_assoc($result ))
                {
            ?>
               <div class="card">
                <div class="card-body" style="font-weight:bold;font-size:21px;font-family:poppins;">
                     <?php echo $data['processDetails']; ?>
                </div>
            </div>
            <?php 
            if($i==$rowCount)
            {
              
            }
            else
            {
                $i++;
                ?>
                <i class="bi bi-arrow-down"></i>
                <?php
            }
            }
            ?>
            

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>