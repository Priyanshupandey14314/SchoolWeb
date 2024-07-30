<style>
.details {
    position: relative;
    top: 60;
    left: 35;
    bottom: 20;
}

.btn {
    width: 100px;
    margin-left: 5px;
    border-radius: 8px !important;
    float: left;
}
</style>
<?php include('sidebar.php') ?>

<body>

    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-5">
                <h5>News Section</h5>
                <p>Edit News section from here.</p>
            </div>
        </div>
        <div class="details">
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="news">News Title</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Enter Title"
                            name="newsTitle" required>
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="news">News Link</label>
                        <input type="link" id="disabledTextInput" class="form-control" placeholder="Enter Link"
                            name="newsLink" required>
                    </div>
                    <br>
                </div>
                <input type="submit" class="btn btn-success mt-3" value="Save" name="saveNews">
            </form>

            <?php include('./connection.php') ?>
           
            <table class="table table-stripped table-bordered" style=" margin-top: 66px !important;">
                <thead>
                    <tr>
                        <th>Edit/Delete</th>
                        <th>News Title</th>
                        <th>News Link Fee (RS)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
$sqltxt= "SELECT newsID,newsTitle,newsLink FROM `newsdetails`;";
$result  = mysqli_query($conn,$sqltxt);
?>
                    <?php  $Serail=1;
     while ($data = mysqli_fetch_assoc($result )) {
 ?>
                    <tr>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#ModalLabel<?php echo $data["newsID"]; ?>">Edit</button> &nbsp;
                            <button type="button" class="btn btn-danger mb-2 mr-2" data-bs-toggle="modal"
                                data-bs-target="#DeleteModalCenter<?php echo $data["newsID"]; ?>">Delete</button>
                        </td>
                        <td><?php echo $data['newsTitle'] ?></td>
                        <td><?php echo $data['newsLink'] ?></td>

                    </tr>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog"
                        id="ModalLabel<?php echo $data["newsID"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
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
                                                <input type="hidden" value="<?php echo $data['newsID'] ?>" name="newsID" />
                                                <label for="news">News Title</label>
                                                <input type="text" id="disabledTextInput" class="form-control"
                                                    placeholder="Enter Title" name="newsTitle"
                                                    value="<?php echo $data['newsTitle'] ?>" required>
                                            </div>
                                            <br>
                                            <div class="form-group col-md-6">
                                                <label for="news">News Link</label>
                                                <input type="link" id="disabledTextInput" class="form-control"
                                                    placeholder="Enter Link" name="newsLink"
                                                    value="<?php echo $data['newsLink'] ?>" required>
                                            </div>
                                            <br>
                                        </div>
                                        <input type="submit" class="btn btn-success mt-3" value="Save" name="saveNews"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Delete-->
                    <div class="modal fade" id="DeleteModalCenter<?php echo $data["newsID"]; ?>" tabindex="-1"
                        role="dialog" aria-labelledby="DeleteModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white" id="DeleteModal<?php echo $data["newsID"]; ?>">
                                        Delete
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $data['newsID'] ?>" name="id" />
                                    <p>Are you sure want to permanently delete record?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <a href="./Opearations/deleteNews.php?newsID=<?php echo $data["newsID"]; ?>"
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
    </section>
</body>
<script src="./js/sidebar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

</html>