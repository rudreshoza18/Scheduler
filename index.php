<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>REPLACEMENT PORTAL</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

<!--Modal: Login / Register Form-->
<div  id="modalLRForm" tabindex="-1" role="dialog">
  <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active"  data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>

        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">

            <!--Body-->
        <form action="login.php" method="post">
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput10" require="" class="form-control form-control-sm validate" name="email">
                <label data-error="wrong"  data-success="right" for="modalLRInput10">Your email</label>
              </div>

              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput11" require="" class="form-control form-control-sm validate " name="password">
                <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info" type="submit" value="submit">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
        </form>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>

          </div>
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">

            <!--Body-->
        <form method="post" action="signup.php">
            <div class="modal-body">
            	<div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="text" id="modalLRInput123" required="" class="form-control form-control-sm validate" name="id">
                <label for="modalLRInput123"> ID </label>
              </div>
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="modalLRInput12" required="" class="form-control form-control-sm validate" name="email">
                <label data-error="wrong" data-success="right" for="modalLRInput12"> Your email</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" id="modalLRInput13" required="" class="form-control form-control-sm validate" name="password">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="text" id="modalLRInput134" required="" class="form-control form-control-sm validate" name="name">
                <label for="modalLRInput13">Your Name</label>
              </div>

				 <div class="row container">
				  <div class="col-md-4">
				    <label>Department</label>
				    <select class="browser-default custom-select mb-4" name="dept">
				        <option value="" disabled>Choose option</option>
				        <option value="CS" selected>CS</option>
				        <option value="CIVIL">CIVIL</option>
				        <option value="EE">EE</option>
				        <option value="ECE">ECE</option>
				    </select>
				    </div>
				    <div class="col-md-2"></div>
				    <div class="col-md-4">
				    <label>Designation</label>
				    <select class="browser-default custom-select mb-4" name="desig">
				        <option value="" disabled>Choose option</option>
				        <option value="HOD" selected>HOD</option>
				        <option value="DY. HOD">DY. HOD</option>
				        <option value="Assistant Professer">Assistant Professer</option>
				        <option value="Lab Incharge">Lab Incharge</option>
				    </select>
				    </div>  
				</div>              

              <div class="text-center form-sm mt-2">
                <button class="btn btn-info" type="submit" value="submit">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>

            </div>
        </form>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
              <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login / Register Form-->

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
</body>

</html>
