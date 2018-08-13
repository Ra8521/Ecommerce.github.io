



<!DOCTYPE html>
<html>
<head>
	<title>homepages</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../ecommerceCss.css">
	<!--	<script src="bootstrap/js/bootstrap.min.js"></script>-->
		<script src= "../js/js.min"></script>
</head>
<?php
	session_start();
	
		if(isset($_SESSION['log']))
		{
			if($_SESSION['log']==5)
			{
				//echo "hello";
				echo "<script type=\"text/javascript\">
				$(document).ready(
				function(){
					alert(\"Product Added\");
			})
				</script>";

				

		$_SESSION['log']=0;
	}
	


}



	?>



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
		
		<h1 style="text-align:center">Adding Product</h1>
		<div class="row">
			<div class="col-md-1"> </div>
			<div class="col-md-6">
			<form class="form" action="perform_add_product.php" method="POST">
				<label><h4>product name:</h4></label><br>
					<input type="text" name="product_name" class="form-control" ><br>
				<label><h4>product price:</h4></label><br>
					<input type="text" name="price" class="form-control"><br>
						<label><h4>image :</h4></label><br>
					<input type="text" name="image" class="form-control"><br>
				<label><h4>product Description:</h4></label><br>
				<textarea name="description" class="form-control">	
				</textarea><br><br>

	
			<input type="submit" class="btn btn-warning" value="Add product">
			</form>
		</div>
		<div class="col-md-5"> </div>
		</div> <!-- row -->
			


</body>
</html>


