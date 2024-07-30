<!-- <link rel="stylesheet" href="/admin/css/adminSidebar.css"> -->
<script src="../ckeditor/ckeditor.js"></script>


<body>
    <?php include('connection.php') ?>
    <?php 
$schoolName="";
$adress="";
$logopath="";
$favIcon="";
$tagline="";
$contactNo="";
$affiliationNo="";
$schoolEmail="";
$city="";
$pincode="";
$district="";
$state="";
$landmark="";
$banner="";
$mapUrl="";
$sqltxt= "SELECT * FROM schooldetails LIMIT 1;";
$result  = mysqli_query($conn,$sqltxt);
while ($data = mysqli_fetch_assoc($result )) {
 ?>
    <?php
 $schoolName = $data['schoolName'];
 $adress = $data['address'];
 $logopath = $data['logo'];
 $favIcon =$data['favIcon'];
 $tagline = $data['tagline'];
 $contactNo = $data['contactNo'];
 $affiliationNo = $data['affiliationNo'];
 $schoolEmail = $data['schoolEmail'];
 $city = $data['city'];
 $pincode = $data['pincode'];
 $district = $data['district'];
 $state = $data['state'];
 $landmark = $data['landmark'];
 $banner =  $data['banner'];
 $mapUrl = $data['mapUrl'];
 }
?>
    <?php include('sidebar.php') ?>
    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-5">
                <h4>School Information</h4>
                <p>Manage school Information.</p>
            </div>
        </div>

        <div class="details">
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">


                        <div class="form-group">
                            <label for="schoolName">School Name</label>
                            <input type="text" class="form-control" name="school_name" id="school_name"
                                aria-describedby="emailHelp" value="<?php echo $schoolName ?>"
                                placeholder="Enter School Name" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Adress</label>
                            <input type="email" class="form-control" id="email" name="email"
                                aria-describedby="emailHelp" value="<?php echo $schoolEmail ?>"
                                placeholder="Enter Email " required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
        else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adress</label>
                            <input type="text" class="form-control" id="adress" name="address"
                                aria-describedby="emailHelp" value="<?php echo $adress ?>" placeholder="Enter Adress"
                                required>
                        </div>
                    </div>
                </div>
                <br>
                <h6>Adress</h6>
                <hr>
                <div class="row">

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp"
                                placeholder="Enter City" value="<?php echo $city ?>" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="district">District</label>
                            <input type="text" class="form-control" id="district" name="district"
                                aria-describedby="emailHelp" value="<?php echo $district ?>"
                                placeholder="Enter District" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" class="form-control" id="state" name="state" aria-describedby="emailHelp"
                                value="<?php echo $state ?>" placeholder="Enter your State" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="pincode">Pin Code</label>
                            <input type="text" class="form-control" id="pincode" name="pincode"
                                aria-describedby="emailHelp" value="<?php echo $pincode ?>"
                                placeholder="Enter Pin code">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="affiliationNo">Affiliation Number</label>
                            <input type="text" class="form-control" id="affiliationNo" name="affiliationNo"
                                aria-describedby="emailHelp" value="<?php echo $affiliationNo ?>"
                                placeholder="Enter Affiliation No." required>
                        </div>
                    </div>
                    <!-- <div class="col-md-2">
                    <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Landmark">
                    </div>
                </div> -->
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                    <div class="form-group ">
                            <label for="city">Google Map Url</label>
                            <!-- <textarea type="text" class="form-control mt-2" id="editor" rows="2" cols="30" name="gMap"
                            </textarea> -->
                            <input type="text" style="height: 100px;" class="form-control" id="landMark" name="gMap"
                                aria-describedby="emailHelp" value="<?php echo $mapUrl ?>
                                
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="landMark">Land Mark</label>
                            <input type="text" class="form-control" id="landMark" name="landMark"
                                aria-describedby="emailHelp" value="<?php echo $landmark ?>"
                                placeholder="Landmark if any ? ">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number</label>
                            <input type="text" class="form-control" id="contact" name="contact"
                                aria-describedby="emailHelp" value="<?php echo $contactNo ?>"
                                placeholder="Enter Contact Number" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tagline">Site Tagline</label>
                            <input type="text" class="form-control" id="site_tagline" name="site_tagline"
                                aria-describedby="emailHelp" value="<?php echo $tagline ?>"
                                placeholder="Enter Site Tagline if want?">
                        </div>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-md-5 py-3">
                        <div class="card mb-1">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="<?php echo $logopath ?>" height="140px" width="140px"
                                        class="img-fluid rounded-start" alt="..." id="output">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title">Site Logo</h6>
                                        <br>
                                        <label for="imgLogo">choose</label>
                                        <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg"
                                            id="imgLogo" name="schoollogo" value="" onchange="loadFile(event)" required/>
                                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p> -->
                                        <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 py-3">
                        <div class="card mb-1">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo $favIcon ?>" height="140px" width="140px"
                                        class="img-fluid rounded-start" alt="..." id="outputs">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title">FavIcon Logo</h6>
                                        <br>
                                        <label for="imgLogo">choose</label>
                                        <input type="file" accept="image/png, image/gif, image/jpeg" id="imgFavicon"
                                            name="imgFavicon" onchange="loadFiles(event)" required />
                                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p> -->
                                        <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="card mb-1">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo $banner ?>" height="200px" width="200px"
                                        class="img-fluid rounded-start" alt="..." id="banner">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title">Banner</h6>
                                        <br>
                                        <label for="imgLogo">choose</label>
                                        <input type="file" accept="image/png, image/gif, image/jpeg" id="imgBanner"
                                            name="imgBanner" onchange="loadBanner(event)" required />
                                        <!-- <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p> -->
                                        <!-- <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                            ago</small></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5"><input type="submit" name="saveSchoolDetails" value="Save" 
                    class="btn btn-success mt-5 m-lg-5" style="width:150px;"></div>
                </div>
                

            </form>


    </section>
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



</body>

</html>