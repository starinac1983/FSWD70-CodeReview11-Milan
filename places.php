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

      <style type="text/css">
       .clearfix {
        overflow: auto;
}
       
        img {
           width: 200px;
           height: 150px;
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
<nav class="nav">
  <a class="nav-link" href="home.php">Home</a>
  <a class="nav-link" href="gastro.php">Gastro</a>
  <a class="nav-link" href="places.php">Places</a>
  <a class="nav-link" href="events.php">Events</a>
  <?php if( $row['userrole'] == 'admin'){ ?>
  <a class="nav-link" href="admin.php">Admin</a>
  <?php } ?>  
  
  </div>
</nav>

<div class="container-fluid">


  <section class="row d-flex justify-content-around m-1">
<a class="nav-link" href= "logout.php?logout"><button class='btn btn-sm btn-warning mb' type="button" >Logout</button></a>
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
            <p class='h5'>Place name</p>
            <p class='h6'>".$row['placeName']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center '>
            <p class='h5'>Place type</p>
            <p class='h6'>".$row['placesType']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center ' >
            <p class='h5'>Place description</p>
            <p class='h6'>".$row['description']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center ' >
            <p class='h5'>Place location</p>
            <p class='h6'>".$row['location']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center ' >
            <p class='h5'>Place address</p>
            <p class='h6'>".$row['address']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center ' >
            <p class='h5'>Place website</p>
            <a href=".$row['website'].">".$row['website']."</a>
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

</body>
</html>

