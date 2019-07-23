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
           width: 300px;
           height: 250px;
           display: block;
           margin-left: auto;
           margin-right: auto;
                 }
   </style>
   <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

  <a class="nav-link" href= "logout.php?logout"><button class='btn btn-sm btn-warning mb' type="button" >Logout</button></a>
</nav>

<div class="container-fluid">

 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <section class="row d-flex justify-content-around m-1">

<?php
           $sql = "SELECT evento.eventId, eventtype.eventtype, evento.eventName, evento.description, evento.picture, location.location, evento.address, evento.website, evento.eventDate, evento.eventTime, evento.price, evento.googlemaps
FROM evento 
INNER JOIN location ON evento.FK_location = location.locationId 
INNER JOIN eventtype ON evento.FK_eventtype = eventtype.eventtypeId";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<div class='afe text-justify col-xl-5 p-xl-5 col-lg-5 p-lg-5 col-md-5 p-md-5 col-sm-5 p-sm-5 col-xs-12 p-xs-12 col-12 bg-white shadow-lg rounded-lg m-1'>
        <div class='row mx-auto border-bottom mb-2'>
          <div class='col'>
            <img src='".$row['picture']."'
               class='rounded mx-auto d-block mb-2 mt-2'>
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
        <div class='row'>
          <div class='col text-dark text-monospace text-center ' >
            <p class='h5'>Place on map</p>
            <p class='h6'>".$row['googlemaps']."</p>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap"
   async defer>
     
   </script>
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
</body>
</html>

<?php ob_end_flush(); ?>