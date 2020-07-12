<?php 
session_start();
include 'database.php';


// error_reporting(0);

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$dept = $_REQUEST['dept'];
$desig= $_REQUEST['Designation'];
$reason = $_REQUEST['Reason'];
$date = $_SESSION['date'];


if (!$_REQUEST['I']) {
	$I =NULL;
$II = NULL;
$III = NULL;
}
else{
	$I = $_REQUEST['I'];
$II = $_REQUEST['II'];
$III = $_REQUEST['III'];
}

if (!$_REQUEST['IV']) {
	# code...
	$IV=NULL;
$V= NULL;
$VI= NULL;
}
else{
$IV= $_REQUEST['IV'];
$V= $_REQUEST['V'];
$VI= $_REQUEST['VI'];
}


//echo $name.$email.$date.$phone.$desig.$reason.$I.$II.$III.$IV.$V.$VI;

$sql= "INSERT INTO `leaves`(`date`, `name`, `phone`, `email`, `desig`, `reason`, `I`, `II`, `III`, `IV`, `V`, `VI`) VALUES ('$date','$name','$phone','$email','$desig','$reason','$I','$II','$III','$IV','$V','$VI');" ;

// INSERT INTO `leaves`(`date`, `name`, `email`, `phone`, `desig`, `reason`, `I`, `II`, `III`, `IV`, `V`, `VI`) VALUES ('$date','$name','$phone','$email','$desig','$I','$II','$III','$IV','$V','$VI')
$res=mysqli_query($conn,$sql);
if(!$res){
	
	header('location:form.php');
}
else{
	if($email=="pandey.mohit614@gmail.com")
	{
		header('location:admin.php');
	}
	else{
	header('location:user.php');
}
}



 ?>