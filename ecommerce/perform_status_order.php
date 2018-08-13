<?php
include "include/include.php";
session_start();
$product_id=$_GET['id'];

$user_id=$_SESSION['user_id'];

$query="INSERT INTO `users_orders` (`product_id`, `userid`, `order_id`, `status`) 
		VALUES ('$product_id', '&user_id', NULL, 'pending ')";

		if(mysqli_query($con,$query)){
	$query1= "DELETE FROM `user_cart` WHERE `user_cart`.`user_cartid` = '$user_id' AND `product_id`='$product_id'";	
	if(mysqli_query($con,$query1)){
		$_SESSION['check']=4;
		header('Location:profile.php');
	}
}
?>