<?php
include "include/include.php";
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="ecommerceCss.css">
		<script src= "js/js.min"></script>
</head>




<body>
<?php
		include "include/header.php"; ?>
			
					<div class="row">
					<h1 style="text-align:center">Added Product</h1></div>

						<?php
						$user_id=$_SESSION['user_id'];

				$query="SELECT * FROM `user_cart` LEFT JOIN `product_description` ON 
				      `product_description`.`product_id` = `user_cart`.`product_id` WHERE  `user_id`= '$user_id'";

				$res=mysqli_query($con,$query);
				//print_r($res);
				$num=mysqli_num_rows($res)	;
					/*$row= mysqli_fetch_array($res);
				print_r($row);*/
			for($i=0;$i<$num;$i++){
				$row= mysqli_fetch_array($res);



	echo " <div class=\"row\">
		<div class=\"col-md-offset-2 col-md-8\" style=\"background-color:#FFF8DC; height:150px;margin-bottom:20px\">


						
					<div class=\"col-md-3\"> <img src=\"img/".$row['image_file_path']."\" style=\"padding-left:0%; height:150px;margin-bottom:20px;width:100%; \"></div>

						<div class=\"col-md-4 \" style=\"padding-top: 45px;\">"."<h1>".$row['product_name'] ."</h1>"."</div>

						<div class=\"col-md-2\"  style=\"padding-top: 50px;\"><h5>PRICE ".$row['product_price']."</h5></div>

						<div class=\"col-md-2\" style=\"padding-top: 50px;\">
						<a href=\"perform_my_cart.php?id=".$row['product_id']."\" class=\"btn btn-primary btn-lg\">
						checkout</a></div>
						</div>
						</div></div>";

    			
 

						

				}
				?>
</body>
</html>
