<?php
  include './includes/common.php';
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
  include './includes/header.php';

  ?>
                                         <!--Table Start--->
    <div class="container login-padding">                               
  
    <table class="table table-bordered table-striped text-center table-responsive">
      <?php

      $user_id =$_SESSION['user_id'];
      $sum=0;
      $query = "SELECT items.id, items.price AS price,  items.name AS name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added To Cart'  ";
      $result =mysqli_query($con, $query)or die($mysqli_error($con));
  if (mysqli_num_rows($result) >= 1) {
            
  ?>
      <tbody>
        <tr class="text-center">
          <th>Item Number</th>
          <th> Item Price</th>
          <th> Price</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
        </tr>
       
         <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum=$sum+ $row["price"];                                    
                    $id = $row["id"];
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>Rs " . $row["price"] . "</td><td><a href='Cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                
             echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
                ?>
      </tbody>
      <?php
        } else {
            echo "<h3>Add items to the cart first!</h3>";
        }
        ?>

    </table>
  </div>
                                   <!--Table end--->

<footer style="padding:20px 20px 20px 20px; margin-top: 300px;">
    <div class="container"  >
        <center>Copyright © Lifestyle Store. All Rights
         Reserved” and “Contact Us: +91 90000 00000
      </center>
    </div>
</footer>
</div>
</body>
</html>