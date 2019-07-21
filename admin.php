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
        * {
        font-family: monospace;
        font-size: 12px;
        vertical-align: middle;
       }

       .md {
           width : 90%;
           margin: auto;
       }
        
        /*table {
          vertical-align: middle;
           width: 100%;
                 }*/
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
  <a class="nav-link" href="index.php">Home</a>
  <a class="nav-link" href="gastro.php">Gastro</a>
  <a class="nav-link" href="places.php">Places</a>
  <a class="nav-link" href="events.php">Events</a>
  <a class="nav-link" href="admin.php">Admin</a>
</nav>

<div class="container-fluid">

<a class="nav-link" href= "logout.php?logout"><button class='btn btn-sm btn-warning mb' type="button" >Logout</button></a>

  <section class="row d-flex justify-content-around m-1">

  <div class="col-12 m-4 text-dark text-center">
      <div class="h2"><em>Gastro</em></div>
  </div>
<table class="table table-striped table-sm mt-2 col-4">
       <thead class="thead-dark text-monospace">
           <tr>
               <th class="text-monospace" scope="col">ID</th>
               <th class="text-monospace" scope="col">Type</th>
               <th class="text-monospace" scope="col">Name</th>
               <th class="text-monospace" scope="col">Location</th>
               <th class="text-monospace" scope="col">Option</th>
               <th class="text-monospace" scope="col">Option</th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT gastro.gastroId, gastrotype.gastroType, gastro.gastroName, gastro.description, gastro.picture, location.location, gastro.address, gastro.phone, gastro.website 
FROM gastro 
INNER JOIN location ON gastro.FK_location = location.locationId 
INNER JOIN gastrotype ON gastro.FK_gastrotype = gastrotype.gastroTypeId";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr class='text-monospace' scope='row'>
                       <td>".$row['gastroId']." </td>
                       <td>".$row['gastroType']." </td>
                       <td>".$row['gastroName']." </td>
                       <td>".$row['location']."</td>
                       <td>

                          <a href='update.php?id=" .$row['gastroId']."'>
                           <button class='btn btn-sm btn-warning'type='button'>Edit</button></a>
                        </td>
                        <td>
                           <a href='delete.php?id=" .$row['gastroId']."'>
                           <button class='btn btn-sm btn-danger'type='button'>Delete</button></a>";
                         }
                       echo "</td>
                   </tr>" ;
               }
            else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
       </tbody>
   </table>
</section>

<!-- start places section -->

  <section class="row d-flex justify-content-around m-1">

  <div class="col-12 m-4 text-dark text-center">
      <div class="h2"><em>places</em></div>
  </div>
  <table class="table table-striped table-sm mt-2 col-4">
       <thead class="thead-dark text-monospace">
           <tr>
               <th class="text-monospace" scope="col-2">ID</th>
               <th class="text-monospace" scope="col">Type</th>
               <th class="text-monospace" scope="col">Name</th>
               <th class="text-monospace" scope="col">Location</th>
               <th class="text-monospace" scope="col">Option</th>
               <th class="text-monospace" scope="col">Option</th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT places.placeId, placestype.placesType , places.placeName, places.description, places.picture, location.location, places.address, places.website
FROM places 
INNER JOIN location ON places.FK_location = location.locationId 
INNER JOIN placestype ON places.FK_placestype = placestype.placesTypeId";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr class='text-monospace' scope='row'>
                       <td>".$row['placeId']." </td>
                       <td>".$row['placesType']." </td>
                       <td>".$row['placeName']." </td>
                       <td>".$row['location']."</td>
                       <td>

                          <a href='update.php?id=" .$row['placeId']."'>
                           <button class='btn btn-sm btn-warning'type='button'>Edit</button></a>
                        </td>
                        <td>
                           <a href='actions/delete.php?id=" .$row['placeId']."'>
                           <button class='btn btn-sm btn-danger'type='button'>Delete</button></a>";
                         }
                       echo "</td>
                   </tr>" ;
               }
            else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
       </tbody>
   </table>
     
  </section>

  <!-- start events section -->

  <section class="row d-flex justify-content-around m-1">

  <div class="col-12 m-4 text-dark text-center">
      <div class="h2"><em>events</em></div>
  </div>
  <table class="table table-striped table-sm mt-2 col-4">
       <thead class="thead-dark text-monospace">
           <tr>
               <th class="text-monospace" scope="col-2">ID</th>
               <th class="text-monospace" scope="col">Type</th>
               <th class="text-monospace" scope="col">Name</th>
               <th class="text-monospace" scope="col">Location</th>
               <th class="text-monospace" scope="col">Option</th>
               <th class="text-monospace" scope="col">Option</th>
           </tr>
       </thead>
       <tbody>

            <?php
           $sql = "SELECT evento.eventId, eventtype.eventtype, evento.eventName, evento.description, evento.picture, location.location, evento.address, evento.website, evento.eventDate, evento.eventTime, evento.price
FROM evento 
INNER JOIN location ON evento.FK_location = location.locationId 
INNER JOIN eventtype ON evento.FK_eventtype = eventtype.eventtypeId";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr class='text-monospace' scope='row'>
                       <td>".$row['eventId']." </td>
                       <td>".$row['eventtype']." </td>
                       <td>".$row['eventName']." </td>
                       <td>".$row['location']."</td>
                       <td>

                          <a href='admin.php?id=" .$row['eventId']."'>
                           <button class='btn btn-sm btn-warning'type='button'>Edit</button></a>
                        </td>
                        <td>
                           <a href='actions/delete.php?id=" .$row['eventId']."'>
                           <button class='btn btn-sm btn-danger'type='button'>Delete</button></a>";
                         }
                       echo "</td>
                   </tr>" ;
               }
            else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
       </tbody>
   </table>
 
  </section>
</div>  

</body>
</html>