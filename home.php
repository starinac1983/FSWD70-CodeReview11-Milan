<?php require_once 'actions/db_connect.php'; ?> 
<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['admin'])) {
 header( "Location: index.php");
 }

 if(isset($_SESSION["admin"])){
  $var = $_SESSION["admin"];
 } else {
  $var = $_SESSION["user"];
 }
 
$row=$connect->query("SELECT * FROM users WHERE userId=".$var);
$row = $row->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
   <title>Milan's travelmatic</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

   <style type="text/css">

        #myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 10px; /* Place the button at the bottom of the page */
  right: 10px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: red; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 18px; /* Increase font size */
}

       .clearfix {
        overflow: auto;
}
       
        img {
           width: 250px;
           height: 200px;
           display: block;
           margin-left: auto;
           margin-right: auto;
                 }

   </style>
   <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>

<!-- navbar -->
<div class="container-fluid bg-primary text-white">
  <marquee><em>Welcome to Milan's travel-o-matic<em></marquee>
</div>
<nav class="nav bg-primary">
  <a class="nav-link text-white" href="home.php">Home</a>
  <a class="nav-link text-white" href="gastro.php">Gastro</a>
  <a class="nav-link text-white" href="places.php">Places</a>
  <a class="nav-link text-white" href="events.php">Events</a>
  <!-- <a class="nav-link" href="admin.php">Admin</a> -->
  <?php if( $row['userrole'] == 'admin'){ ?>
  <a class="nav-link text-white" href="admin.php">Admin</a>
  <?php } ?>  
  <a class="nav-link" href= "logout.php?logout"><button class='btn btn-sm btn-warning mb' type="button" >Logout</button></a>
  </div>
</nav>

<div class="container-fluid">
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<!-- start gastro section -->
    
    <section class="row d-flex justify-content-around m-1">

  <div class="col-12 m-4 text-dark text-center">
      <div class="h2 text-monospace"><em><strong> Gastro </strong></em></div>
  </div>

<?php
           $sql = "SELECT gastro.gastroId, gastrotype.gastroType, gastro.gastroName, gastro.description, gastro.picture, location.location, gastro.address, gastro.phone, gastro.website 
FROM gastro 
INNER JOIN location ON gastro.FK_location = location.locationId 
INNER JOIN gastrotype ON gastro.FK_gastrotype = gastrotype.gastroTypeId";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<div class='afe text-justify col-xl-3 p-xl-3 col-lg-3 p-lg-3 col-md-12 p-md-12 col-sm-12 p-sm-3 col-xs-12 p-xs-12 col-12 bg-white shadow-lg rounded-lg m-1'>
        <div class='row mx-auto border-bottom mb-2'>
          <div class='col'>
            <img src='".$row['picture']."'
               class='rounded mx-auto d-block  mb-2 mt-2'>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center '>
            <p class='h6'>Place</p>
            <p class='h5'>".$row['gastroName']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center '>
            <p class='h6'>type</p>
            <p class='h5'>".$row['gastroType']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center ' >
            <p class='h6'>location</p>
            <p class='h5'>".$row['location']."</p>
          </div>
        </div>
      </div>" ;
               }
           } else  {
               echo  "<div><span>No Data Avaliable</span></div>";
           }
            ?>
     
  </section>

<!-- start places section -->

  <section class="row d-flex justify-content-around m-1">

  <div class="col-12 m-4 text-dark text-center">
      <div class="h2 text-monospace"><em><strong>Places</strong></em></div>
  </div>

<?php
           $sql = "SELECT places.placeId, placestype.placesType , places.placeName, places.description, places.picture, location.location, places.address, places.website
FROM places 
INNER JOIN location ON places.FK_location = location.locationId 
INNER JOIN placestype ON places.FK_placestype = placestype.placesTypeId";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<div class='afe text-justify col-xl-3 p-xl-3 col-lg-3 p-lg-3 col-md-12 p-md-12 col-sm-12 p-sm-12 col-xs-12 p-xs-12 col-12 bg-white shadow-lg rounded-lg m-1'>
        <div class='row mx-auto border-bottom mb-2'>
          <div class='col'>
            <img src='".$row['picture']."'
               class='rounded mx-auto d-block  mb-2 mt-2'>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center '>
            <p class='h6'>Place</p>
            <p class='h5'>".$row['placeName']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center '>
            <p class='h6'>type</p>
            <p class='h5'>".$row['placesType']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center ' >
            <p class='h6'>location</p>
            <p class='h5'>".$row['location']."</p>
          </div>
        </div>
      </div>" ;
               }
           } else  {
               echo  "<div><span>No Data Avaliable</span></div>";
           }
            ?>
     
  </section>

  <!-- start events section -->

  <section class="row d-flex justify-content-around m-1">

  <div class="col-12 m-4 text-dark text-center">
      <div class="h2 text-monospace"><em><strong>Events</strong></em></div>
  </div>

<?php
           $sql = "SELECT evento.eventId, eventtype.eventtype, evento.eventName, evento.description, evento.picture, location.location, evento.address, evento.website, evento.eventDate, evento.eventTime, evento.price
FROM evento 
INNER JOIN location ON evento.FK_location = location.locationId 
INNER JOIN eventtype ON evento.FK_eventtype = eventtype.eventtypeId";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<div class='afe text-justify col-xl-3 p-xl-3 col-lg-3 p-lg-3 col-md-12 p-md-12 col-sm-12 p-sm-12 col-xs-12 p-xs-12 col-12 bg-white shadow-lg rounded-lg m-1'>
        <div class='row mx-auto border-bottom mb-2'>
          <div class='col'>
            <img src='".$row['picture']."'
               class='rounded mx-auto d-block  mb-2 mt-2'>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center '>
            <p class='h6'>Place</p>
            <p class='h5'>".$row['eventName']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center '>
            <p class='h6'>type</p>
            <p class='h5'>".$row['eventtype']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center ' >
            <p class='h6'>location</p>
            <p class='h5'>".$row['location']."</p>
          </div>
        </div>
      </div>" ;
               }
           } else  {
               echo  "<div><span>No Data Avaliable</span></div>";
           }
            ?>
     
  </section>
</div> 
<script>
window.onscroll = function() {scrollFunction()};

 scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script> 

</body>
</html>
<?php ob_end_flush(); ?>
