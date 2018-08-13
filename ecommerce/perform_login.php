<?php
session_start();

//connect to server
	$con=mysqli_connect('localhost','root','');


	//connect to databases server
	mysqli_select_db($con,'market');

//receive the input

	$e_mail=$_POST['email'];
	$pass_word=$_POST['password'];


	//create Query
$query="SELECT * FROM `users` WHERE `Email` LIKE '$e_mail' AND `password` = '$pass_word'";	

//run the query and stores its  return value it can print by using print_r "";

$result=mysqli_query($con,$query);
//
$num=mysqli_num_rows($result);//count no. of row insert in query
//echo $num;

if($num==1){
	//echo "hello i am";
	$row=mysqli_fetch_array($result);
//print_r($row);}
	$_SESSION['name']=$row['Name'];
		$_SESSION['user_id']=$row['userid'];
	
$_SESSION['login']=1;

	if($row['user_type']=='admin')
	{
		//echo "hello";
	
	header('Location:Admin/admin_profile.php');
}
	else if($row['user_type'=='user']){
		$_SESSION['rs']=1;
		header('Location:profile.php');
}
}
//else
	//header('Location:index.php');*/
?>