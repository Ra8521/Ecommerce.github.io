<?php
session_start();

//connect to server
	$con=mysqli_connect('localhost','root','');


	//connect to databases server
	mysqli_select_db($con,'market');

//recive the input in databases
$user_name=$_POST['name'];
$E_mail=$_POST['email'];
$user_password=$_POST['password'];

//check whether user exist already or not
/*  $query="SELECT * FROM `users`where password=$user_password"; // Run the query
$data=mysqli_query($con,$query);  // store the objective return from mysqli in variable data
if(mysqli_num_rows($data)>0){  // check row is really inserted in database
$_SESSION['reg']=3;

}

else{*/
//create Query
$query="INSERT INTO `users` (`Name`, `Email`, `userid`, `password`, `user_type`) 
		VALUES ('$user_name', '$E_mail', NOT NULL, '$user_password', 'user')";



/*$result=mysqli_query($con,$query);
 //echo $result;
//
$num=mysqli_num_rows($result);//count no. of row insert in query
echo $num;*/

//$data=mysqli_query($con,$query) i.e. Run the Query and turn into variable
if(mysqli_query($con,$query)){
//query are in objective to access individual element convert into array


 

  	$_SESSION['reg']=1;
  	header('Location:index.php');
  }
  //	}

  //}  // To directory on the another page
 

//echo" <h1>Registeration Successfully </h1>";  

  
?>