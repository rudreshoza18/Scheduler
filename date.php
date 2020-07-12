<?php 
session_start();
include 'database.php';

$date=$_REQUEST['date'];
$_SESSION['date']=$date;

header('location: form.php');

 ?>