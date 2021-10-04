<?php 
$con = mysqli_connect("localhost","root","","store")or die(mysqli_error($con));
 if(!isset($_SESSION['email'])){

  session_start();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="indexpage.css">
</head>
<body>
  <?php
include './includes/header.php';?>
                                  <!--navbar start--->

                             <!--navbar End--->
                              <!--setting page start--->
      
   <div class="container login-padding">
    <div class="row row-style">
      <div class="col-sm-6 col-sm-offset-3">
         <form action="setting_script.php" method="POST">
                  <div class="form-group">
                    <label for="oldPassword">Old Password</label>
                    <input type="password" class="form-control" name="oldPassword" required>                    
                  </div>
                  <div class="form-group">
                    <label for="newPassword">New Password</label>
                    <input type="password" class="form-control" name="newPassword" required>
                  </div>
                  <div class="form-group">
                    <label for="newPasswordRe">Re-type New Password</label>
                    <input type="password" class="form-control" name="newPasswordRe" required>                    
                  </div>
                  <?php 
                    if(isset($_GET['m1'])){
                      echo $_GET['m1'];
                    }                      
                    ?>
                  <input type="submit" class="btn btn-setting btn-block" value="Confirm">
                </form>
      </div>
    </div>
  </div>   
                              <!--setting page end--->
<?php
include './includes/footer.php';?>
</div>
</body>
</html>