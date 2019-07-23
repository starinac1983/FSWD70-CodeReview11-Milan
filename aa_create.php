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
        <h1 class="h1">Add new gastro type</h1>
      </div>

    <!-- sign in section -->

        <section class="row d-flex justify-content-around m-1">
          
              <div class="col-xl-4 p-xl-4 col-lg-4 p-lg-4 col-md-4 p-md-4 col-sm-4 p-sm-4 col-xs-12 p-xs-12 col-12 p-2 m-2 bg-white shadow-lg rounded-lg">
                    <form method="post"  action="actions/aa_create.php" autocomplete= "off">
                          <div class="form-group row">
                              <label for="gastroType" class="col-sm-2 col-form-label col-form-label-sm">gastro type</label>
                              <div class="col-sm-10">
                                <input type="text" name="gastroType" class="form-control form-control-sm" id="gastroType" placeholder="insert gastro type"/>
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


