<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM gastro WHERE gastroId = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete Media</title>
   <style type="text/css">
       * {
        font-family: monospace;
       }

       .md {
           width : 50%;
           margin: auto;
           text-align: center;
           align-items: center;
       }
		#del {
			
           width: 50%;
           margin: auto;
       }

   </style>
</head>
<link rel="stylesheet"  href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"  crossorigin="anonymous">
<body>
<div id="del">
<h3 class="h3 text-monospace">Do you really want to delete?</h3>
<form action ="actions/a_delete.php" method="post">
   <input type="hidden" name= "id" value="<?php echo $data['gastroId'] ?>" />
   <button class='btn btn-sm btn-danger' type="submit">Yes, delete it!</button>
   <a href="./admin.php"><button class='btn btn-sm btn-primary' type="button">No, go back!</button></a>
</form>
</div>
</body>
</html>

<?php
}
?>