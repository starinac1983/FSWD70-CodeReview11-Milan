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
   <title >Edit Media</title>

   <style type= "text/css">
       * {
        font-family: monospace;
       }
       legend {
       text-align: center;
       }
       .md {
           width : 30%;
           margin: auto;
       }
       table {
        padding: 10px;
       }
   </style>
   <link rel="stylesheet"  href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"  crossorigin="anonymous">

</head>
<body>
<div class ="md">
<fieldset>
   
<legend>Edit</legend>
   <form action="actions/a_update.php"  method="post">
       <table  class="table table-striped" class="md" border="0" cellspacing="1" cellpadding= "1">
         
           <tr>
               <th>name</th>
               
               <td><input type="text"  name="gastroName" placeholder ="" value="<?php echo $data['gastroName'] ?>" /></td>
           </tr> 
           <tr>
               <th>picture</th>
               
               <td><input type="text"  name="picture" placeholder ="" value="<?php echo $data['picture'] ?>" /></td>
           </tr> 
           <tr>
               <th>description</th>
               
               <td><input type="text" name="description" placeholder ="insert new description" value="<?php echo $data['description'] ?>" /></td>
           </tr>  
            <tr>
               <th>phone</th>
               
               <td><input type="text" name="phone" placeholder ="" value="<?php echo $data['phone'] ?>" /></td>
           </tr>     
           <tr>
               <th>address</th>
               
               <td><input type="text" name="address"  placeholder="publishdate" value="<?php echo $data['address'] ?>" /></td>
           </tr>
           <tr>
              <input type= "hidden" name= "id" value= "<?php echo $data['gastroId']?>"/>
              <td colspan='0'><a href= "./admin.php"><button  class='btn btn-sm btn-primary' type="button" >Back</button ></a></td>
              <td colspan='0'><button class='btn btn-sm btn-warning' type= "submit">Save Changes</button ></td>
           </tr>

       </table>
   </form >

</fieldset>
</div>
</body>
</html>

<!-- <?php 
}
?> -->