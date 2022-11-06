<?php
	
	$e=$_GET['email'];
	$p=$_GET['pass'];
	$a='admin@gmail.com';
	$pa='admin123';
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"distance_learning");
	$sql = "select * from registration where Email='$e' AND pass='$p'";
        $result = mysqli_query($con, $sql);
               $row = mysqli_fetch_assoc($result);
                if (($row['Email'] === $e && $row['pass'] === $p) && ($row['Email']!==$a && $row['pass']!==$pa)) 
	{
	header("Location: index.html");
}
	else if($row['Email']===$a && $row['pass']===$pa)
{
	header("Location: admin.php");
	
}
	else
	 echo "<script language=\"JavaScript\">\n";
	echo "alert('Check your details !!');\n";
	echo "window.location='login.html'";
	echo "</script>";


?>