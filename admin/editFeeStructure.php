<style>
.details {
    position: relative;
    top: 40;
    left: 35;
    bottom: 20;
}
.card {
    background-color: rgba(12, 250, 20, 0.20) !important;
    height: fit-content !important;
    margin-left: 10px;

}
.modal-dialog
{
    max-width: 900px !important;
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
<?php include('./connection.php') ?>


<body>
    <section class="home-section">

        <div class="home-content">
            <i class='bx bx-menu'></i>
            <br>
            <div class="mt-5">
                <h5>Fee Structure</h5>
                <p>Edit Fee Structure from here.</p>
            </div>
        </div>
        <div class="details">
            <form action="./Opearations/insertionFile.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">Class</label>
                            <input type="text" class="form-control" name="class" id="school_name"
                                aria-describedby="emailHelp" placeholder="Enter Class" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">Admission Fee in Rupees</label>
                            <input type="text" class="form-control" name="admFees" id="school_name"
                                aria-describedby="emailHelp" placeholder="Adission Fee in Rs" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">Tution Fee in Rupees</label>
                            <input type="text" class="form-control" name="tutionFees" id="school_name"
                                aria-describedby="emailHelp" placeholder="Tution Fee in Rs" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">Yearly Development Charges</label>
                            <input type="text" class="form-control" name="yearlyDevCharge" id="school_name"
                                aria-describedby="emailHelp" placeholder="Development Charges" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="schoolName">Yearly/monthly other Charges.</label>
                            <input type="text" class="form-control" name="otherCharge" id="school_name"
                                aria-describedby="emailHelp" placeholder="Other Charges" required>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small> -->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <input type="submit" class="btn btn-success mt-4" value="submit" name="saveFee">
                    </div>
                </div>
            </form>
            <table class="table table-dark table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Edit/Delete</th>
                        <th>Class</th>
                        <th>Admission Fee (RS)</th>
                        <th>Tution Fees (RS)</th>
                        <th> Yearly Development Charges(RS)</th>
                        <th> Other Charges</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
$class="";
$admFees = "";
$tutionFees="";
$yearlyDevCharge="";
$otherCharges="";
$sqltxt= "SELECT feeID,class,admFee,tutionFee,yearlyDevCharge,otherCharge FROM `feestructure`;";
$result  = mysqli_query($conn,$sqltxt);
?>
                    <?php $Serail=1;
     while ($data = mysqli_fetch_assoc($result )) { $id= $data['feeID'];
 ?>           
                    <tr>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#ModalLabel<?php echo $data['feeID']; ?>">Edit</button> &nbsp;
                            <button type="button" class="btn btn-danger  mr-2" data-bs-toggle="modal"
                                data-bs-target="#DeleteModalCenter<?php echo $data['feeID']; ?>">Delete</button>
                        </td>
                        <td><?php echo $data['class'] ?></td>
                        <td><?php echo $data['admFee'] ?></td>
                        <td><?php echo $data['tutionFee'] ?></td>
                        <td><?php echo $data['yearlyDevCharge'] ?></td>
                        <td><?php echo $data['otherCharge'] ?></td>

                    </tr>
                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg-5" tabindex="-1" role="dialog"
                        id="ModalLabel<?php echo $data['feeID']; ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" style="width:800px;">
                            <div class="modal-content">
                                <div class="modal-header bg bg-info">
                                    <h5 class="modal-title" id="myLargeModalLabel">Edit Record</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="./Opearations/editModals.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                 <input type="hidden" value="<?php echo $data['feeID']; ?>" name="id">
                                                    <label for="schoolName">Class</label>
                                                    <input type="text" class="form-control" value="<?php echo $data['class'] ?>" name="class"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Enter Class" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="schoolName">Admission Fee in Rupees</label>
                                                    <input type="text" class="form-control" name="admFees"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Enter Admisison Fee in Rs" value="<?php echo $data['admFee'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="schoolName">Tution Fee in Rupees</label>
                                                    <input type="text" class="form-control" name="tutionFees"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Enter School Name" value="<?php echo $data['tutionFee'] ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="schoolName">Yearly Development Charges</label>
                                                    <input type="text" class="form-control" name="yearlyDevCharge"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Enter School Name" value="<?php echo $data['yearlyDevCharge'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="schoolName">Yearly/monthly other Charges.</label>
                                                    <input type="text" class="form-control" name="otherCharge"
                                                        id="school_name" aria-describedby="emailHelp"
                                                        placeholder="Enter School Name" value="<?php echo $data['otherCharge'] ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="submit" class="btn btn-success mt-4" value="Save"
                                                    name="saveFee">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Delete-->
                    <div class="modal fade" id="DeleteModalCenter<?php echo $id; ?>" tabindex="-1"
                        role="dialog" aria-labelledby="DeleteModalCenterTitle" aria-hidden="true">
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
                                    <input type="hidden" value="<?php echo $id; ?>" name="id" />
                                    <p>Are you sure want to permanently delete record?</p>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-light-dark" data-bs-dismiss="modal">Discard</button>
                                    <a href="./Opearations/deleteFee.php?feeID=<?php echo $id; ?>"
                                        class="btn btn-danger"> Delete</a>
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