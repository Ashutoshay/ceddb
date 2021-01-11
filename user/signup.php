<?php session_start(); ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Ola Cab</title>
  <style>
    html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
  </style>
  </head>
  <body oncopy="return false" onpaste="return false" oncut="return false">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fa  fa-taxi" aria-hidden="true" style="font-size: 55px;color: #cddc39;"></i><span style="font-size: 30px;">CedCab</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto p-2" style="font-size: 22px;">
      <a class="nav-item nav-link active" href="../index.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">About us</a>
      <a class="nav-item nav-link" href="#">Contact us</a>
      <a class="nav-item nav-link" href="login.php">Login</a>
      <a class="nav-item nav-link" href="#">Sign Up</a>
      <a class="nav-item nav-link disabled" href="#">Ongoing</a>
    </div>
  </div>
</nav>
     <div class="container ">
     <div class="signup-form">
    <form action="signupcode.php" method="post">
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="row">
                <div class="col-md-4"><label for="email">Enter Email</label></div>
                <div class="col-md-6"><input type="email"  class="form-control" name="email" placeholder="Email" required="required"></div>
            </div>
				
				
			      	
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-md-4"><label for="email">Enter Number</label></div>
                <div class="col-md-6"><input type="number"  class="form-control" name="mobile_no" placeholder="Mobile Number" required="required"></div>
            </div>
        
        </div>
        <div class="form-group">
        <div class="row">
                <div class="col-md-4"><label for="email">Enter Name</label></div>
                <div class="col-md-6"><input type="text" class="form-control" name="name" placeholder=" Name" required="required"></div>
            </div>
        
        </div>
		<div class="form-group">
        <div class="row">
                <div class="col-md-4"><label for="email">Enter Password</label></div>
                <div class="col-md-6"><input type="password" class="form-control" name="password" placeholder="Password" required="required"></div>
            </div>
            
        </div>       
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
    </form>
	<div class="hint-text">Already have an account? <a href="login.php">Login here</a></div>
</div>
     </div>
     <footer class="mastfoot mt-0 py-2 text-center">
        <div class="inner" >
          <p>All copyrigths &copy; <a href="#" style="color:#cddc39;font-size: 20px;font-weight: 700; ">CedCab</a>,for query go here  <a href="#" style="color:#cddc39; font-size: 20px;font-weight: 700;">Contact us</a>.</p>
        </div>
      </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

   <!-- <script src="js/main.js"></script> -->
  </body>
</html>