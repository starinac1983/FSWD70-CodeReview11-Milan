<?php 

require_once 'db_connect.php';

if ($_POST) {
   
   $newlocation = $_POST['location'];
   $id = $_POST['id'];


  $sql = "UPDATE location SET location = '$newlocation' WHERE locationId = {$id}";
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo  "<a href='../admin.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}
?>