<?php 
$con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
if (isset($_SESSION ['email'])){
  header("location:product.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Lifestyle Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php include './includes/link.php';?>
</head>
<body>
  <?php 
  include './includes/header.php';
  ?>
   <div class="banner-image">
        <div class="container">
          <div class="banner_content">
                    <h1>We sell lifestyle</h1>
                    <p> Flat 40% OFF on premium brands</p><a class="btn btn-danger btn-lg-active "  href="login.php">Shop Now</a>
            </div>
          </div>
    </div>
    <div class="container" style="padding-top: 25px;">
      <div class="row">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/camera.jpg" clas="img-responsive">
            <div class="caption center">
              <h3>Camera</h3>
              <p>Choose among the best available.</p>
            </div>
           </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/watch.jpg" clas="img-responsive">
            <div class="caption center">
              <h2>Watches</h2>
              <p>Original watches from the best brands.</p>
            </div>
           </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/shirt.jpg" clas="img-responsive">
            <div class="caption">
              <h2>Shirts</h2>
              <p>Our exquisite collection of shirts.</p>
            </div>
           </div>
        </div>
      </div>
      
    </div>
    <?php 
  include './includes/footer.php';
  ?>
    
</div>
  

</body>
</html>
