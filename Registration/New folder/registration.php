<?php
	$First_name=$_GET['First_name'];
	$Last_Name=$_GET['Last_name'];
	$Email=$_GET['Email'];
	$pass=$_GET['pass'];
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"distance_learning");
	$qur="insert into registration(First_name,Last_Name,Email,pass)values('".$First_name."', '".$Last_Name."','".$Email."','".$pass."')";
	
	$res=mysqli_query($con,$qur);
	if($res)
	{
		header('Location:DL/index.html');
	}
	mysqli_close($con);

?>