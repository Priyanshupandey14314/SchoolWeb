<style>
.details {
    position: relative;
    top: 40;
    left: 15;
    bottom: 20;
}

.card {
    background-color: rgba(12, 250, 20, 0.20) !important;
    height: fit-content !important;
    margin-left: 10px;

}

.modal-dialog {
    max-width: 900px !important;
}

.card img {
    margin-left: 15px;
    margin-top: 15px;
    padding-right: 10px;
    height: 350px;
}

th {
    font-weight: 500;
}

.btn {
    width: 100px;
    border-radius: 8px !important;
}
</style>
<?php include('sidebar.php') ?>
<?php include('./connection.php') ?>
<?php 
$date = date('m/d/Y h:i:s', time());
?>


<body>
    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-5">
                <h5>TC Details</h5>
                <p>Manage TC Deatails from here.</p>
            </div>
        </div>
        <div class="details">
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">Student's Name</label>
                            <input type="text" class="form-control" name="stdName" id="school_name"
                                aria-describedby="emailHelp" placeholder="Enter Name" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">Father's Name</label>
                            <input type="text" class="form-control" name="fName" id="school_name"
                                aria-describedby="emailHelp" placeholder="Entert Father's Name" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">Mother's Name</label>
                            <input type="text" class="form-control" name="motherName" id="school_name"
                                aria-describedby="emailHelp" placeholder="Enter Mother's Name" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">Adress</label>
                            <input type="text" class="form-control" name="adress" id="school_name"
                                aria-describedby="emailHelp" placeholder="Enter Adress" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">Contact Number</label>
                            <input type="text" class="form-control" name="contact" id="school_name"
                                aria-describedby="emailHelp" placeholder="Other Charges" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">Last Class</label>
                            <input type="text" class="form-control" name="lastClass" id="school_name"
                                aria-describedby="emailHelp" placeholder="Enter Last Class" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">TC Number</label>
                            <input type="number" class="form-control" name="tcNumber" id="school_name"
                                aria-describedby="emailHelp" placeholder="Enter TC Number" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">TC Issue Date</label>
                            <input type="disabled" class="form-control disabled" name="issueDate" id="school_name"
                                aria-describedby="emailHelp" value="<?php echo $date?>" placeholder="Tc Issue Date"
                                disabled required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-success mt-4" value="submit" name="saveTcDetails">
                    </div>
                </div>
            </form>
            <table class="table table-dark table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Edit/Delete</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Adress</th>
                        <th>Contact Number</th>
                        <th>Last Class</th>
                        <th>TC Number</th>
                        <th>TC Issue Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
$sqltxt= "SELECT stdId,studentName,fatherName,MotherName,adress,lastClass,tcNumber,contactNo,tcIssueDate FROM `tcdetails`;";
$result  = mysqli_query($conn,$sqltxt);
?>
                    <?php $Serail=1;
     while ($data = mysqli_fetch_assoc($result )) { $id= $data['stdId'];
 ?>
                    <tr>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#ModalLabel<?php echo $data['stdId']; ?>">Edit</button> &nbsp;
                            <button type="button" class="btn btn-danger  mr-2" data-bs-toggle="modal"
                                data-bs-target="#DeleteModalCenter<?php echo $data['stdId']; ?>">Delete</button>
                        </td>
                        <td><?php echo $data['studentName'] ?></td>
                        <td><?php echo $data['fatherName'] ?></td>
                        <td><?php echo $data['MotherName'] ?></td>
                        <td><?php echo $data['adress'] ?></td>
                        <td><?php echo $data['contactNo'] ?></td>
                        <td><?php echo $data['lastClass'] ?></td>
                        <td><?php echo $data['tcNumber'] ?></td>
                        <td><?php echo $data['tcIssueDate'] ?></td>


                    </tr>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg-5" tabindex="-1" role="dialog"
                        id="ModalLabel<?php echo $data['stdId']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" style="width:800px;">
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
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <input type="hidden" name="stdId" value="<?php echo $data['stdId']; ?>">
                                                    <label for="schoolName">Student's Name</label>
                                                    <input type="text" class="form-control" name="stdName"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Enter Name" value="<?php echo $data['studentName'] ?>" required>
                                                    <!-- < id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="schoolName">Father's Name</label>
                                                    <input type="text" class="form-control" name="fName"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Entert Father's Name" value="<?php echo $data['fatherName'] ?>"  required>
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="schoolName">Mother's Name</label>
                                                    <input type="text" class="form-control" name="motherName"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Enter Mother's Name" value="<?php echo $data['MotherName'] ?>" required>
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="schoolName">Adress</label>
                                                    <input type="text" class="form-control" name="adress"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Enter Adress" value="<?php echo $data['adress'] ?>" required>
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="schoolName">Contact Number</label>
                                                    <input type="text" class="form-control" name="contact"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Other Charges" value="<?php echo $data['contactNo'] ?>" required>
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="schoolName">Last Class</label>
                                                    <input type="text" class="form-control" name="lastClass"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Enter Last Class" value="<?php echo $data['lastClass'] ?>" required>
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="schoolName">TC Number</label>
                                                    <input type="number" class="form-control" name="tcNumber"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Enter TC Number" value="<?php echo $data['tcNumber'] ?>" required>
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="schoolName">TC Issue Date</label>
                                                    <input type="disabled" class="form-control disabled"
                                                        name="issueDate" id="school_name" aria-describedby="emailHelp"
                                                        value="<?php echo $date?>" placeholder="Tc Issue Date" disabled
                                                        value="<?php echo $date; ?>" required>
                                                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="submit" class="btn btn-success mt-4" value="submit"
                                                    name="updateTcDetails" id="stdId">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Delete-->
                    <div class="modal fade" id="DeleteModalCenter<?php echo $id; ?>" tabindex="-1" role="dialog"
                        aria-labelledby="DeleteModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <h5 class="modal-title text-white" id="DeleteModal<?php echo $id; ?>">
                                        Delete
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" value="<?php echo $data['stdId']; ?>" name="stdId" />
                                    <p>Are you sure want to permanently delete record?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <a href="./Opearations/deleteTcDetails.php?stdID=<?php echo $id; ?>"
                                        class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </tbody>
                <?php $Serail++;
            } ?>
            </table>
        </div>

        <script src="./js/sidebar.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>