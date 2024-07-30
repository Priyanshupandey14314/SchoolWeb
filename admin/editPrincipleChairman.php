<style>

</style>
<?php include('sidebar.php') ?>
<?php include('./connection.php') ?>
<?php  
$serial=1;
    $principleName="";
    $chairmanName = "";
    $principleEducate="";
    $chairmanEducate="";
    $principleMsg="";
    $chairmanMsg = "";
    $principlePhoto="";
    $chairmanPhoto="";
  $sqltxt = "SELECT principleName,chairmanName,principleQualification,chairmanQualification,principleMessege,chairmanMessege,principleImage,chairmanImage FROM `pricipleandchairman` LIMIT 1";
  $result  = mysqli_query($conn,$sqltxt);
  while ($data = mysqli_fetch_assoc($result )) {
    ?>
    <?php
     $principleName=$data['principleName'];
     $chairmanName = $data['chairmanName'];
     $principleEducate = $data['principleQualification'];
     $chairmanEducate = $data['chairmanQualification'];
     $principleMsg = $data['principleMessege'];
     $chairmanMsg = $data['chairmanMessege'];
     $principlePhoto = $data['principleImage'];
     $chairmanPhoto = $data['chairmanImage'];

    }
  ?>

<body>

    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-5">
                <h5>Principle & Chairman</h5>
                <p>Edit Principle's Desk and Chairman's Desk from Here.</p>
            </div>
        </div>
        <div class="details">
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">
                <div class="card mb-3 col-md-10">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $principlePhoto ?>" class="img-fluid rounded-start" alt="..."
                                id="output"/>
                            <input type="file" accept="image/png, image/gif,image/jpeg" name="principlephoto"
                                style="margin-left:20px;margin-top:10px;" onchange="loadFile(event)" required/>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Principle Section</h5>

                                <label for="principleName">Principle's Name</label>
                                <input type="text" id="disabledTextInput" class="form-control mt-2"
                                    placeholder="Enter Title" value="<?php echo $principleName ?>" name="principleName" required>
                                <br>
                                <label for="principleName">Principle's Education</label>
                                <input type="text" id="disabledTextInput" class="form-control mt-2"
                                    placeholder="Enter Title" value="<?php echo $principleEducate ?>" name="principleEducate" required>
                                <br>
                                <label for="principleName">Principle's Messege</label>
                                <textarea type="text" class="form-control mt-1" id="editor" rows="2" cols="30"
                                    name="principleMsg" aria-describedby="emailHelp" id="editor" required><?php echo $principleMsg ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3 col-md-10">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?php echo $chairmanPhoto ?>" class="img-fluid rounded-start" alt="..."
                                id="chairman" />
                            <input type="file" accept="image/png, image/gif, image/jpeg" name="chairmanphoto"
                                style="margin-left:20px;margin-top:10px;" onchange="loadFiles(event)" required/>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Chairman's Section</h5>

                                <label for="principleName">Chairman's Name</label>
                                <input type="text" id="disabledTextInput" class="form-control mt-2"
                                    placeholder="Enter Title" value="<?php echo  $chairmanName ?>" name="chairmanName" required>
                                <br>
                                <label for="principleName">Chairman's Education</label>
                                <input type="text" id="disabledTextInput" class="form-control mt-2"
                                    placeholder="Enter Title" value="<?php echo  $chairmanEducate ?>" name="chairmanEducate" required>
                                <br>
                                <label for="principleName">Chairman's Messege</label>
                                <textarea type="text" class="form-control mt-1" id="editor" rows="2" cols="30"
                                    name="chairmanMsg" aria-describedby="emailHelp" id="editor" required><?php echo  $chairmanMsg ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Save !" name="savePriChairman" class="btn btn-success">



            </form>
        </div>
        
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
        var image = document.getElementById('chairman');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
</body>