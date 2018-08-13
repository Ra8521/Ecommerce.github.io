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
					<h1 style="text-align:center">purchase product</h1></div>

						<?php

						$user_id=$_SESSION['user_id'];

				$query="SELECT * FROM `users_orders` LEFT JOIN `product_description` ON  `product_description`.`product_id` = `users_orders`.`product_id` WHERE  `userid`= '$user_id'";

				$res=mysqli_query($con,$query);
					/*$row= mysqli_fetch_array($res);
				print_r ($res);*/
				$num=mysqli_num_rows($res)	;
				//print_r($num);
		for($i=0;$i<$num;$i++){
				$row= mysqli_fetch_array($res);



	echo " <div class=\"row\"  style=\"background-color:#FFF8DC; height:150px;margin-bottom:20px\">


						
					<div class=\"col-md-3\"> <img src=\"img/".$row['image_file_path']."\" style=\"background-color:#FFF8DC; height:150px;margin-bottom:20px\"></div>

						<div class=\"col-md-4 \" style=\"padding-top: 50px;\">".$row['product_name'] .
						"</div>

						<div class=\"col-md-2\"  style=\"padding-top: 50px;\"><h5>PRICE ".$row['product_price']."</h5></div>

						<div class=\"col-md-2\" style=\"padding-top: 50px;\">
						<a href=\"\" class=\"btn btn-primary btn-lg btn-block\">
						".$row['status']."</a></div>
						</div>
						</div>";

				}
				?>
</body>
</html>
