<?php require_once 'actions/db_connect.php'; ?> 

<!DOCTYPE html>
<html>
<head>
   <title>Milan's travelmatic</title>

   <style type="text/css">
       /** {
        font-family: monospace;
        font-size: 12px;
        vertical-align: middle;
       }*/

       .clearfix {
        overflow: auto;
}
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
<nav class="nav">
  <a class="nav-link" href="index.php">Home</a>
  <a class="nav-link" href="gastro.php">Gastro</a>
  <a class="nav-link" href="places.php">Places</a>
  <a class="nav-link" href="events.php">Events</a>
  <a class="nav-link" href="admin.php">Admin</a>
</nav>
<div class="container-fluid">


    <!-- alumni section start -->

  <section class="row d-flex justify-content-around m-1">

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
               class='rounded img-fluid mx-auto d-block'>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center '>
            <p class='h5'>Place name</p>
            <p class='h6'>".$row['eventName']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center '>
            <p class='h5'>Place type</p>
            <p class='h6'>".$row['eventtype']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center '>
            <p class='h5'>Place type</p>
            <p class='h6'>".$row['eventDate']." ".$row['eventTime']."</p>
          </div>
        </div>
        <div class='row'>
          <div class='col text-dark text-monospace text-center '>
            <p class='h5'>Place type</p>
            <p class='h6'>".$row['price']." $</p>
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

