<?php
session_start();
include 'database.php';


$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$pass=$password;


$query="select * from login where email='$email' and password='$pass' ;";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);

$_SESSION['name']=$row['name'];
$_SESSION['email']=$row['email'];	
$_SESSION['desig']=$row['desig']; 
$_SESSION['dept']=$row['dept'];
$_SESSION['name']=$row['name'];



if ($row['email']==$email and $row['password']==$pass) {

	if ($row['email']=="pandey.mohit614@gmail.com") {
		header("location:admin.php");
		
	}
	else{
		header("location:user.php");
		
	}
}
else{
	 	header("location:index.php");
	
}


?>
