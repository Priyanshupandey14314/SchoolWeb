<script src="../ckeditor/ckeditor.js"></script>
<?php include('sidebar.php') ?>

<body>

    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-5">
                <h5>Infrastructure</h5>
                <p>Edit Infrastructure from here.</p>
            </div>
        </div>
        <div class="details">
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="news">Building Type</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Like computer Lab" name="buildingType" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="news">Area</label>
                        <input type="link" id="disabledTextInput" class="form-control" placeholder="Area of the Building" name="area" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="news">Numbers</label>
                        <input type="link" id="disabledTextInput" class="form-control" placeholder="NUmber of buildings" name="numbers" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label for="landMark">Description</label>
                            <textarea type="text" class="edt form-control" id="achivementEditor" name="description" aria-describedby="emailHelp" placeholder="Description." required></textarea>
                        </div>
                        <script>
                            CKEDITOR.replace('achivementEditor', {
                                height: '95px'
                            });
                        </script>
                    </div>
                </div>
                <input type="submit" name="saveInfrastructure" value="save" class="btn btn-success mb-4">
            </form>
        </div>
        <?php include('./connection.php') ?>
        <table class="table table-success table-striped mt-5">
            <tr>
                <th>Edit / Delete</th>
                <th>Building Type</th>
                <th>Area</th>
                <th>Numbers</th>
                <th>Description</th>
            </tr>

            <?php
            $sql = "SELECT ID,buildingType,area,numbers,description FROM `infrastructure` ";
            $result  = mysqli_query($conn, $sql);
            ?>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
            // LOOP TILL END OF DATA\
            $Serail=1;
            while ($data = mysqli_fetch_assoc($result)) {
                $ID = $data['ID'];
            ?>
                <tr>
                    <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalLabel<?php echo $data["ID"]; ?>">Edit</button> &nbsp;
                        <button type="button" class="btn btn-danger mr-2" data-bs-toggle="modal" data-bs-target="#DeleteModalCenter<?php echo $data["ID"]; ?>">Delete</button>
                    </td>
                    <td><?php echo $data['buildingType'] ?></td>
                    <td><?php echo $data['area'] ?></td>
                    <td><?php echo $data['numbers'] ?></td>
                    <td><?php echo $data['description'] ?></td>
                </tr>
                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" id="ModalLabel<?php echo $data["ID"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myLargeModalLabel">Edit Record</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="./Opearations/editModals.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="news">Building Type</label>
                                            <input type="hidden" value="<?php echo $data['ID'] ?>" name="id" />
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="Like computer Lab" name="buildingType" value="<?php echo $data['buildingType'] ?>" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="news">Area</label>
                                            <input type="link" id="disabledTextInput" class="form-control" placeholder="Area of the Building" value="<?php echo $data['area'] ?>" name="area" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="news">Numbers</label>
                                            <input type="link" id="disabledTextInput" class="form-control" placeholder="NUmber of buildings" name="numbers" value="<?php echo $data['numbers'] ?>" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group">
                                                <label for="landMark">Description</label>
                                                <textarea type="text" class="edt form-control" id="editor" text="description" name="description" aria-describedby="emailHelp" placeholder="Enter your Achivements." required><?php echo $data['description'] ?></textarea>
                                            </div>
                                            <script>
                                                CKEDITOR.replace('editor', {
                                                    height: '65px'
                                                });
                                            </script>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-Success" name="saveInfs">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Delete-->
                <div class="modal fade" id="DeleteModalCenter<?php echo $data["ID"]; ?>" tabindex="-1" role="dialog" aria-labelledby="DeleteModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title text-white" id="DeleteModal<?php echo $data["ID"]; ?>">Delete</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure want to permanently delete record?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                <a href="./Opearations/deleteinfrastructure.php?ID=<?php echo $data["ID"]; ?>" class="btn btn-danger"> Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $Serail++;
            } ?>
        </table>
        <?php
        $ID;
        if (isset($_POST['delete'])) {
            $DELETE = "DELETE FROM `infrastructure` WHERE `infrastructure`.`ID` = $ID ";
            if (mysqli_query($conn, $DELETE)) {
                $msg = "Data Deleted Succesfully";
                echo "<script type='text/javascript'>alert('$msg');</script>";
            } else {
                echo "ERROR: Sorry, there was an error deleting the data: " . mysqli_error($conn);
            }
        }
        ?>
    </section>
    <script src="./js/sidebar.js"></script>
    <script>
        var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

</body>

</html>