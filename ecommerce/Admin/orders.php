<?php
include "../include/include.php";
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../ecommerceCss.css">
		<script src= "../js/js.min"></script>
</head>


<body>
<?php
		include "include/header.php"; ?>

			
					<div class="row">
					<h1 style="text-align:center">products Status</h1></div>
					<table class="table">
					<tr>
						<th>S.no</th>
						<th>product id</th>
						<th>user id</th>
						<th>status</th>
						<th>Action</th>
					</tr>



						<?php
							$counter=1;
						$user_id=$_SESSION['user_id'];

				$query="SELECT * FROM `users_orders` LEFT JOIN `product_description` ON  `product_description`.`product_id` = `users_orders`.`product_id` WHERE  `status`= 'pending'";


				$res=mysqli_query($con,$query);
				//$row= mysqli_fetch_array($res);
				//print_r($row);
				$num=mysqli_num_rows($res)	;
				//print_r($num);
			for($i=1;$i<=$num;$i++){
				$row= mysqli_fetch_array($res);
				echo "<tr>";
				echo "<td>".$counter."</td>";
				echo "<td>".$row['product_id']."</td>";
				echo "<td>".$row['userid']."</td>";
				echo "<td>"."pending". "</td>";
				echo "<td>"."<a href=\"shipping.php\">"."Shipping"." </a>"."</td>";
				
	    			echo "</tr>";

				$counter++;
				}
				?>

</table>
</body>


	
			
</html>

	
	    			
