<!DOCTYPE html>
<html>
<head>
   <title>Milan's travelmatic</title>

   <style type= "text/css">
      
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
        <h1 class="h1">Add new gastro</h1>
      </div>

    <!-- sign in section -->

        <section class="row d-flex justify-content-around m-1">
          
              <div class="col-xl-4 p-xl-4 col-lg-4 p-lg-4 col-md-4 p-md-4 col-sm-4 p-sm-4 col-xs-12 p-xs-12 col-12 p-2 m-2 bg-white shadow-lg rounded-lg">
                    <form method="post"  action="actions/a_create.php" autocomplete= "off">
                          <div class="form-group row">
                              <label for="gastroName" class="col-sm-2 col-form-label col-form-label-sm">Name</label>
                              <div class="col-sm-10">
                                <input type="text" name="gastroName" class="form-control form-control-sm" id="gastroName" placeholder="insert gastro name"/>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="fk_gastrotype" class="col-sm-2 col-form-label col-form-label-sm">Gastro type</label>
                              <div class="col-sm-10">
                                <input list="type" id="fk_gastrotype" name="fk_gastrotype">
                                  <datalist id="type">
                                    <option value="1">restaurant</option>
                                    <option value="2">coffee house</option>
                                    <option value="3">fast food</option>
                                    <option value="4">beer house</option>
                                  </datalist>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="picture" class="col-sm-2 col-form-label col-form-label-sm">Picture</label>
                              <div class="col-sm-10">
                                <input type="text" name="picture" class="form-control form-control-sm" id="picture" placeholder="insert url" />
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="description" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
                              <div class="col-sm-10">
                                <input type="text" name="description" class="form-control form-control-sm" id="description" placeholder="insert description" />
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="phone" class="col-sm-2 col-form-label col-form-label-sm">Phone</label>
                              <div class="col-sm-10">
                                <input type="text" name="phone" class="form-control form-control-sm" id="phone" placeholder="insert phone"/>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="fk_location" class="col-sm-2 col-form-label col-form-label-sm">Location</label>
                              <div class="col-sm-10">
                                <input list="loctype" id="fk_location" name="fk_location">
                                  <datalist id="loctype">
                                    <option value="1">Belgrade</option>
                                    <option value="2">Vienna</option>
                                    <option value="3">New York</option>
                                    <option value="4">Paris</option>
                                    <option value="5">Prague</option>
                                    <option value="6">Amsterdam</option>
                                  </datalist>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="address" class="col-sm-2 col-form-label col-form-label-sm">Address</label>
                              <div class="col-sm-10">
                                <input type="text" name="address" class="form-control form-control-sm" id="address" placeholder="insert address"/>
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="website" class="col-sm-2 col-form-label col-form-label-sm">Website</label>
                              <div class="col-sm-10">
                                <input type="text" name="website" class="form-control form-control-sm" id="website" placeholder="insert website"/>
                              </div>
                          </div>
                          <div class="row m-2">
                                <div class="col text-dark text-monospace text-center mb-1" >
                                  <button class='btn btn-sm btn-danger' type ="submit">Add gastro</button>
                                  <a href= "./admin.php"><button  class='btn btn-sm btn-primary' type="button" >Back</button></a>
                                  </div>
                          </div> 
                  </form>
              </div>
              
        </section>
</div>  
  
</body>
</html>


