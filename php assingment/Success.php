<?php
include './includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Order Successful</title>
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
$user_id =$_SESSION['user_id'];
$query= "SELECT item_id FROM users_items WHERE user_id='$user_id'";
$result =mysqli_query($con,$query)or die(mysql_error($con));
while($row=mysqli_fetch_array($result)){
  $item_id=$row['$item_id'];
  $query_update= "UPDATE users_items SET status = 'confirmed'  WHERE item_id='$item_id' ";
  $result_update =mysqli_query($con,$query_update)or die(mysql_error($con));
}

?>
 
<div class="container login-padding">

  <div class="row row-style">
      <div class="col-sm-6 col-sm-offset-3">
            <h2>Your order is confirmed</h2>
        <div class="panel-group">
          <div class="panel panel-success">
            <div class="panel-heading"><h4><b>Thank you</b> for shopping with us</h4>
            </div>
             <div class="panel-body"> <a href="product.php">Click here </a> to purchase any other item
             </div>
          </div>
        </div>
      </div>
    </div>
</div>

</body>
</html>
