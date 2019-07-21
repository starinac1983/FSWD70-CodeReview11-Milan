<?php 

require_once 'db_connect.php';

if ($_POST) {
   $newgastroname = $_POST['gastroName'];
   $newpicture = $_POST['picture'];
   $newaddress = $_POST['address'];
   $newphone = $_POST['phone'];
   $newdescription = $_POST['description'];
   
   $id = $_POST['id'];

   $sql = "UPDATE gastro SET gastroName = '$newgastroname', picture = '$newpicture', address = '$newaddress', phone = '$newphone', description = '$newdescription', WHERE gastroId={$id}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}
?>