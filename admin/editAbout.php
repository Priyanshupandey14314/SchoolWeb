<script src="../ckeditor/ckeditor.js"></script>
<style>

.details hr {
    margin-top: -5px;
    width: 550px;
}
</style>
<?php include('sidebar.php') ?>
<?php include('./connection.php') ?>
<?php 
$introduction="";
$vision = "";
$achivement="";
$Introthumbnail="";
$VisionThumbnail="";
$AchiveThumbnail="";

$sqltxt= "SELECT Introduction,Vision,Achivements,IntroThumbnail,VisionThumbnail,AchivementThumbnail FROM aboutus LIMIT 1;";
$result  = mysqli_query($conn,$sqltxt);
while ($data = mysqli_fetch_assoc($result )) {
 ?>
<?php
 $introduction=$data['Introduction'];
 $vision=$data['Vision'];
 $achivement= $data['Achivements'];
  $Introthumbnail= $data['IntroThumbnail'];
  $VisionThumbnail = $data['VisionThumbnail'];
  $AchiveThumbnail = $data['AchivementThumbnail'];
 }
?>

<body>

    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-5">
                <h5>About Section</h5>
                <p>Edit about section of website.</p>
            </div>
        </div>
        <div class="details">
            <h6>Introduction Section</h6>
            <hr>
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">
                <div class="row">

                    <div class="col-md-5">
                        <div class="card mb-1 mt-5">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="<?php echo $Introthumbnail ?>" height="100px" width="100px"
                                        class="img-fluid rounded-start" alt="..." id="output" name="imgIntro">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Introduction Thumbnail</h5>
                                        <br>
                                        <label for="imgLogo">choose</label>
                                        <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg"
                                            id="imgLogo" name="introThumbnail" value="" onchange="loadFile(event)"
                                            required />
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-7 mb-3">
                        <div class="form-group ">
                            <label for="city">Introduction Content</label>
                            <textarea type="text" class="form-control" id="editor" rows="2" cols="30" name="editorIntro"
                                aria-describedby="emailHelp" id="editor" required>
       <!-- #region -->         <?php echo $introduction ?>
                            </textarea>
                        </div>
                        <script>
                        CKEDITOR.replace('editor');
                        editor.resize('100%', '350', true);
                        </script>
                    </div>
                </div>
                <h6>Vision and Mission Section</h6>
                <hr>
                <div class="row">

                    <div class="col-md-5">
                        <div class="card mb-1 mt-5">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="<?php echo $VisionThumbnail ?>" height="100px" width="100px"
                                        class="img-fluid rounded-start" alt="..." id="outputs">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h5 class="card-title">Vision & Mission Thumbnail</h5>
                                        <br>
                                        <label for="imgLogo">choose</label>
                                        <input type="file" accept="image/png, image/gif, image/jpeg" id="imgFavicon"
                                            name="visionThumbnail" onchange="loadFiles(event)" required />
                                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p> -->
                                        <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 mb-3">
                        <div class="form-group">
                            <label for="landMark">Vision & Mission Content</label>
                            <textarea type="text" class="form-control" id="visionEditor" name="visionEditor" rows="4"
                                cols="50" placeholder="Enter Your Vision and Mission."
                                required> <?php echo $vision ?> </textarea>
                        </div>
                        <script>
                        CKEDITOR.replace('visionEditor')
                        </script>

                    </div>
                </div>
                <h6>Achivement Section</h6>
                <hr>
                <div class="row">

                    <div class="col-md-5">
                        <div class="card mb-1 mt-5">
                            <div class="row g-0">
                                <div class="col-md-5">
                                    <img src="<?php echo $AchiveThumbnail ?>" height="100px" width="100px"
                                        class="img-fluid rounded-start" alt="..." id="banner">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body">
                                        <h6 class="card-title">Achivement Thumbnail</h6>
                                        <br>
                                        <label for="imgLogo">choose</label>
                                        <input type="file" accept="image/png, image/gif, image/jpeg" id="imgBanner"
                                            name="achivementThumbnail" onchange="loadBanner(event)" required />
                                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p> -->
                                        <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 mb-3">
                        <div class="form-group">
                            <label for="landMark">Achivement Content</label>
                            <textarea type="text" class="form-control" id="achivementEditor" name="achivementEditor"
                                aria-describedby="emailHelp" placeholder="Enter your Achivements."
                                required> <?php echo $achivement ?></textarea>
                        </div>
                        <script>
                        CKEDITOR.replace('achivementEditor')
                        </script>
                    </div>
                </div>
                <input type="submit" name="saveAbout" value="Save" class="btn btn-primary mt-3 mb-3">
            </form>
            <!-- COUNTERS -->
            <?php 
$noStudents="";
$noCourses = "";
$noOfEvents="";
$noOfFaculties="";
$sqltxt= "SELECT noOfStudents,noOfCourses,noOfEvents,noOfFaculties FROM counters LIMIT 1;";
$result  = mysqli_query($conn,$sqltxt);
while ($data = mysqli_fetch_assoc($result )) {
 ?>
            <?php
 $noStudents=$data['noOfStudents'];
 $noCourses=$data['noOfCourses'];
 $noOfEvents= $data['noOfEvents'];
  $noOfFaculties= $data['noOfFaculties'];
 }
?>
            <h6>Counters Section</h6>
            <hr>
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">

                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="students">Number of Students</label>
                            <input type="text" class="form-control" name="noStudents" id="school_name"
                                aria-describedby="emailHelp" value="<?php echo $noStudents ?>" placeholder="Entrer No. of Students" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="students">Number of Courses</label>
                            <input type="text" class="form-control" name="noCourses" id="school_name"
                                aria-describedby="emailHelp" value="<?php echo $noCourses ?>" placeholder="Entrer No. of Students">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="students">Number of Events</label>
                            <input type="text" class="form-control" name="noEvents" id="school_name"
                                aria-describedby="emailHelp" value="<?php echo $noOfEvents ?>" placeholder="Entrer No. of Students" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="students">Number of Teachers</label>
                            <input type="text" class="form-control" name="noTeachers" id="school_name"
                                aria-describedby="emailHelp" value="<?php echo $noOfFaculties ?>" placeholder="Entrer No. of Students" required>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Save Counter" name="saveCounter" class="btn btn-success mt-3 mb-3">
            </form>
    </section>
    <?php include('./connection.php') ?>
    
</body>
<script src="./js/sidebar.js"></script>
<script>
var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script>
var loadFiles = function(event) {
    var image = document.getElementById('outputs');
    image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script>
var loadBanner = function(event) {
    var image = document.getElementById('banner');
    image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script src="../ckeditor/ckeditor.js"></script>

</html>