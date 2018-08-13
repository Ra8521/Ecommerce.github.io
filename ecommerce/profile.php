<?php
session_start();
include "include/include.php" ;

?>



<!DOCTYPE html>
<html>
<head>
	<title>homepages</title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="ecommerceCss.css">
	<!--	<script src="bootstrap/js/bootstrap.min.js"></script>-->
		<script src= "js/js.min"></script>
		<link rel="canonical" href="localhost/eccomerce/"/>

		<!-- canonical is used to prefered search name input in search box in my give URL because same name exist in multiple URL it avoid you to harm from SEO -->
</head>
	<?php
	
		if(isset($_SESSION['check']))
		{
			if($_SESSION['check']==4)
			{
		echo "<script type=\"text/javascript\">
				$(document).ready(
				function(){
					alert(\"congrates purchased\");
				
				})
		</script>";

		$_SESSION['check']=0;
	}
	
}




	?>



<body class="home" style="background-color:#fff">
					

		<div class="heading" style="padding-bottom:-60px">
			<div class="row">
				<div class="col-md-1"><img src="img/c.ico" style="width:100%; height:90px"></div>

				<div class="col-md-3">
					<a href="index.php"><h1 style="padding-top:10px">ChorBazzar.in</h1></a>
				</div>


				<div class="col-md-6">
				   <h5 style="margin-top:8px">shop byCategory</h5>
				   
	      		<select autofocus style="margin-top: -4px">
	      		
	      			<option placeholder="select category"></option>
	      			<option  href="index.php>">All categories</option>
	      		<option><a href="category">Computer accessories<a></option>
	      	<option><a href="category">clothing<a></option>
	      <option><a href="category">kids playing<a></option>
	  <option><a href="category">mobile <a></option>
	<option><a href="category">Electronics accessories<a></option>
</select>
					<div id="tfheader">
		<form id="tfnewsearch" method="get" action="search.php">
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
					<h3 style="padding-top:30px"> Welcome
					 <?php 
					  echo $_SESSION['name'];
					 ?>
					 	
					 </h3>
					<a href="logout.php"> Logout</a>
				</div>
			</div><!-- row-->
			</div><!--heading-->
			

<div class="container">
	<di v class="row">
	
<?php
	include "include/include.php";


	$query="SELECT * FROM `product_description`";

	$result=mysqli_query($con,$query); //Run query

	$num= mysqli_num_rows($result); //Count  number of row in 
/*	$row=mysqli_fetch_array($result);
	print_r($row);*/

		for ($i=0;$i<$num; $i++) {
			$row=mysqli_fetch_array($result);

	echo "<div class=\"col-md-3\">
    					<div class=\"product\">
    						<img src=\"img/".$row['image_file_path'] ."\" style=\"width:100%;height:250px\">
							<h4 class=\"text_center\"><b>".$row['product_name']."</b></h4>
    						<p> <span style='font-family:Arial;'>&#8377;</span><small> <s>".$row['product_price']."</s></small></p>
    						<a href=\"product_description.php?id=".$row['product_id']."\" class=\"btn btn-danger btn-block\">View Item</a>
    					</div>
    				  </div>";
    	}


?>
	
	</div><!-- .row -->
</div> <!-- .container -->

</body>
</html>	
