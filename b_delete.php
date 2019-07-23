<?php 

require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM location WHERE locationId = {$id}" ;
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
 <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>
<div id="del">
<h3 class="h3 text-monospace">Do you really want to delete?</h3>
<form action ="actions/b_delete.php" method="post">
   <input type="hidden" name= "id" value="<?php echo $data['locationId'] ?>" />
   <button class='btn btn-sm btn-danger' type="submit">Yes, delete it!</button>
   <a href="./admin.php"><button class='btn btn-sm btn-primary' type="button">No, go back!</button></a>
</form>
</div>
</body>
</html>

<?php
}
?>