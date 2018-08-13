<?php
	session_start();
	include "../include/include.php";

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

			<table class="table">
				<tr><th> S.No </th>
				<th> Name</th>
				<th>Action</th></tr>
				<?php
				$counter=1;
				$query="SELECT * FROM `product_description`";

				$row=mysqli_query($con,$query);
				$num=mysqli_num_rows($row);
				for($i=0;$i<$num;$i++){
					$array=mysqli_fetch_array($row);
					//print_r($array);
					echo "<tr>";
					echo "<td>".$counter."</td>";
					echo "<td>".$array['product_name']."</td>";
					echo "<td><a href=\"\" class=\"btn btn-danger btn-xs\">Delete</a>
					&nbsp <a href=\"\" class=\"btn btn-warning btn-xs\">Edit</a> 
					</td>";
					echo "<tr>";
					$counter++;
			

				}

?>
			</table>

</body>
</html>