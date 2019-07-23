<?php
ob_start();
session_start();
require_once 'actions/db_connect.php';

// it will never let you open index(login) page if session is set
if ( isset($_SESSION['user'])!="" ) {
 header("Location: home.php");
 exit;
}
if ( isset($_SESSION['admin'])!="" ) {
 header("Location: home.php");
 exit;
}
$error = false;

if( isset($_POST['btn-login']) ) {

  // prevent sql injections/ clear user invalid inputs
 $email = trim($_POST['usermail']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['userpass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 // prevent sql injections / clear user invalid inputs 

 if(empty($email)){
  $error = true;
  $emailError = "Please enter your email address.";
 } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 }

 if (empty($pass)){
  $error = true;
  $passError = "Please enter your password." ;
 }

 // if there's no error, continue to login
 if (!$error) {
  
  $password = hash( 'sha256', $pass); // password hashing

  $res=mysqli_query($connect, "SELECT userId, username, userpass, userrole FROM users WHERE usermail='$email'" );
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res); // if uname/pass is correct it returns must be 1 row 

  #print_r($row);
  #echo $password." ";
  #echo $row['userpass'];
  
  if( $count == 1 && $row['userpass']==$password ) {
   if($row["userrole"] == "admin"){
    $_SESSION["admin"] = $row["userId"];
     header("Location: home.php");
     }else {
       $_SESSION['user'] = $row['userId'];
        header( "Location: home.php");
     }
  
  } else {
   $errMSG = "Incorrect Credentials, Try again..." ;
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
		<div class="col-12 m-1 text-dark text-monospace text-center">
			<h1 class="letters">Sign in</h1>
		</div>

		<!-- sign in section -->

	<section class="row alumni d-flex justify-content-around m-1">
		
		<div class="col-xl-3 p-xl-3 col-lg-3 p-lg-3 col-md-3 p-md-3 col-sm-3 p-sm-3 col-xs-12 p-xs-12 col-12 p-2 m-2 bg-white shadow-lg rounded-lg">
			<form method="post"  action="index.php" autocomplete= "off">
				<div class="row mx-auto border-bottom mb-2">
					<div class="col m-2">
						<img src="http://www.gdgoenka-gurgaon.com/images/login_icon.jpg"
	            alt="avatar  white" class="rounded-circle img-fluid mx-auto d-block">
					</div>
				</div>
				<!-- <div class="row m-2">
					<div class="col text-dark text-monospace text-center m-1">
						<input type ="text" name="username" class ="form-control" placeholder ="Enter Name" maxlength ="50" value="" />
					</div>
				</div> -->
				<div class="row m-2">
					<div class="col text-dark text-monospace text-center m-1 mb-1">
						<input type="email" name="usermail" class="form-control" placeholder="Enter Your Email" maxlength="40" value=""/>
					</div>
				</div>
				<div class="row m-2">
					<div class="col text-dark text-monospace text-center m-1 mb-1">
						<input type="password" name="userpass" class="form-control" placeholder="Your Password" maxlength="15" />
					</div>
				</div>
				<div class="row m-2">
					<div class="col text-dark text-monospace text-center m-1 mb-1" >
						<button id="submit-register" type="submit" name="btn-login" class="btn btn-danger text-white btn-xs d-block">Sign in</button>
					</div>
				</div>
				<div class="row m-2">
					<div class="col text-dark text-monospace text-center m-1 mb-1" >
						<a href="register.php">Sign up here...</a>
					</div>
				</div>
			</form>
		</div>
	</section>
</div>	
</body>
</html>
<?php ob_end_flush(); ?>