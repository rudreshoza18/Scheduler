<!DOCTYPE html>
<html lang="en">

<?php

session_start();

include 'database.php';
$faculty = array('ad','ar','aj','am','as','dm','md','mg','nk','pg','pm','rj','sb','ss','st');

$input= array();


?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>leave form</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="icon" href="th.jpg">

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

</script>
</head>

<body class="text-center">


<nav class="navbar fixed-top navbar-expand-lg navbar-dark grey">
        <a class="navbar-brand" href="#"><strong>Replacement Portal</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="font-size:18px;">
                <li class="nav-item">
                    <a class="nav-link" href="#">Developer</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="developer.php">Home</a>
                </li>
            </ul>
        </div>
</nav>

</header>
<br><br><br><br>

<!-- Default form contact -->
	<p class="h4 mb-4">Leave Form</p>
   	<form style="width: 50% ;" class="text-center p-5 container"  action="date.php" method="post">
    <!-- date -->
    	<div class="row">
    		<div class="col-md-8"><input type="date" id="defaultContactFormPhone" class="form-control mb-4" placeholder="Phone No." name="date" value="<?php echo $_SESSION['date'] ; ?>"></div>
    		<div class="col-md-4">
          		<button class="btn btn-info btn-block" type="submit" value="submit">Send</button>     
      		</div>
    	</div>
    	
    </form>
<form style="width: 50% ;"  class="text-center border border-light p-5 container" method="post" action="form_data.php">

<?php

error_reporting(0);
$date = $_SESSION['date'] ;
$yourDate = "$date";
$yourDate = DateTime::createFromFormat("Y-m-d", $yourDate);

$day1 = $yourDate->format("l");
$day= substr($day1,0,3);
?>


    <!-- Name -->
    <input type="text" id="defaultContactFormName" class="form-control mb-4" name="name" value="<?php echo $_SESSION['name'] ;?>" required="">

    <!-- Email -->
    <input type="email" id="defaultContactFormEmail" class="form-control mb-4" name="email" value="<?php echo $_SESSION['email'] ;?>" required="">
      <!-- phone -->
      <input type="text" pattern="[789][0-9]{9}" id="defaultContactFormPhone" class="form-control mb-4" placeholder="Phone No." name="phone" required="">
      

    <div>
      <textarea class="form-control mb-4" placeholder="Reason For Leave" name="Reason"></textarea>
    </div>

    <div class="row">
      <div class="col-md-5">
        <strong><h4>DEPARTMENT : <?php echo $_SESSION['dept']; ?><h4></strong>
      </div>
      <div class="col-md-2"></div>
      <div class="col-md-5"><strong><h4>DESIGNATION : <?php echo $_SESSION['desig']; ?></h4></strong></div>
      
    </div>
    <br>
<p class="text-center"><strong>Select Lectures duration</strong></p>
	

    <div class="row">
      
      <!-- Default inline 1-->
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input agree" id="box1">
  <label class="custom-control-label" for="box1">08:00am-11:00am</label>
</div>

       <!-- Default inline 2-->
<div class="custom-control custom-checkbox custom-control-inline">
  <input type="checkbox" class="custom-control-input agree" id="box2">
  <label class="custom-control-label" for="box2">11:40am-02:30am</label>
</div>
</div>
<hr>  
<br>
<p><strong>Select Alternative faculty</strong> </p>

<div class="row">
<div class="col-md-4">
    <label>08:00am-09:00am</label>
        <?php
        $j=0;
for ($i=0; $i < count($faculty); $i++) { 
	$sql= "select name FROM `$faculty[$i]` where DAY ='$day' and I='' ;";
	$res=mysqli_query($conn,$sql);
	if ($res) {
		$row= mysqli_fetch_array($res);
		$input[$j]=$row['name'];
		$j++;
	}
	
}

?>
    <select class="browser-default custom-select mb-4" id="s1" disabled name="I">
        <option value="NULL" active>FREE lecture</option>
   		<?php 
   			for ($i=0; $i < count($input); $i++) {
   				?>

			<option value="<?php echo $input[$i]; ?>"><?php if($input[$i]){echo $input[$i];} ?> </option>  
<?php	
}
?>     

    </select>
  </div>
  <div class="col-md-4">
    <label>09:00am-10:00am</label>
        <?php
         $j=0;
for ($i=0; $i < count($faculty); $i++) { 
	$sql= "select name FROM `$faculty[$i]` where DAY ='$day' and II='' ;";
	$res=mysqli_query($conn,$sql);
	if ($res) {
		$row= mysqli_fetch_array($res);
		$input[$j]=$row['name'];
		$j++;
	}
	
}

