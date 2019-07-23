<?php
ob_start();
session_start(); // start a new session or continues the previous
if( isset($_SESSION['user'])!="" ){
 header("Location: home.php" ); // redirects to home.php
}
include_once 'actions/db_connect.php';
$error = false;
if ( isset($_POST['btn-signup']) ) {
 
 // sanitize user input to prevent sql injection
 $name = trim($_POST['username']);

  //trim - strips whitespace (or other characters) from the beginning and end of a string
  $name = strip_tags($name);

  // strip_tags — strips HTML and PHP tags from a string

  $name = htmlspecialchars($name);
 // htmlspecialchars converts special characters to HTML entities
 $email = trim($_POST[ 'usermail']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['userpass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);

  // basic name validation
 if (empty($name)) {
  $error = true ;
  $nameError = "Please enter your full name.";
 } else if (strlen($name) < 3) {
  $error = true;
  $nameError = "Name must have at least 3 characters.";
 } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
  $error = true ;
  $nameError = "Name must contain alphabets and space.";
 }

 //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address." ;
 } else {
  // checks whether the email exists or not
  $query = "SELECT usermail FROM users WHERE usermail='$email'";
  $result = mysqli_query($connect, $query);
  echo(mysqli_error($connect));
  $count = mysqli_num_rows($result);
  if($count!=0){
   $error = true;
   $emailError = "Provided Email is already in use.";
  }
 }
 // password validation
  if (empty($pass)){
  $error = true;
  $passError = "Please enter password.";
 } else if(strlen($pass) < 6) {
  $error = true;
  $passError = "Password must have atleast 6 characters." ;
 }

 // password hashing for security
$password = hash('sha256' , $pass);


 // if there's no error, continue to signup
 if( !$error ) {
  
  $query = "INSERT INTO users(username,usermail,userpass) VALUES('$name','$email','$password')";
  $res = mysqli_query($connect, $query);
  
  if ($res) {
   $errTyp = "success";
   $errMSG = "Successfully registered, you may login now";
   unset($name);
    unset($email);
   unset($pass);
  } else  {
   $errTyp = "danger";
   $errMSG = "Something went wrong, try again later..." ;
  }
  
 }


}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Milan's travelmatic</title>
<link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">


		<!-- register section -->

	<section class="row alumni d-flex justify-content-around m-1">

		<div class="col-12 m-1 text-dark text-monospace text-center">
			<h1 class="letters">Registration</h1>
		</div>

		
		<div class="col-xl-3 p-xl-3 col-lg-3 p-lg-3 col-md-3 p-md-3 col-sm-3 p-sm-3 col-xs-12 p-xs-12 col-12 p-2 m-2 bg-white shadow-lg rounded-lg">
			<form method="post"  action="register.php">
				<div class="row mx-auto border-bottom mb-2">
					<div class="col m-2">
						<img src="http://www.gdgoenka-gurgaon.com/images/login_icon.jpg"
	            alt="avatar  white" class="rounded-circle img-fluid mx-auto d-block">
					</div>
				</div>
				<div class="row m-2">
					<div class="col text-dark text-monospace text-center m-1">
						<input type ="text" name="username" class ="form-control" placeholder ="Enter Name" maxlength ="50" value="" />
					</div>
				</div>
				<div class="row m-2">
					<div class="col text-dark text-monospace text-center m-1 mb-1">
						<input type="email" name="usermail" class="form-control" placeholder="Enter Your Email" maxlength="40" value=""/>
					</div>
				</div>
				<div class="row m-2">
					<div class="col text-dark text-monospace text-center m-1 mb-1">
						<input type="password" name="userpass" class="form-control" placeholder="Enter Password" maxlength="15" />
					</div>
				</div>
				<div class="row m-2">
					<div class="col text-dark text-monospace text-center m-1 mb-1" >
						<button class="btn btn-danger text-white btn-xs d-block" type = "submit" name="btn-signup">Sign up</button>
					</div>
				</div>
				<div class="row m-2">
					<div class="col text-dark text-monospace text-center m-1 mb-1" >
						<a href="index.php">Sign in here...</a>
					</div>
				</div>
			</form>
		</div>
		


	</section>

	
</div>	
</body>
</html>