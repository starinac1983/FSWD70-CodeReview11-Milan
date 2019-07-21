<?php 

include_once 'actions/db_connect.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
						<input type="email" name="useremail" class="form-control" placeholder="Enter Your Email" maxlength="40" value=""/>
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