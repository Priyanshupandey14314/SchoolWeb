<style>

.table {
    margin-top: 90px;
    text-align: center;
}
</style>
<?php include('sidebar.php') ?>

<body>

    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-5">
                <h5>Document Edit</h5>
                <p>Upload Documents from here.</p>
            </div>
        </div>
        <div class="details">
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-5">
                    <label for="exampleInputEmail1">Document's Title</label>
                <input type="text" class="form-control" id="calendar" name="title" aria-describedby="emailHelp"
                   placeholder="Enter Document's Title" required>
                    </div>
                <div class="form-group col-md-7">
                <label for="exampleInputEmail1">Document file</label>
                <input type="file" class="form-control" id="calendar" name="file" aria-describedby="emailHelp"
                   accept=".pdf" required>
            </div>
                </div>
                <br>
            
            <input type="submit" value="Save" name="saveDocument" class="btn btn-success">
            </form>
            <?php include('./connection.php') ?>
        
        <table class="table table-bordered table-stripped mt-2">
                <tr>
                    <th>Document ID </th>
                    <th>Document Title</th>
                    <th>Delete</th>
                </tr>
                <?php 
  $sqltxt = "SELECT docID,documentTitle,ducumentFile from documents;";
  $result  = mysqli_query($conn,$sqltxt);
  while ($data = mysqli_fetch_assoc($result )) {
    ?>
                <tr>
                    <td><?php echo $data['docID'] ?></td>
                    <td><?php echo $data['documentTitle']; ?></td>
                    <td><button type="button" class="btn btn-danger mb-2 mr-2" data-bs-toggle="modal"
                                data-bs-target="#DeleteModalCenter<?php echo $data["docID"]; ?>">Delete</button>
                        </td>
                </tr>
                <div class="modal fade" id="DeleteModalCenter<?php echo $data["docID"]; ?>" tabindex="-1"
                        role="dialog" aria-labelledby="DeleteModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white" id="DeleteModal<?php echo $data["docID"]; ?>">
                                        Delete
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $data['docID'] ?>" name="id" />
                                    <p>Are you sure want to permanently delete record?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <a href="./Opearations/deleteDocs.php?docID=<?php echo $data["docID"]; ?>"
                                        class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
    }
  ?>
            </table>
        </div>
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