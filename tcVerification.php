<style>
.form {
    margin-top: 140px;
    margin-left: 50px;
    padding-bottom: 40px;
}
.btn {
    margin-top: 31px !important;
}

input {
    margin-top: 6px !important;
}
</style>
<?php include('./admin/connection.php'); ?>

<body>
    <?php include('header.php') ?>
    <?php
    $name;
    $fName;
    $motherName;
    $adress;
    $contact;
    $lastClass;
    $tcNumber;
    $tcIsssueDate;
    ?>

    <main id="main">
        <form action="showTcVerify.php" method="post" class="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="schoolName" style="margin-left:8px;">TC Number</label>
                        <input type="text" class="form-control" name="tcnumber" id="school_name"
                            aria-describedby="emailHelp" placeholder="Enter Tc Number" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="schoolName"></label>
                        <input type="submit" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalLabel"
                            name="verifyTc" value="Verify">
                    </div>
                </div>
            </div>
        </form>
       

        <!-- Modal Delete-->

    </main>
    <?php include('footer.php') ?>
    <script src="./js/sidebar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>