?>
    <select class="browser-default custom-select mb-4" id="s2" disabled name="II">
        <option value="NULL" active>FREE lecture</option>
   		<?php 
   			for ($i=0; $i < count($input); $i++) {
   				?>

			<option value="<?php echo $input[$i]; ?>"><?php  echo $input[$i]; ?> </option>  
<?php	
}
?>     

    </select>
  </div>

  <div class="col-md-4">
    <label>10:00am-11:00am</label>

        <?php
for ($i=0; $i < count($faculty); $i++) { 
	$sql= "select name FROM `$faculty[$i]` where DAY ='$day' and III='';";
	$res=mysqli_query($conn,$sql);
	if ($res) {
		$row= mysqli_fetch_array($res);
		$input[$i]=$row['name'];
	}
	
}

?>
    <select class="browser-default custom-select mb-4" name="III" id="s3" disabled>
        <option value="NULL" active>FREE lecture</option>
   		<?php 
   			for ($i=0; $i < count($input); $i++) {
   				?>

			<option value="<?php echo $input[$i]; ?>"><?php  echo $input[$i]; ?> </option>  
<?php	
}
?>     

    </select>

  </div>
</div>
<div class="row">
  <div class="col-md-4">
    <label>11:40am-12:40pm</label>
    <?php
for ($i=0; $i < count($faculty); $i++) { 
	$sql= "select name FROM `$faculty[$i]` where DAY ='$day' and IV='' ;";
	$res=mysqli_query($conn,$sql);
	if ($res) {
		$row= mysqli_fetch_array($res);
		$input[$i]=$row['name'];
	}
	
}

?>
    <select class="browser-default custom-select mb-4" id="s4" name="IV" disabled>
        <option value="NULL" active>FREE lecture</option>
   		<?php 
   			for ($i=0; $i < count($input); $i++) {
   				?>

			<option value="<?php echo $input[$i]; ?>"><?php  echo $input[$i]; ?> </option>  
<?php	
}
?>     

    </select>
  </div>
  <div class="col-md-4">
    <label>12:40pm-01:40pm</label>
    <?php
for ($i=0; $i < count($faculty); $i++) { 
	$sql= "select name FROM `$faculty[$i]` where DAY ='$day' and V='' ;";
	$res=mysqli_query($conn,$sql);
	if ($res) {
		$row= mysqli_fetch_array($res);
		$input[$i]=$row['name'];
	}
	
}

?>
    <select class="browser-default custom-select mb-4" id="s5" disabled name="V">
        <option value="NULL" active>FREE lecture</option>
   		<?php 
   			for ($i=0; $i < count($input); $i++) {
   				?>

			<option value="<?php echo $input[$i]; ?>"><?php  echo $input[$i]; ?> </option>  
<?php	
}
?>     

    </select>
  </div>
  <div class="col-md-4">
    <label>01:40pm-02:30pm</label>
        <?php
for ($i=0; $i < count($faculty); $i++) { 
	$sql= "select name FROM `$faculty[$i]` where DAY ='$day' and VI='' ;";
	$res=mysqli_query($conn,$sql);
	if ($res) {
		$row= mysqli_fetch_array($res);
		$input[$i]=$row['name'];
	}
	
}

?>
    <select class="browser-default custom-select mb-4" id="s6" disabled name="VI">
        <option value="NULL" active>FREE lecture</option>
   		<?php 
   			for ($i=0; $i < count($input); $i++) {
   				?>

			<option value="<?php echo $input[$i]; ?>"><?php if($input[$i]){echo $input[$i];} ?> </option>  
<?php	
}
?>     

    </select>
  </div>
</div>
    <!-- Send button -->
    <div class="row">
      <div class="col-md-4"></div>
    <div class="col-md-4">
          <button class="btn btn-info btn-block" type="reset">reset</button>
    </div>
      <div class="col-md-4">
          <button class="btn btn-info btn-block" type="submit">Send</button>     
      </div>

    </div>
</form>
<!-- Default form contact -->



</body>
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script >
    document.getElementById('box1').onchange = function() {
    document.getElementById('s1').enabled = !this.checked;
    document.getElementById('s2').disabled = !this.checked;
    document.getElementById('s3').disabled = !this.checked;
    document.getElementById('s1').disabled = !this.checked;
};
</script>
<script>
    document.getElementById('box2').onchange = function() {
    document.getElementById('s4').enabled = !this.checked;
    document.getElementById('s5').disabled = !this.checked;
    document.getElementById('s6').disabled = !this.checked;
    document.getElementById('s4').disabled = !this.checked;
};
</script>
</body>

</html>
