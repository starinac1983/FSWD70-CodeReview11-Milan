<?php 

require_once 'db_connect.php';

if ($_POST) {
   $newgastrotype = $_POST['gastroType'];
   
  $sql = "INSERT INTO gastrotype (gastroType) VALUES ('$newgastrotype')";
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
