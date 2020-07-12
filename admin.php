
<!DOCTYPE html>

<?php 
$db_host = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "time_table";
$db = new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_username,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
 ?>


<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Replacement Portal</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

  <link rel="icon" href="th.jpg">

	<style>
	* {box-sizing: border-box}
	body {font-family: "Lato", sans-serif;}

	/* Style the tab */
	.tab {
	    float: left;
	    border: 1px solid #ccc;
	    background-color: #f1f1f1;
	    width: 20%;
	    height: 300px;
	}

	/* Style the buttons inside the tab */
	.tab button {
	    display: block;
	    background-color: inherit;
	    color: black;
	    padding: 22px 16px;
	    width: 100%;
	    border: none;
	    outline: none;
	    text-align: left;
	    cursor: pointer;
	    transition: 0.3s;
	    font-size: 17px;
	}

	/* Change background color of buttons on hover */
	.tab button:hover {
	    background-color: #ddd;
	}

	/* Create an active/current "tab button" class */
	.tab button.active {
	    background-color: #ccc;
	}

	/* Style the tab content */
	.tabcontent {
	    float: left;
	    padding: 0px 12px;
	   
	    width: 70%;
	    border-left: none;
	    height: 300px;
	}
	</style>

</head>

<body class="text-center">

  <!-- Start your project here-->

<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark grey">
        <a class="navbar-brand" href="#"><strong>Replacement Portal</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto" style="font-size:18px;">
                <li class="nav-item">
                    <a class="nav-link" href="developer.html">Developer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tleaves.php">Today's Leave</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="form.php">Leave form</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="signout.php">LOG OUT</a>
                </li>
            </ul>
            </ul>
        </div>
    </nav>

</header>


<br><br><br><br>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'DM')" id="defaultOpen">Mr. Deepak moud</button>
  <button class="tablinks" onclick="openCity(event, 'AD')">Mr. Abhishek Dadhich</button>
  <button class="tablinks" onclick="openCity(event, 'AM')">Dr. Ajay Maurya</button>
  <button class="tablinks" onclick="openCity(event, 'AS')">Mr. Ajay Saini</button>
  <button class="tablinks" onclick="openCity(event, 'AR')">Ms. Alka Rani</button>
  <button class="tablinks" onclick="openCity(event, 'AJ')">Ms. Archika Jain</button>
  <button class="tablinks" onclick="openCity(event, 'KN')">Mr. Krutibash Nayak</button>
  <button class="tablinks" onclick="openCity(event, 'MT')">Mr. Madhusudan Tinker</button>
  <button class="tablinks" onclick="openCity(event, 'MG')">Dr. Megha Gupta</button>
  <button class="tablinks" onclick="openCity(event, 'PG')">Dr. Praveen Gupta</button>
  <button class="tablinks" onclick="openCity(event, 'PM')">Dr. Puneet Mathur</button>
  <button class="tablinks" onclick="openCity(event, 'RJ')">Dr. Rekha Jain</button>
  <button class="tablinks" onclick="openCity(event, 'ST')">Mr. Sandeep Tuli</button>
  <button class="tablinks" onclick="openCity(event, 'SB')">Ms. Shruti Bijawat</button>
  <button class="tablinks" onclick="openCity(event, 'SS')">Ms. Swati Srivastav</button>
  
   
</div>
<div id="DM" class="tabcontent">
	<h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Mr. Deepak moud </h4>
  <strong>SESSION : EVEN SEMESTER 2018-19</strong>


<table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `dm`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>	

<p align="left">
  4CS4-05 Database Management System <br> 
6CSIBM  IBM Courses <br>
8CSPR Major Project <br>

</p>
</div>

<div id="AM" class="tabcontent">
	<h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Dr. Ajay Maurya</h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
  
  <table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `am`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>  
<p align="left">
4CS4-25 Java Programming Lab   <br> 
6CS4  Computer Graphics & Multimedia Techniques<br>   
8CS1  Mobile Computing    <br>
8CSPR Major Project   <br>

</p>
</div>

<div id="AS" class="tabcontent">
	<h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Mr. Ajay Saini</h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
<table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `as`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>  
<p align="left">
  4CS3-04 Microprocessor & Interfaces <br>
6CSIBM  IBM Courses <br>
8CS2  Digital Image Processing <br> 
8CS6  FPGA Lab  <br>
8CS7  Digital Image Processing Lab  <br>
8CSPR Major Project <br>


</p>
</div>

