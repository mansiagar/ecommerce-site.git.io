<?php
$con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
 if(!isset($_SESSION['email'])){
  session_start();
}
?>
<!DOCTYPE>
<html lang="en">
<head>
  <title>Product Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php include './includes/link.php';?>
</head>
<body>
<?php
include './includes/header.php';
include './includes/check_if_added.php';
?>

   <div class="container">
    <div class="jumbotron">
      <h1 style="font-size: 40px; font-weight: bold;">Welcome to our Lifestyle Store!</h1>
      <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place.</p>
      </div>
      
                          <!--row 1 start--->                               
      <div class="row">
         <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
        
          <img src="images/5.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3>Cannon EOS</h3>
          <P>Price:Rs.36000.00</P>
          <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(1)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          </div>
          </div>
          </div>

        <div class="col-md-3  col-sm-6">
          <div class="thumbnail">
          <img src="images/2.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3>Sony DSLR</h3>
          <P>Price:Rs. 40000.00</P>
         <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(2)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          </div>
          
          </div>
          </div>

        <div class="col-md-3  col-sm-6">
          <div class="thumbnail">
          <a href="">
          <img src="images/3.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3>Sony DSLR</h3>
          <P>Price:Rs.50000.00</P>
          <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(3)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          
          </div>
          </a>
          </div>
          </div>


        <div class="col-md-3  col-sm-6">
          <div class="thumbnail">
          <img src="images/4.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3>Olympus DSLR</h3>
          <P>Price:Rs.80000.00</P>
          <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(4)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          </div>
          </div>
          </div>
      </div>

      
                                      <!--row 1 complete--->
                                      <!--row 2 start--->

       <div class="row">
         <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
          
          <img src="images/9.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3 style="font-size: 19px;">Titan Model #301</h3>
          <P>Price:Rs.13000.00</P>
          <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(5)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          </div>
         
          </div>
          </div>

        <div class="col-md-3  col-sm-6">
          <div class="thumbnail">
          
          <img src="images/10.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3 style="font-size: 19px;">Titan Model #201</h3>
          <P>Price:Rs.3000.00</P>
          <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(6)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          </div>
          
          </div>
          </div>

        <div class="col-md-3  col-sm-6">
          <div class="thumbnail">
          <a href="">
          <img src="images/11.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3>HMT Milan</h3>
          <P>Price:Rs.8000.00</P>
          <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(7)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          </div>
          </a>
          </div>
          </div>


        <div class="col-md-3  col-sm-6">
          <div class="thumbnail">
          <a href="">
          <img src="images/12.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3>Faber Luba #111</h3>
          <P>Price:Rs.18000.00</P>
          <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(8)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          </div>
          </a>
          </div>
          </div>
      
                                             <!--row 2 end--->
                                             <!--row 3 start--->

         <div class="col-md-3 col-sm-6">
          <div class="thumbnail">
          <a href="">
          <img src="images/8.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3>H&W</h3>
          <P>Price:Rs.800.00</P><br>
          <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(9)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          </div>
          </a>
          </div>
          </div>

        <div class="col-md-3  col-sm-6">
          <div class="thumbnail">
          <a href="">
          <img src="images/6.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3>Luis Phil</h3>
          <P>1000.00</P>
          <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(10)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          </div>
          </a>
          </div>
          </div>

        <div class="col-md-3  col-sm-6">
          <div class="thumbnail">
          <a href="">
          <img src="images/13.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3>John Zok</h3>
          <P>Price:Rs.1500.00</P>
          <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(11)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          </div>
          </a>
          </div>
          </div>


        <div class="col-md-3">
          <div class="thumbnail">
          <a href="">
          <img src="images/14.jpg" alt="Lights" style="width:100%">
          <div class="caption">
          <h3>Jhalsani</h3>
          <P>Price:Rs.1300.00</P>
          <?php 
          if (!isset($_SESSION['email'])) {
           ?>
            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
             <?php 
           }else { //We have created a function to check whether this particular product is added to cart or not.
          if (check_if_added_to_cart(12)) 
          { //This is same as  if(check_if_added_to_cart (0)!=0)
         echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
          }
    else {
     ?> <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php 
    }
  } 
  ?>
          </div>
          </a>
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