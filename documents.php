<style>
.table {
    margin-top: 90px;
    text-align: center;
}

.btn {
    width: 100px;
    border-radius: 8px !important;
    margin-bottom: 10px;
}
</style>

<body>
    <?php include('./admin/connection.php') ?>
    <?php include('header.php') ?>
    <main id="main">
        <section id="documents">
            <table class="styled-table table table-bordered" style="margin-top:100px;">
            <thead>
            <tr class="active-row">
                    <th>Document ID </th>
                    <th>Document Title</th>
                    <th>View</th>
                </tr>
            </thead>
                
                <?php 
  $sqltxt = "SELECT docID,documentTitle,ducumentFile from documents;";
  $result  = mysqli_query($conn,$sqltxt);
  echo "Query Executed";
  while ($data = mysqli_fetch_assoc($result )) {
    ?>            <tbody>
                <tr>
                    <td><?php echo $data['docID'] ?></td>
                    <td><?php echo $data['documentTitle']; ?></td>
                    <td><button type="button" class="btn btn-info" data-bs-toggle="modal"
                            data-bs-target="#ModalLabel<?php echo $data["docID"]; ?>">View <i
                                class="bi bi-eye"></i></button>
                </tr>
                <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog"
                    id="ModalLabel<?php echo $data["docID"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-fullscreen">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <h5 class="modal-title" id="myLargeModalLabel"><?php echo $data['documentTitle']; ?></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="pdfviewer">
                                    <embed src="<?php echo "./admin/".$data['ducumentFile']; ?>" width="100%" height="1000px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
    }
  ?>
                  </tbody>
            </table>
        </section>
    </main>
    <?php include('footer.php') ?>
    <script src="./js/sidebar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>
</body>