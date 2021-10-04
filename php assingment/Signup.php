<?php
include './includes/common.php';
    if(isset($_SESSION['email'])){
        header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp page</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="indexpage.css">
</head>
<body>
  <?php 
  include './includes/header.php';
  ?>

                                         
                                         <!--Signup--->
  <div class="container login-padding">
    <div class="row row-style">
      <div class="col-sm-6 col-sm-offset-3">
        <form method="POST" action="Signup_script.php">
           <h1>SIGN UP</h1>
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="name" required="true">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            <?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'];
                                }
                                ?>

          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="true" pattern=".{6,0}">
          </div>
          <div class="form-group">
            <input type="number" name="contact" class="form-control" placeholder="Contact" maxlength="10" size="10" required="true">
              <?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                ?>

          </div>
          <div class="form-group">
            <input type="text" name="city" class="form-control" placeholder="City" required="true">
          </div>
          <div class="form-group">
            <input type="text" name="address" class="form-control" placeholder="Address" required="true">
          </div>
          <button type="submit" class="btn btn-primary" href="">Sign Up</button>
        </form>
      </div>
    </div>
  </div>                                       
                                    <!--footer tag--->
    
  <?php 
    include './includes/footer.php';
   ?>  
</div>

</body>
</html>