<link rel="stylesheet" href="./admin/css/loginForm.css">
<?php include('header.php') ?>
<body>
    <main id="main" >

        <!-- ======= Breadcrumbs ======= -->
        <div class="maindiv">
            <div class="wrapper">
                <div class="card">
                    <form method="post" action="./login.php" class="d-flex flex-column">
                        <div class="h3 text-center text-white">Admin Login</div>
                        <div class="d-flex align-items-center input-field my-3 mb-4">
                            <span class="far fa-user p-2"></span>
                            <input type="text" placeholder="Username or Email" required class="form-control"
                                name="loginId">
                        </div>
                        <div class="d-flex align-items-center input-field mb-4">
                            <span class="fas fa-lock p-2"></span>
                            <input type="password" placeholder="Password" required class="form-control" id="pwd"
                                name="password">
                            <button class="btn" onclick="showPassword()">
                                <span class="fas fa-eye-slash"></span>
                            </button>
                        </div>
                        <div class="d-sm-flex align-items-sm-center justify-content-sm-between">
                            <div class="d-flex align-items-center">
                                <label class="option">
                                    <span class="text-light-white">Remember Me</span>
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mt-sm-0 mt-3"><a href="#">Forgot password?</a></div>
                        </div>
                        <div class="my-3">
                        <!--  <input type="submit" value="Login" class="btn btn-primary mt-2" style="float:right;" onClick="document.location.href='admin/sidebar.html'">-->
                            <input type="submit" value="Login" class="btn btn-primary mt-2" style="float:right;" >
                        </div>
                        <!-- <div class="mb-3">
                    <span class="text-light-white">Don't have an account?</span>
                    <a href="#">Sign Up</a>
                </div> -->
                    </form>
                </div>
            </div>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include('footer.php') ?>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script>
    function showPassword() {
        var password = document.getElementById('pwd');
        if (password.type === 'password') {
            password.type = "text";
        } else {
            password.type = "password";
        }
    }
    </script>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>