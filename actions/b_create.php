<?php 

require_once 'db_connect.php';

if ($_POST) {
   $newlocation = $_POST['location'];
   
  $sql = "INSERT INTO location (location) VALUES ('$newlocation')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../b_create.php'><button type='button'>Back</button></a>";
        echo "<a href='../admin.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
