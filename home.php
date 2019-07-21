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
       /** {
        font-family: monospace;
        font-size: 12px;
        vertical-align: middle;
       }*/

       .clearfix {
        overflow: auto;
}

        img {
          width: 200px;
           height: 150px;
          display: block;
  margin-left: auto;
  margin-right: auto;
          /*vertical-align: middle;
          margin: 0;*/
          width: 200px;
           height: 150px;
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

<nav class="nav">
  <a class="nav-link" href="home.php">Home</a>
  <a class="nav-link" href="gastro.php">Gastro</a>
  <a class="nav-link" href="places.php">Places</a>
  <a class="nav-link" href="events.php">Events</a>
  <!-- <a class="nav-link" href="admin.php">Admin</a> -->
  <?php if( $row['userrole'] == 'admin'){ ?>
  <a class="nav-link" href="admin.php">Admin</a>
  <?php } ?>  
  <a class="nav-link" href= "logout.php?logout"><button class='btn btn-sm btn-warning mb' type="button" >Logout</button></a>
  </div>
</nav>

<div class="container-fluid">

<!-- start gastro section -->
    
    <section class="row d-flex justify-content-around m-1">

  <div class="col-12 m-4 text-dark text-center">
      <div class="h2"><em>Places</em></div>
  </div>

<?php
           $sql = "SELECT gastro.gastroId, gastrotype.gastroType, gastro.gastroName, gastro.description, gastro.picture, location.location, gastro.address, gastro.phone, gastro.website 
FROM gastro 
INNER JOIN location ON gastro.FK_location = location.locationId 
INNER JOIN gastrotype ON gastro.FK_gastrotype = gastrotype.gastroTypeId";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<div class='afe text-justify col-xl-3 p-xl-3 col-lg-3 p-lg-3 col-md-3 p-md-3 col-sm-3 p-sm-3 col-xs-12 p-xs-12 col-12 bg-white shadow-lg rounded-lg m-1'>
        <div class='row mx-auto border-bottom mb-2'>
          <div class='col'>
            <img src='".$row['picture']."'
               class='rounded mx-auto d-block mb-2'>
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
      <div class="h2"><em>Places</em></div>
  </div>

<?php
           $sql = "SELECT places.placeId, placestype.placesType , places.placeName, places.description, places.picture, location.location, places.address, places.website
FROM places 
INNER JOIN location ON places.FK_location = location.locationId 
INNER JOIN placestype ON places.FK_placestype = placestype.placesTypeId";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<div class='afe text-justify col-xl-3 p-xl-3 col-lg-3 p-lg-3 col-md-3 p-md-3 col-sm-3 p-sm-3 col-xs-12 p-xs-12 col-12 bg-white shadow-lg rounded-lg m-1'>
        <div class='row mx-auto border-bottom mb-2'>
          <div class='col'>
            <img src='".$row['picture']."'
               class='rounded mx-auto d-block mb-2'>
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
      <div class="h2"><em>Events</em></div>
  </div>

<?php
           $sql = "SELECT evento.eventId, eventtype.eventtype, evento.eventName, evento.description, evento.picture, location.location, evento.address, evento.website, evento.eventDate, evento.eventTime, evento.price
FROM evento 
INNER JOIN location ON evento.FK_location = location.locationId 
INNER JOIN eventtype ON evento.FK_eventtype = eventtype.eventtypeId";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<div class='afe text-justify col-xl-3 p-xl-3 col-lg-3 p-lg-3 col-md-3 p-md-3 col-sm-3 p-sm-3 col-xs-12 p-xs-12 col-12 bg-white shadow-lg rounded-lg m-1'>
        <div class='row mx-auto border-bottom mb-2'>
          <div class='col'>
            <img src='".$row['picture']."'
               class='rounded mx-auto d-block mb-2'>
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script> 

</body>
</html>
<?php ob_end_flush(); ?>
