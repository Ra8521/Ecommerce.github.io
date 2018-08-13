<?php
session_start();
if(isset($_SESSION['login'])){
	if ($_SESSION['login']==1) {
		header('Location:profile.php');
		# code...
	}
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>homepages</title>
<!-- due to use of bootstrap this page become responsive of size of desktop
otherwise  to make responsive page we use tag <meta name =""> This topic studied under responsive CSS. we can also do may things like we control CSS of page accprding to size od screen i.e. different for computer, for mobile. etc  -->

	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="ecommerceCss.css">
	<!--	<script src="bootstrap/js/bootstrap.min.js"></script>-->
		<script src= "js/js.min"></script>





</head>
	<?php
	
		if(isset($_SESSION['reg']))
		{
			// if($_SESSION['reg']==1 and $_SESSION['x']==5)
				if($_SESSION['reg']==1)
			{

		// Here use JQUERY to easly implement javascript
		echo "<script type=\"text/javascript\">

				$(document).ready(
				function(){
					alert(\"Registeratio successful\");
				$('.registeration').addClass('vanish');
				$('.log_in').removeClass('vanish');	
				})
		</script>";

		$_SESSION['reg']=0;
	}


	 elseif ($_SESSION['reg']==3) {
				echo "<script type=\"text/javascript\">
				$(document).ready(
				function(){
					alert(\"Registeratio unsuccessful Already registered password\");
			})
				</script>";

		$_SESSION['reg']=0;
		# code...
	}
	

}



?>

<script src="my_javascript.js"></script>

<body class="home" onload="disable_SUB()">
<?php 
	include "include/header.php"
?>

<!----------------------------------------REGISTERATION FORM--------------------------------------------------- -->			

		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
			<div class="registeration">
			<h1>Registeratio Here!</h1>
				<form action="perform_reg.php" method="POST" name="form1">
					<label>Name: </label>
						<input type="text" name="name" id="name" class="form-control" >
						<!-- required is important attributr give this position is important -->



					<label>E-mail:</label>
						<input type="email" name="email" class="form-control" required>
						<!-- <label>userid:</label>
							<input type="text" name="userid" class="form-control">-->
						<label>password:</label>
							<input type="password" name="password" class="form-control" required>
							<input type="checkbox" name="term" id="term" 
							onclick="ActivateButton()"><a href="#"><i>i Agree with term and condition</i></a><br>
							<input type="submit" value="sign_up" id="sign_up" 
							onclick="allLetter(document.form1.name)">	
				</form>
					<p id="para"><a href= "#">Already registered?sign_in </a></p></div>
			

	<!------------------------- LOGIN FORM ---------------------------------------------- -->
			
		<!--<div class="row">
			<div class="col-md-6"> </div>
<div class="col-md-6" >-->


		<div class="log_in vanish">
	<form action="perform_login.php" method="POST">
		<label style="margin-top:50px">Email:</label><br>
		<input type="email" name="email" class="form-control"><br>
		<label>password:</label><br>
		<input type="password" name="password" class="form-control"><br>
		<input type="submit" value="login" id="para3">
	</form>
	<p id="para2"><a href ="#">Not a member? sign up </a></p></div>   <!-- in my_javascript.js  -->
	</div>
	</div>

</body>
</html>


