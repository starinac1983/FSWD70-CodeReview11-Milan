<?php 

require_once 'db_connect.php';

if ($_POST) {
   $newtitle = $_POST['title'];
   $newpublishdate = $_POST['publishDate'];
   $newisbn = $_POST['isbn_ean'];
   $newdescription = $_POST['mediaDescription'];
   $newimage = $_POST['image'];
   
   $id = $_POST['id'];

   $sql = "UPDATE media SET title = '$newtitle', isbn_ean = '$newisbn' , image = '$newimage',  mediaDescription = '$newdescription' , publishDate = '$newpublishdate' WHERE mediaID = {$id}" ;
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
