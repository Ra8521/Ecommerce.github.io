<?php

	session_start();
	include "../include/include.php";
	$product_id=$_GET['id'];
	$query="DELETE FROM `product_description` WHERE `product_description`.`product_id` ='$product_id'";
	if(mysqli_query($con,$query)){

		$_SESSION['del']=1;

		header('Location:product_list.php');
	}

	
	?>