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
   <title >Milan's travelmatic</title>

   <style type= "text/css">
       /** {
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
       }*/
   </style>
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid">
    <div class="col-12 mt-5 text-dark text-monospace text-center">
      <h1 class="h1">Update gastro</h1>
    </div>

    <!-- sign in section -->

        <section class="row alumni d-flex justify-content-around m-1">
          
              <div class="col-xl-4 p-xl-4 col-lg-4 p-lg-4 col-md-4 p-md-4 col-sm-4 p-sm-4 col-xs-12 p-xs-12 col-12 p-2 m-2 bg-white shadow-lg rounded-lg">
                    <form method="post"  action="actions/a_update.php" autocomplete= "off">
                          <div class="form-group row">
                              <label for="gastroName" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
                              <div class="col-sm-10">
                                <input type="text" name="gastroName" class="form-control form-control-sm" id="gastroName" placeholder="" value="<?php echo $data['gastroName'] ?>" />
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="picture" class="col-sm-2 col-form-label col-form-label-sm">Picture</label>
                              <div class="col-sm-10">
                                <input type="text" name="picture" class="form-control form-control-sm" id="picture" placeholder="" value="<?php echo $data['picture'] ?>" />
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="description" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
                              <div class="col-sm-10">
                                <input type="text" name="description" class="form-control form-control-sm" id="description" placeholder="" value="<?php echo $data['description'] ?>" />
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="phone" class="col-sm-2 col-form-label col-form-label-sm">Phone</label>
                              <div class="col-sm-10">
                                <input type="text" name="phone" class="form-control form-control-sm" id="phone" placeholder="" value="<?php echo $data['phone'] ?>" />
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="address" class="col-sm-2 col-form-label col-form-label-sm">Address</label>
                              <div class="col-sm-10">
                                <input type="text" name="address" class="form-control form-control-sm" id="address" placeholder="" value="<?php echo $data['address'] ?>" />
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="website" class="col-sm-2 col-form-label col-form-label-sm">Website</label>
                              <div class="col-sm-10">
                                <input type="text" name="website" class="form-control form-control-sm" id="website" placeholder="" value="<?php echo $data['website'] ?>" />
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="website" class="col-sm-2 col-form-label col-form-label-sm">Google maps</label>
                              <div class="col-sm-10">
                                <input type="text" name="googlemaps" class="form-control form-control-sm" id="googlemaps" placeholder="" value="<?php echo $data['googlemaps'] ?>"/>
                              </div>
                          </div>
                          <div class="row m-2">
                                <div class="col text-dark text-monospace text-center mb-1" >
                                  <input type= "hidden" name= "id" value= "<?php echo $data['gastroId']?>"/>
                                  <a href= "./admin.php"><button  class='btn btn-sm btn-primary' type="button" >Back</button ></a>
                                    <button class='btn btn-sm btn-warning' type= "submit">Save Changes</button>
                                </div>
                          </div> 
                  </form>
              </div>
              
        </section>

</div>  

</body>
</html>

<!-- <?php 
}
?> -->