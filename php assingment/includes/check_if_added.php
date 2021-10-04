<?php
function check_if_added_to_cart($item_id){
	include './includes/common.php';

 	/*$user_id= $_SESSION['user_id'];//for get user id 
 	$query="SELECT * FROM users_products WHERE product_id = '$item_id' AND user_id = '$user_id'
 	and status= 'Added To cart'";
 	 $query_result = mysqli_query($con, $query);

 	 if(mysqli_num_rows($query_result)>=1){
 	 	return 1;

 	 }
 	 else{
 	 	return 0;
 	 }
 	 */
 	  $user_id = $_SESSION['user_id'];
        
        $addcart= "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added To Cart'";

        $query_result = mysqli_query($con, $addcart)or die(mysqli_error($con));
        
        if(mysqli_num_rows( $query_result) >= 1)
        {
            return 1;
        }else{
            return 0;
        }

}


?>