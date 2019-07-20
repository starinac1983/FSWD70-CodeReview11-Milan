<?php 

require_once 'db_connect.php';

if ($_POST) {
   $newfkauthor = $_POST['fk_author'];
   $newgenre = $_POST['fk_genre'];
   $newtitle = $_POST['title'];
   $newmediadescription = $_POST['mediaDescription'];
   $newimage = $_POST['image'];
   $newisbn_ean = $_POST['isbn_ean'];
   $newpublishdate = $_POST['publishdate'];
   $newpublisher = $_POST['fk_publisher'];
   $newmediatype = $_POST['fk_mediatype'];
   $newstatus = $_POST['fk_status'];

  $sql = "INSERT INTO media (fk_author, fk_genre, title, mediaDescription, image, isbn_ean, publishdate, fk_publisher, fk_mediatype, fk_status) VALUES ('$newfkauthor','$newgenre', '$newtitle', '$newmediadescription', '$newimage', '$newisbn_ean', '$newpublishdate', '$newpublisher', '$newmediatype', '$newstatus')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>