<div id="KN" class="tabcontent">
	<h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Mr. Kurtibash Nayak </h4>
  <strong>SESSION : ODD SEMESTER 2018-19 </strong>
 
 	 <table class="table table-bordered container text-center">
    <thead>
        <tr>
          <th scope="col">Day/Timr</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <<?php 
        $query = $db->query('SELECT * FROM `nk`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
<p align="left">
  4CS4-22 Database Management System Lab  <br>
4CS4-24 Linux Shell Programming Lab <br>
4CSNS Non Syllabus project  <br>
6CS6.2  Artificial Intelligence <br>
6CSIBM  IBM Courses <br>

</p>
	
</div>


<div id="AR" class="tabcontent">
	<h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Mrs Alka Rani </h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
 	 <table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `ar`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>  
	<p align="left">
   4CS4-07  Data Communication and Computer Networks    <br>
6CS5  Embedded System Design    <br>
6CS10 Embedded System Design Lab    <br>
 
  </p>
</div>

<div id="MT" class="tabcontent">
  <h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Mr. Madhusudan Tinker </h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
 	 <table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `mg`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>

<p align="left">
4CS4-06 Theory of Computation <br> 
4CS4-23 Network Programming Lab<br> 
4CS4-25 Java Lab  <br>
6CS6.2  Artificial Intelligence <br>
6CS7  Java Programming Lab  <br>

</p>
</div>

<div id="SS" class="tabcontent">
	 <h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Ms. Swati Srivastav </h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
  <table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `ss`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
 	 
<p align="left">
  
  4CS4-23 Network Programming Lab <br>
6CS2  Design And Analysis Of Algorithms<br> 
6CS6.2  Artificial Intelligence <br>
6CS9  Design And Analysis Of Algorithms<br> 

</p>

</div>

<div id="AJ" class="tabcontent text-center" >
  <h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Ms. Archika Jain</h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
  <table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `aj`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
<p align="left">
  4CS4-06 Theory of Computation <br>
4CS4-22 Database Management System Lab<br>  
4CSNS Non Syllabus project  <br>
8CSSM Seminar <br>

</p>
</div>

<div id="PM" class="tabcontent">
  
  <h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Dr.Puneet Mathur </h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
 	<table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `pm`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
   <p align="left">
     6CS2 Design And Analysis Of Algorithms <br>
8CSPR Major Project <br>

   </p>
</div>

<div id="AD" class="tabcontent">
  <h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Mr. Abhishek Dadhich </h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
 	 <table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `ad`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
    <br>
    <p align="left">
      4CS3-04 Microprocessor & Interfaces   <br>
4CS4-07 Data Communication and Computer Networks<br>    
4CS4-21 Microprocessor & Interfaces Lab   <br>

    </p>
</div>

<div id="MG" class="tabcontent">
  <h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : MISS. MEGHA GUPTA </h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
 <table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `mg`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
   
  <br>
  <p align="left">
    6CS3  Theory Of Computation   <br>
6CSIBM  IBM Courses   <br>
8CS5  Unix Network Programming & Simulation Lab   <br>
8CSSM Seminar   <br>

  </p>
</div>


<div id="PG" class="tabcontent">
  <h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Mr. Prveen Gupta</h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
   <table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `pg`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
    <br>
<p align="left">
  6CS7  Java Lab  <br>
8CS1  Mobile Computing<br>  
8CS4.2  Real Time Systems <br>
8CSPR Major Project <br>

</p>
</div>

<div id="RJ" class="tabcontent text-center" >
  <h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Ms. Rekha Jain</h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 <table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `rj`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
<br>
]<p align="left">
  6CS7  Java Programming Lab  <br>
8CS3  Distributed Systems <br>
8CS4.2  Real Time Systems <br>
8CSPR Major Project <br>

</p>
</div>
<div id="ST" class="tabcontent text-center" >
  <h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Mr. Sandeep Tuli</h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
 <table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `st`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
<br>
</table>
<p align="left">
  4CS4-05 Database Management System    <br>
4CS4-22 Database Management System Lab    <br>
4CSNS Non Syllabus project    <br>
6CS4  Computer Graphics & Multimedia Techniques   <br>
6CSIBM  IBM Courses   <br>

</p>

</div>
<div id="SB" class="tabcontent text-center" >
  <h3>Poornima Institute Of Engineering And Technology</h3>
  <h3>Department Of Computer Engineering</h3>
  <h4>Faculty Name : Ms. Shurti Bijawat</h4>
  <strong>SESSION : ODD SEMESTER 2018-19</strong>
 
<table class="table table-bordered container text-center">
<thead>
        <tr>
          <th scope="col">Day/Time</th>
          <th scope="col">08:00-9:00</th>
          <th scope="col">9:00-10:00</th>
          <th scope="col">10:00-11:00</th>
          <th scope="col">11:00-11:40</th>
          <th scope="col">11:40-12:40</th>
          <th scope="col">12:40-01:40</th>
          <th scope="col">01:40-2:30</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        $query = $db->query('SELECT * FROM `sb`');
         ?>

<?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['DAY'] ."</td>";
    echo "<td>" . $row['I'] . "</td>";
    echo "<td>" . $row['II'] . "</td>";
    echo "<td>" . $row['III'] . "</td>";
    echo "<td>" . " " ."</td>";
    echo "<td>" . $row['IV'] ."</td>";
    echo "<td>" . $row['V'] . "</td>";
    echo "<td>" . $row['VI'] . "</td>";

    echo "</tr>";
}
?>
</tbody>
</table>
<br><p align="left">
6CS1  Computer Networks <br>
8CS2  Digital Image Processing<br>  
8CS7  Digital Image Processing Lab<br>  
8CSPR Major Project <br>
8CSSM Seminar <br>


</p>


</div>

  <!-- /Start your project here-->

  
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>

</html>
