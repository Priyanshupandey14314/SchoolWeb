<script src="../ckeditor/ckeditor.js"></script>
<style>
.details {
    position: relative;
    top: 40;
    left: 35;
    bottom: 20;
}

.table tr th {
    text-align: center;
    font-weight: 500 !important;
}

.card .btn {
    float: right;
    margin-left: 10px;
    width: 100px;
}

td {
    font-family: sans-serif !important;
    font-size: 15px;
    font-weight: 0 !important;
}

.card img {
    margin-left: 15px;
    margin-top: 15px;
    padding-right: 10px;
    height: 350px;
}

.btn {
    width: 100px;
    border-radius: 8px !important;
}
</style>
<?php include('sidebar.php') ?>

<body>
    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-3">
                <h5>Admission Process</h5>
                <p>Edit Admission Process from here.</p>
            </div>
        </div>
        <div class="details">
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-11">
                        <label for="schoolName">Process Description</label>
                        <textarea type="text" class="form-control" id="editor" name="processDescript"
                            aria-describedby="processDescript" placeholder="Enter Process Description."
                            required></textarea>
                    </div>
                    <script>
                    CKEDITOR.replace('editor');
                    </script>
                </div>
                <input type="submit" value="Save" name="saveInAdmissionProcess" class="btn btn-success mt-3">
            </form>
            <?php include('./connection.php') ?>
            
            <table class="table table-dark table-bordered mt-3">
                <thead>
                    <tr>
                        <th style="width:20rem;">Edit/Delete</th>
                        <th>Process Details</th>

                    </tr>
                </thead>
                <tbody>
                    <?php  
       $sql = "SELECT processID,processDetails  FROM `processes`";
       $result  = mysqli_query($conn,$sql);
                     
    ?>

                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php $Serail=1;
                // LOOP TILL END OF DATA
                while ($data = mysqli_fetch_assoc($result ))
                {
            ?>
                    <tr>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#ModalLabel<?php echo $data["processID"]; ?>">Edit</button> &nbsp;
                            <button type="button" class="btn btn-danger  mr-2" data-bs-toggle="modal"
                                data-bs-target="#DeleteModalCenter<?php echo $data["processID"]; ?>">Delete</button>
                        </td>
                        <td><?php echo $data['processDetails'] ?></td>

                    </tr>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog"
                        id="ModalLabel<?php echo $data["processID"]; ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg bg-info">
                                    <h5 class="modal-title" id="myLargeModalLabel">Edit Record</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <form action="./Opearations/editModals.php" method="post"
                                        enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="form-group col-md-11">
                                                <input type="hidden" value="<?php echo $data['processID'] ?>"
                                                    name="processID" />
                                                <label for="schoolName">Process Description</label>
                                                <textarea type="text" class="form-control" id="editor<?php echo $data['processID'] ?>"
                                                    name="processDescript" aria-describedby="processDescript"
                                                    placeholder="Enter Process Description." required><?php echo $data['processDetails'] ?></textarea>
                                            </div>
                                            <script>
                                            CKEDITOR.replace('editor<?php echo $data['processID'] ?>');
                                            </script>
                                        </div>
                                        <input type="submit" value="Save" name="saveProcess"
                                            class="btn btn-success mt-3">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Delete-->
                    <div class="modal fade" id="DeleteModalCenter<?php echo $data["processID"]; ?>" tabindex="-1"
                        role="dialog" aria-labelledby="DeleteModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white"
                                        id="DeleteModal<?php echo $data["processID"]; ?>">
                                        Delete
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $data['processID'] ?>" name="id" />
                                    <p>Are you sure want to permanently delete record?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <a href="./Opearations/deleteProcess.php?processID=<?php echo $data["processID"]; ?>"
                                        class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </tbody>

                <?php $Serail++;
            } ?>
                </tbody>
            </table>
        </div>

    </section>
    <script src="./js/sidebar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>