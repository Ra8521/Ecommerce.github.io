<?php  /* To give message product add to cart*/

session_start();

include "include/include.php";
$product_id=$_GET['product_id'];
$user_id=$_SESSION['user_id'];
 $query="INSERT INTO `user_cart` (`user_cartid`, `user_id`, `product_id`) 
			VALUES (NULL, '$user_id', '$product_id')";

/*$res=mysqli_query($con,$query);
print_r($res);
*/
	if(mysqli_query($con,$query))
{
	$_SESSION['check']=1;
	header('Location:product_description.php?id='.$product_id);
}

?>
