<?php

	session_start();
	include "../include/include.php";
	$product_name=$_POST['name'];
	$product_price=$_POST['price'];
	$product_image=$_POST['image'];
	$product_desc=$_POST['description'];
	$product_id=$_POST['id'];

	


	$query="UPDATE `product_description` SET `product_name` = '$product_name', `image_file_path` = '$product_image', `product_price` = '$product_price', `product_desc` = '$product_desc' WHERE `product_description`.`product_id` =
		'$product_id' ";

		/*$r=mysqli_query($con,$query);
		$res=mysqli_fetch_array($r);
		print_r($res);*/
	
	if(mysqli_query($con,$query)){
	header('Location:product_list.php');
}
	?>