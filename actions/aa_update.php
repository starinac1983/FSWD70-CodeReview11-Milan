<?php 

require_once 'db_connect.php';

if ($_POST) {
   
   $newgastrotype = $_POST['gastroType'];
   $id = $_POST['id'];


  $sql = "UPDATE gastrotype SET gastroType = '$newgastrotype' WHERE gastrotypeId = {$id}";
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo  "<a href='../admin.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}
?>