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

    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-5">
                <h5>Faculties</h5>
                <p>Edit Faculties from Here.</p>
            </div>
        </div>
        <div class="details">
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="news">Faculty Name</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Enter Title"
                            name="facultyName" required>
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="news">Faculty Post</label>
                        <input type="link" id="disabledTextInput" class="form-control" placeholder="Enter Faculty Post"
                            name="facultyPost" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="news"><i class='bx bxl-instagram'></i> Instagram Link</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Enter Insta Link"
                            name="instalink" required>
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="news"><i class='bx bxl-facebook'></i> Facebook Link</label>
                        <input type="link" id="disabledTextInput" class="form-control" placeholder="Enter Facebook Link"
                            name="fblink" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="news"><i class='bx bxl-twitter'></i> Twitter Link</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Enter Twitter Link"
                            name="twtlink">
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="news"><i class='bx bxl-linkedIn'></i> LinkedIn Link</label>
                        <input type="link" id="disabledTextInput" class="form-control" placeholder="Enter LinkedIn link"
                            name="linkedLink">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 mt-4">

                        <div class="card mb-1 ">
                            <div class="row g-0">
                                <div class="col-md-7">
                                    <img src="" height="100px" width="100px" class="img-fluid rounded-start" alt="..."
                                        id="output" name="imgIntro">
                                </div>
                                <div class="col-md-4">
                                    <div class="card-body">
                                        <h6 class="card-title">Faculty Image</h6>
                                        <br>
                                        <label for="imgLogo">choose</label>
                                        <input type="file" accept="image/png, image/gif, image/jpeg, image/jpg"
                                            id="imgLogo" name="facultyImage" value="" onchange="loadFile(event)"
                                            required />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                            <label for="landMark">Facultie's Messege</label>
                            <textarea type="text" class="edt form-control" id="achivementEditor" name="facultyMessege"
                                aria-describedby="emailHelp" placeholder="Enter your Achivements." required></textarea>
                        </div>
                        <script>
                        CKEDITOR.replace('achivementEditor', {
                            height: '35px'
                        });
                        </script>
                    </div>
                </div>
                <input type="submit" name="saveFaculty" value="save" class="btn btn-success">
            </form>
            <table class="table table-stripped table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Edit/Delete</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Post</th>
                        <th>Messege</th>
                        <th>Insta Link</th>
                        <th>Fb Link</th>
                        <th>Twitter Link</th>
                        <th>LinkedIn Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include('./connection.php') ?>
                    <?php
                    $sqltxt = "SELECT facultyID,facultyName,facultyPost,facultyMessege,instaLink,fbLink,twitterLink,linkedInLink,facultyPhoto FROM `faculties`;";
                    $result  = mysqli_query($conn, $sqltxt);
                    ?>
                    <?php
                    $Serail = "1";
                    while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#ModalLabel<?php echo $data["facultyID"]; ?>">Edit</button> &nbsp;
                            <button type="button" class="btn btn-danger  mr-2" data-bs-toggle="modal"
                                data-bs-target="#DeleteModalCenter<?php echo $data["facultyID"]; ?>">Delete</button>
                        </td>
                        <td><img src="<?php echo $data['facultyPhoto'] ?>" alt="" style="width:130px;height:130px;">
                        </td>
                        <td><?php echo $data['facultyName'] ?></td>
                        <td><?php echo $data['facultyPost'] ?></td>
                        <td><?php echo $data['facultyMessege'] ?></td>
                        <td><?php echo $data['instaLink'] ?></td>
                        <td><?php echo $data['fbLink'] ?></td>
                        <td><?php echo $data['twitterLink'] ?></td>
                        <td><?php echo $data['linkedInLink'] ?></td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog"
                        id="ModalLabel<?php echo $data["facultyID"]; ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Edit Record</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="./Opearations/editModals.php" method="post"
                                        enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                            <input type="hidden" value="<?php echo $data['facultyID']; ?>" name="facultyID">
                                                <label for="news">Faculty Name</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    placeholder="Enter Title" name="facultyName"
                                                    value="<?php echo $data['facultyName'] ?>" required>
                                            </div>
                                            <br>
                                            <div class="form-group col-md-6">
                                                <label for="news">Faculty Post</label>
                                                <input type="link" id="disabledTextInput" class="form-control"
                                                    placeholder="Enter Faculty Post" name="post"
                                                    value="<?php echo $data['facultyPost'] ?>" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="news"><i class='bx bxl-instagram'></i> Instagram
                                                    Link</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    placeholder="Enter Insta Link" name="inLink"
                                                    value="<?php echo $data['instaLink'] ?>" required>
                                            </div>
                                            <br>
                                            <div class="form-group col-md-6">
                                                <label for="news"><i class='bx bxl-facebook'></i> Facebook Link</label>
                                                <input type="link" id="disabledTextInput" class="form-control"
                                                    placeholder="Enter Facebook Link" name="fLink"
                                                    value="<?php echo $data['fbLink'] ?>" required>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="news"><i class='bx bxl-twitter'></i> Twitter Link</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    placeholder="Enter Twitter Link" name="twitLink"
                                                    value="<?php echo $data['twitterLink'] ?>">
                                            </div>
                                            <br>
                                            <div class="form-group col-md-6">
                                                <label for="news"><i class='bx bxl-linkedIn'></i> LinkedIn Link</label>
                                                <input type="link" id="disabledTextInput" class="form-control"
                                                    placeholder="Enter LinkedIn link" name="lLink"
                                                    value="<?php echo $data['linkedInLink'] ?>">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-6 mt-4">
                                                <div class="card mb-1 ">
                                                    <div class="row g-0">
                                                        <div class="col-md-6">
                                                            <img src="<?php echo $data['facultyPhoto'] ?>"
                                                                height="200px" width="180px"
                                                                class="img-fluid rounded-start m-lg-4 mt-0" alt="..." id="output"
                                                                name="imgIntro">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="card-body">
                                                                <h6 class="card-title">Faculty Image</h6>
                                                                <br>
                                                                <label for="imgLogo">Choose</label>
                                                                <input type="file"
                                                                    accept="image/png, image/gif, image/jpeg, image/jpg"
                                                                    id="imgLogo" name="facImg"
                                                                    onchange="loadFile(event)" required />

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="form-group">
                                                    <label for="landMark">Facultie's Messege</label>
                                                    <textarea type="text" class="edt form-control"
                                                        id="edit<?php echo $data["facultyID"]; ?>" name="fMessege"
                                                        aria-describedby="emailHelp" placeholder="Teacher's Messege !"
                                                        required></textarea>
                                                </div>
                                                <script>
                                                CKEDITOR.replace('edit<?php echo $data["facultyID"]; ?>', {
                                                    height: '35px'
                                                });
                                                </script>
                                            </div>
                                        </div>
                                        <input type="submit" name="updateFaculty" value="Save" class="btn btn-success">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Delete-->
                    <div class="modal fade" id="DeleteModalCenter<?php echo $data["facultyID"]; ?>" tabindex="-1"
                        role="dialog" aria-labelledby="DeleteModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog" role="document">
                            <div class="modal-content">
                                <input type="hidden" value="<?php echo $data['facultyID']; ?>" name="facultyID">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white"
                                        id="DeleteModal<?php echo $data["facultyID"]; ?>">
                                        Delete
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <a href="./Opearations/deleteFaculty.php?facultyID=<?php echo $data["facultyID"]; ?>"
                                        class="btn btn-danger"> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </tbody>
                <?php $Serail++;
                    } ?>
                <!-- Add more rows as needed -->

            </table>
        </div>
        <?php include('./connection.php') ?>

    </section>
    <script src="./js/sidebar.js"></script>
    <script>
    var loadFile = function(event) {
        var image = document.getElementById('output');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
    <script src="./js/sidebar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>