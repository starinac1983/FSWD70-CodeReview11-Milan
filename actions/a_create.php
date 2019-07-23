<?php 

require_once 'db_connect.php';

if ($_POST) {
   $newfklocation = $_POST['fk_location'];
   $newfkgastrotype = $_POST['fk_gastrotype'];
   $newgastroName = $_POST['gastroName'];
   $newdescription = $_POST['description'];
   $newpicture = $_POST['picture'];
   $newaddress = $_POST['address'];
   $newwebsite = $_POST['website'];
   $newphone = $_POST['phone'];
   $newgoogle = $_POST['googlemaps'];

  $sql = "INSERT INTO gastro (fk_location, fk_gastrotype, gastroName, description, picture, address, website, phone, googlemaps) VALUES ('$newfklocation','$newfkgastrotype', '$newgastroName', '$newdescription', '$newpicture', '$newaddress', '$newwebsite', '$newphone', $newgoogle)";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../a_create.php'><button type='button'>Back</button></a>";
        echo "<a href='../admin.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
