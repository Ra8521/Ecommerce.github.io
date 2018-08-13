<?php 
session_start();
include "../include/include.php";
$order_status_id=$_GET['id'];

$query="UPDATE`users_orders`SET `status`='shipped'WHERE `order_id`='$order_status_id'";
$rse=mysqli_query($con,$query);
if(mysqli_query($con,$query)){
	$_SESSION['check']=5;
	header('Location:orders.php');
}
?>