<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Members details</title>
    <script src="https://kit.fontawesome.com/acf7311159.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        body {
  background-color: burlywood;
}
    </style>
</head>
<body>
	

 <div class="container my-2">
<div class="card">
     <div class="card-body" ">
        

                 <div class="row">
             <div class="col-md-2 ms-3">
             <button class = "btn btn-secondary" onclick="goBack()"> <i class="fas fa-arrow-left"></i> Go Back</button>
             </div>
             <h3 class="col-md-8 text-center">MEMBER DETAILS</h3>
             
       <div class="row mt-5 ms-2">   
      <div class="col-md-6">
      <form class="form-group" action="member_search.php" method="post">
      <input type="text" name="search" class="form-control" placeholder="Enter Gym Id or Name ">
  </div>
  <div class="col-md-2">
  <input type="submit" name="patient_search_submit" class="btn btn-secondary" value="Search"> 
              </div>       
              </form>
            
   </div>
     <div class="card-body" >
         <div class="card-body">
    <table class="table table-hover table-dark table-striped">
        <thead>
     <tr>
            <th>Gym Id</th>
             <th> Name</th>
            <th>Father Name</th>
         <th>Email id</th>
          <th>Date Of Joining</th>
         <th>Contact</th>
         <th>Last Payment</th>
        </tr>   
        </thead>
        <tbody>
          <?php get_patient_details(); ?>
        </tbody>
    </table>
     </div>
    </div>
    </div>
    
    <script>
function goBack() {
  window.history.back();
}
</script>
<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </div>
    </body>
</html>