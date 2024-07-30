<script src="../ckeditor/ckeditor.js"></script>
<style>

.modal-dialog {
    width: 850px !important;
    max-width: 1000px !important;
}
.modal-body {
    width: 840px !important;
}

</style>
<?php include('sidebar.php') ?>

<body>

    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-5">
                <h5>Events Section</h5>
                <p>Edit events from here.</p>
            </div>
        </div>
        <div class="details">
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">

                <br>
                <div class="card mb-3 col-md-10">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="" class="img-fluid rounded-start" alt="..." id="output" style="height:350px;" />
                            <input type="file" accept="image/png, image/gif,image/jpeg" name="eventPhoto"
                                style="margin-left:20px;margin-top:10px;" onchange="loadFile(event)" required />
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Add Events </h5>

                                <label for="principleName">Events's Title</label>
                                <input type="text" id="disabledTextInput" class="form-control mt-2"
                                    placeholder="Enter Title" name="eventTitle" required>
                                <br>
                                <label for="principleName">Event's Subtitle</label>
                                <input type="text" id="disabledTextInput" class="form-control mt-2"
                                    placeholder="Enter Subtitle" name="eventsubtitle" required>
                                <br>
                                <label for="principleName">Event's Description</label>
                                <textarea type="text" class="form-control" id="editor" rows="4" cols="50"
                                    name="eventDescrp" aria-describedby="emailHelp" id="editor" required></textarea>
                                <script>
                                CKEDITOR.replace('editor', {
                                    height: '65px'
                                });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" name="saveEvents" value="Save" class="btn btn-primary">
            </form>

            <?php include('./connection.php') ?>
            <table class="table table-stripped table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Edit/Delete</th>
                        <th>Event Title</th>
                        <th>Event Sub title</th>
                        <th>Event Image</th>
                        <th>Event Description</th>

                    </tr>
                </thead>
                <tbody>
                    <?php  
       $sqltxt= "SELECT eventID,eventsTitle,eventsSubtitle,eventsDescription,eventImg FROM `events` ;";
       $result  = mysqli_query($conn,$sqltxt);
                     
    ?>

                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                    <?php
                // LOOP TILL END OF DATA
               
                while ($data = mysqli_fetch_assoc($result ))
                {  $Serial="1";
            ?>
                    <tr>
                        <td style="width:240px;"><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#ModalLabel<?php echo $data["eventID"]; ?>">Edit</button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#DeleteModalCenter<?php echo $data["eventID"]; ?>">Delete</button>
                        </td>
                        <td><?php echo $data['eventsTitle'] ?></td>
                        <td><?php echo $data['eventsSubtitle'] ?></td>
                        <td><img src="<?php echo $data['eventImg'] ?>" style="height:200px;width:300px;" alt=""></td>
                        <td><?php echo $data['eventsDescription'] ?></td>

                    </tr>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog"
                        id="ModalLabel<?php echo $data["eventID"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
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

                                        <br>
                                        <div class="card mb-3 col-md-10">
                                            <div class="row g-0">
                                                <div class="col-md-6">
                                                    <script>
                                                    var loadFiles<?php echo $data['eventID'] ?> = function(event) {
                                                        var image = document.getElementById('out<?php echo $data['eventID'] ?>');
                                                        image.src = URL.createObjectURL(event.target.files[0]);
                                                    };
                                                    </script>
                                                    <img src="<?php echo $data['eventImg'] ?>"
                                                        class="img-fluid rounded-start" alt="..." id="out<?php echo $data['eventID'] ?>" />
                                                    <input type="file" accept="image/png, image/gif,image/jpeg"
                                                        name="eventPhoto" style="margin-left:20px;margin-top:10px;"
                                                       onchange="loadFiles(event)" required " />
                                                </div>
                                                <div class=" col-md-6">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Add Events </h5>
                                                        <input type="hidden" value="<?php echo $data['eventID'] ?>"
                                                            name="eventID">

                                                        <label for="principleName">Events's Title</label>
                                                        <input type="text" id="disabledTextInput"
                                                            class="form-control mt-2" placeholder="Enter Title"
                                                            name="eventTitle" value="<?php echo $data['eventsTitle'] ?>"
                                                            required>
                                                        <br>
                                                        <label for="principleName">Event's Subtitle</label>
                                                        <input type="text" id="disabledTextInput"
                                                            class="form-control mt-2" placeholder="Enter Subtitle"
                                                            name="eventsubtitle"
                                                            value="<?php echo $data['eventsSubtitle'] ?>" required>
                                                        <br>
                                                        <label for="principleName">Event's Description</label>
                                                        <textarea type="text" class="form-control"
                                                            id="editor<?php echo $data['eventID'] ?>" rows="4" cols="50"
                                                            name="eventDescrp" aria-describedby="emailHelp"
                                                            id="editor<?php echo $data['eventID'] ?>"
                                                            required> value="<?php echo $data['eventsDescription'] ?>"</textarea>
                                                        <script>
                                                        CKEDITOR.replace('editor<?php echo $data['eventID'] ?>', {
                                                            height: '65px'
                                                        });
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="submit" name="updateEvents" value="Save" class="btn btn-primary">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Delete-->
                    <div class="modal fade" id="DeleteModalCenter<?php echo $data["eventID"]; ?>" tabindex="-1"
                        role="dialog" aria-labelledby="DeleteModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white" id="DeleteModal<?php echo $data["eventID"]; ?>">
                                        Delete
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $data['eventID'] ?>" name="id" />
                                    <p>Are you sure want to permanently delete record?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <a href="./Opearations/deleteEvents.php?eventID=<?php echo $data["eventID"]; ?>"
                                        class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </tbody>

                <?php $Serial++;
            } ?>
                </tbody>
            </table>
        </div>
        <?php include('./connection.php') ?>
        
</body>
<script src="./js/sidebar.js"></script>
<script>
var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script src="./js/sidebar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>


</html>