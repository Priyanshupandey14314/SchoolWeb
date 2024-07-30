<script src="../ckeditor/ckeditor.js"></script>
<style>

.bx {
    font-size: 1.3rem;
    color: #ED2B33FF;
}

.modal-dialog {
    width: 800px !important;
    max-width: 1000px !important;
}
</style>
<?php include('sidebar.php') ?>

<body>
    <?php include('./connection.php') ?>
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
    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-5">
                <h5>Social Links</h5>
                <p>Edit Social Links from Here.</p>
            </div>
        </div>
        <div class="details">
        <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">
        <div class="row">
                    <div class="form-group col-md-6">
                        <label for="news"><i class='bx bxl-instagram'></i> Instagram Link</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Enter Insta Link"
                            name="instalink" value="<?php echo $instaLink ?>" required>
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="news"><i class='bx bxl-facebook'></i> Facebook Link</label>
                        <input type="link" id="disabledTextInput" class="form-control" placeholder="Enter Facebook Link"
                            name="fblink" value="<?php echo $fbLink ?>" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="news"><i class='bx bxl-twitter'></i> Twitter Link</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Enter Twitter Link"
                            name="twtlink" value="<?php echo $twitLink ?>">
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="news"><i class='bx bxl-linkedIn'></i> LinkedIn Link</label>
                        <input type="link" id="disabledTextInput" class="form-control" placeholder="Enter LinkedIn link"
                            name="linkedLink" value="<?php echo $linkedLink ?>">
                    </div>
                </div>
                <input type="submit" name="saveSocialLinks" value="Save" class="btn btn-success mt-4">
        </form>
        </div>
    </section>
</body>
</html>