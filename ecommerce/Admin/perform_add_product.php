<?php
//echo "hello";

session_start();
$con=mysqli_connect('localhost','root','');


	//connect to databases server
	mysqli_select_db($con,'market');

	$product_name=$_POST['product_name'];
	$product_price=$_POST['price'];
	$product_image=$_POST['image'];
	$product_desc=$_POST['description'];


$query="INSERT INTO `product_description` (`product_name`, `product_id`, `image_file_path`, `product_price`, `product_desc`) VALUES ('$product_name', NULL, '$product_image', '$product_price', '$product_desc')";




if(mysqli_query($con,$query)>0){
//query are in objective to access individual element convert into array
// $row= mysqli_fetch_array($data)

 //echo "hello";

  	$_SESSION['log']=5;
  }
	header('Location:add_product.php');



?>
