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
<title>Login & Registration System</title>

<link rel="stylesheet" href ="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"  crossorigin="anonymous">
</head>
<body>
   <form method="post"  action="index.php" autocomplete= "off">
  
    
            <h2>Sign In.</h2 >
            <hr />
            
            <?php
  if ( isset($errMSG) ) {
echo  $errMSG; ?>
              
               <?php
  }
  ?>
           
          
            
            <input  type="email" name="usermail"  class="form-control" placeholder= "Your Email" value=""  maxlength="40" />
        
            <span class="text-danger"></span >
  
          
            <input  type="password" name="userpass"  class="form-control" placeholder ="Your Password" maxlength="15"  />
        
           <span  class="text-danger"></span>
            <hr />
            <button id="submit-register" type="submit" name= "btn-login">Sign In</button>
          
          
            <hr />
  
            <a  href="register.php">Sign Up Here...</a>
      
          
   </form>
   </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</body>
</html>
<?php ob_end_flush(); ?>