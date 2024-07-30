<style>
    .gallery img{
  width: 100%;
  border-end-end-radius: 10px;
  border-top-left-radius: 10px;
  background-size: contain;
  height: -webkit-fill-available;
}
.gallery
{
   display: grid;
   grid-template-columns: repeat(auto-fit,minmax(250px, 1fr));
   margin-top:120px;
   margin-left: 40px;
   margin-right: 40px;
   margin-bottom: 20px;
   grid-gap: 10px !important;
         
}
</style>
<?php include('header.php') ?>
<?php include('./admin/connection.php') ?>

<body>
        <div class="gallery">
        <?php 
                      $sql = "SELECT image,caption FROM `gallery` ORDER BY imgID DESC; ";
                      $result  = mysqli_query($conn,$sql);
                     
                      ?>
                        <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                        <?php
                // LOOP TILL END OF DATA
                while ($data = mysqli_fetch_assoc($result ))
                {
            ?>
                       
                       <a href="<?php echo "./admin/".$data['image'] ?>" data-lightbox="models" data-title="<?php echo $data['caption']; ?>">
                       <img src="<?php echo "./admin/".$data['image'] ?>" alt="galleryImage">
                      </a>
                        <?php
                }
            ?>
         
        
        </div>
        <?php include('footer.php') ?>
    <script lang="javascript" src="./assets/js/lightbox-plus-jquery.js"></script>
</body>
</html>