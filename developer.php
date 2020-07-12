<?php
session_start();
include 'database.php';

if ($_SESSION['email']=="pandey.mohiy614@gmail.com") {
	header('location:admin.php');
}
else{
	header('location:user.php');
}
?>