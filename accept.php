<?php
session_start();
include 'database.php';

$date= $_REQUEST['dateleave'];
$name= $_REQUEST['name'];
$email= $_REQUEST['id'];
$phone= $_REQUEST['phone'];
$desig= $_REQUEST['desig'];
$reason= $_REQUEST['reason'];
$I= $_REQUEST['I'];
$II= $_REQUEST['II'];
$III= $_REQUEST['III'];
$IV= $_REQUEST['IV'];
$V= $_REQUEST['V'];
$IV= $_REQUEST['VI'];

$_SESSION['date']=$date;
$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['I']=$I;
$_SESSION['II']=$II;
$_SESSION['III']=$III;
$_SESSION['IV']=$IV;
$_SESSION['V']=$V;
$_SESSION['VI']=$VI;

$query="INSERT INTO `leaves1` (`date`, `name`, `email`, `phone`, `desig`, `reason`, `I`, `II`, `III`, `IV`, `V`, `VI`) VALUES ('$date', '$name', '$email', '$phone', '$desig', '$reason', '$I', '$II', '$III', '$IV', '$V', '$VI') ;";

mysqli_query($conn,$query);
header("location:tleaves.php");
?>