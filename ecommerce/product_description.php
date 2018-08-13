<?php
session_start();
include "include/include.php";
$productid=$_GET['id'];
$query="SELECT * FROM `product_description` WHERE `product_id` =$productid";
//Here we  match the product id (by taking it from profile.php as  store in id variable then store here in productid variable) and run such query of product_description.php

$result=mysqli_query($con,$query);
 $rowa=mysqli_fetch_array($result);

 //print_r($row);
 $produc_name=$rowa['product_name'];
 $product_imagefile=$rowa['image_file_path'];
 $product_price=$rowa['product_price'];
 $product_desc=$rowa['product_desc'];



//product table and product description have doesnot required to name given same 
 ?>





<html>
<head>
	<title>homepages</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="ecommerceCss.css">
	<!--	<script src="bootstrap/js/bootstrap.min.js"></script>-->
		<script src= "js/js.min"></script>
</head>

<?php
	
		if(isset($_SESSION['check']))
		{
			if($_SESSION['check']==1)
			{
		echo "<script type=\"text/javascript\">
				$(document).ready(
				function(){
					alert(\"Added to the cart\");
				
				})
		</script>";

		$_SESSION['check']=0;
	}
	
}
?>
	



<body class="home">
		<div class="heading">
			<div class="row">
				<div class="col-md-1"><img src="img/c.ico" style="width:100%; height:100px"></div>

				<div class="col-md-3">
					<a href="index.php"><h1 style="padding-top:10px">ChorBazzar.in</h1></a>
				</div>


				<div class="col-md-6">
				   <h5 style="margin-top:-3px">shop byCategory</h5>
				   
	      		<select autofocus>
	      		
	      			<option placeholder="select category"></option>
	      			<option  href="index.php>">All categories</option>
	      		<option><a href="category">Computer accessories<a></option>
	      	<option><a href="category">clothing<a></option>
	      <option><a href="category">kids playing<a></option>
	  <option><a href="category">mobile <a></option>
	<option><a href="category">Electronics accessories<a></option>
</select>
					<div id="tfheader">
		<form id="tfnewsearch" method="get" action="http://www.google.com">
		        <input type="text" class="tftextinput" name="q" size="50" maxlength="120"><input type="submit" value="search" class="tfbutton">
		</form>
				</div>
				<nav>
			<a href="my_cart.php">My Cart</a>&emsp;&emsp;
			<a href="my_purchase.php">My purchase</a>&emsp;&emsp;
				<a href="today.php">Today's deal</a>&emsp;&emsp;
					<a href="index.php">customer's service</a>&emsp;&emsp;
						
							<a href="index.php">Today's best offer</a>
							</nav>

				</div>


				<div class="col-md-2">
					<h3 style="padding-top:60px"> Welcome
					 <?php 
					  echo $_SESSION['name'];
					 ?>
					 	
					 </h3>
					<a href="logout.php"> Logout</a>
				</div>
			</div><!-- row-->
			</div><!--heading-->

	<!--------------------------------------------------------------------------------  -->

	<div class="container_desc">
		<div class="row">
			<div class="col-md-4" style="margin-left:50px"> <img src="img/<?php echo $product_imagefile ?>" 
			style="width:100%;height:300px">
			</div>
			<div class="col-md-6" style="padding-top:100px ">PRICE INR:<?php echo $product_price ?><br>
			<a href="perform_add_to_cart.php?product_id=<?php echo $productid ;?>" class="btn btn-success "> Add to cart</a></div>
		</div> <!-- .row -->";

	<div class="row">

			<div class="col-md-8"> <h1 style="text-align:center padding-left:10px">Description<h1><br>
			<?php echo $product_desc ?>
			</div>
			<div class="col-md-4"> <h1>Review</h1><br>
				<p>This is my review.</p>
				<p>This is my review.</p>
				<p>This is my review.</p>
				<p>This is my review.</p>
				<p>This is my review.</p>
				</div>

		</div><!-- rows -->

	</div>
	</body>
</html>

