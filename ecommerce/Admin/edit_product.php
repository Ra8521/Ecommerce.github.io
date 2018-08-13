<?php
session_start();
	include "../include/include.php";
	
	$product_id=$_GET['id'];

	$query="SELECT * FROM `product_description` WHERE `product_id`='$product_id'";
		//connect to databases server
	//mysqli_select_db($con,'market
	$res=mysqli_query($con,$query);
	$a=mysqli_fetch_array($res);
	$product_name=$a['product_name'];
	$product_price=$a['product_price'];
	$product_image=$a['image_file_path'];
	$product_desc=$a['product_desc'];
	?>





<!DOCTYPE html>
<html>
<head>
	<title>homepages</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../ecommerceCss.css">
	<!--	<script src="bootstrap/js/bootstrap.min.js"></script>-->
		<script src= "../js/js.min"></script>
</head>




<body class="home">
<?php 
	//include "include/header.php"
?>
			

		 <div class="heading">
			<div class="row">
				<div class="col-md-1"><img src="../img/c.ico" style="width:100%; height:100px"></div>

				<div class="col-md-3">
					<a href="index.php"><h1 style="padding-top:10px">ChorBazzar.in</h1></a>
				</div>


				<div class="col-md-6">
				  
				   
	      	
				
				
				<nav style="padding-top:40px">
			<a href="admin_profile.php">Home</a>&emsp;&emsp;
			<a href="edit_product.php">Edit_product</a>&emsp;&emsp;
				<a href="add_product.php">Add_product</a>&emsp;&emsp;
					<a href="orders.php">orders</a>&emsp;&emsp;
						
							<a href="index.php">Today's best offer</a>
							
							</nav>
							</div>
				




				<div class="col-md-2">
	
					<!-- <h3 style="padding-top:60px"> Welcome
					 <?php 
					 //echo $_SESSION['name'];
					 ?></h3> -->
					 
					 	
					
					<a href="../logout.php"><p style="padding-top:40px"> Logout </p></a>
				</div>	
			</div><!-- row-->
			</div><!--heading-->
		
		<h1 style="text-align:center">UPDATE Product</h1>
		<div class="row">
			<div class="col-md-1"> </div>
			<div class="col-md-6">
			<form class="form" action="update_product.php" method="POST">
				<label><h4>product name:</h4></label><br>
					<input type="text" name="name" value="<?php echo $product_name ?>" class="form-control" ><br>

				<label><h4>product price:</h4></label><br>
					<input type="text" name="price" value="<?php echo $product_price ?>" class="form-control" ><br>

				<label><h4>image :</h4></label><br>
					<input type="text" name="image" value="<?php echo $product_image ?>" class="form-control" ><br>

				<label><h4>product Description:</h4></label><br>
				<input type="text"  name="description" value="<?php echo $product_desc ?>" class="form-control">	
		<br><br>

				<input type="hidden" name="id" value="<?php	echo $product_id; ?>">

	
			<input type="submit" class="btn btn-warning" value="edit">
			</form>
		</div>
		<div class="col-md-5"> </div>
		</div> <!-- row -->
			


</body>
</html>



