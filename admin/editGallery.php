<style>
.details {
    position: relative;
    top: 60;
    left: 35;
    bottom: 20;
}

.modal-body {
    width: 850px;
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
                <div class="card mb-3 col-md-10">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="" class="img-fluid rounded-start" alt="..." id="output" style="height:270px;" />
                            <input type="file" accept="image/png, image/gif,image/jpeg" name="image"
                                style="margin-left:20px;margin-top:10px;" onchange="loadFile(event)" required />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Image</h5>

                                <label for="principleName">Caption</label>
                                <input type="text" id="disabledTextInput" class="form-control mt-2"
                                    placeholder="Enter Title" name="caption" >
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Save" name="saveGallery" class="btn btn-success">



            </form>
        </div>
        <?php include('./connection.php') ?>
        
        </div>

        <table class="table table-stripped table-bordered" style=" margin-top: 142px !important;margin-left:40px;">
            <thead>
                <tr>
                    <th>Edit/Delete</th>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Caption</th>
                </tr>
            </thead>
            <tbody>
                <?php 
$sqltxt= "SELECT imgID ,image,caption FROM `gallery`;";
$result  = mysqli_query($conn,$sqltxt);
?>
                <?php 
                    $Serail="1";
     while ($data = mysqli_fetch_assoc($result )) {
 ?>
                <tr>
                    <td style="width:200px;">
                        <button type="button" class="btn btn-danger mb-2 mr-2" data-bs-toggle="modal"
                            data-bs-target="#DeleteModalCenter<?php echo $data["imgID"]; ?>">Delete</button>
                    </td>
                    <td><?php echo $data['imgID'] ?></td>
                    <td style="width:250px;"><img src="<?php echo $data['image'] ?>" style="height:190px;width:360px;" alt="galImg"</td>
                    <td><?php echo $data['caption'] ?></td>

                </tr>
                <!-- Modal -->
                <!-- Modal Delete-->
                <div class="modal fade" id="DeleteModalCenter<?php echo $data["imgID"]; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="DeleteModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <input type="hidden" value="<?php echo $data['imgID']; ?>" name="imgID">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title text-white" id="DeleteModal<?php echo $data["imgID"]; ?>">
                                    Delete
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" value="<?php echo $data['imgID'] ?>" name="id" />
                                <p>Are you sure want to permanently delete record?</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <a href="./Opearations/deleteGalleryImage.php?imgID=<?php echo $data["imgID"]; ?>"
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