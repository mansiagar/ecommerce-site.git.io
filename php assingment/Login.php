<?php
include './includes/common.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
                                    
                                         <!--Login panel--->
    <div class="container login-padding">
        <div class="row row-style">
        	<div class="col-sm-6 col-sm-offset-3">
        		<div class="panel panel-primary">
        			<div class="panel-heading">
        			   <h3>Login</h3>
        			</div>
        			<div class="panel-body">
        				<p class="text-warning">Login to make a purchase </p>
        			    <form method="POST" action="login_submit.php">
        					<div class="form-group">
        				     <label for="email"></label>
        						<input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
        					</div>
        					<div class="form-group">
        						<label for="password"></label>
        						<input type="password" class="form-control" name="password" placeholder="Password" required="true">
        					</div>
                   <div class="form-group">
                    <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                </div>

        					<button type="submit" class="btn btn-primary" href="">Login</button>
                  <div class="form-group">
                    <p><a href="#">Forgot Password?</a></p>
                </div>

        				</form>
        			</div>
        			  <div class="panel-footer">
        			  <h6>Don't have an account?<a href="Signup.php">Register</a></h6>
        			  </div>
        	    </div>
            </div>
        </div>
    </div> 
                                       <!--Login panel end--->   
      <?php 
    include './includes/footer.php';
   ?>                                  <!--footer tag--->
    

</div>

</body>
</html>