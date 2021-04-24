<!DOCTYPE html>
<?php include("method.php");?>
<?php  
 $connect = mysqli_connect("localhost", "root", "root765", "maindb");  
 $query = "SELECT gym_id FROM log";  
 $result = mysqli_query($connect, $query);  
 ?>  

 
<html>
<head>
	<title>Activity Log</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">         <script type="text/javascript" src="outtime.js"></script>
           <link rel="stylesheet" href="css/activitypagestyles.css">
</head>
<body>
<!-- <div class="jumbotron" style="background: url('images/2.jpg') no-repeat;background-size: cover;height: 300px;"></div>	 -->

 <div class="container my-2">
<div class="card">
     <div class="card-body">
     <!-- <h3 class="text-center">Activity log</h3> -->
         <div class="row">
             <div class="col-md-2 ms-3">
            <a href="homepage.php" class="btn btn-secondary ">Go Back</a>
             </div>
             <h3 class="col-md-8 text-center">ACTIVITY LOG</h3>
             
       <div class="row mt-5 ms-2">   
      <div class="col-md-6">
          <form class="form-inline" method="POST" action="method.php">
  <input type="text"  class="form-control" name="outtimeId" placeholder="Enter Gym Id " required>
  </div>
  <div class="col-md-2">
              <input type="submit" name="gymId"  class="btn btn-secondary out_time" value="Out-Time"> 
              </div>       
              </form>
            <div class="col-md-4 text-center "> <span  id="clock"></span> </div>
   </div>          
     <div class="card-body" >
         <div class="card-body">
    <table class="table table-hover table-dark table-striped">
        <thead>
     <tr>
            <th>Gym Id</th>
             <th> Name</th>
            <th>In Time</th>
               <th>Out time</th>
         <!-- <th>Out time</th>
          <th>Date</th> -->
          <!-- <th>Date Of Joining</th>
         <th>Contact</th>
         <th>Last Payment</th> -->
        </tr>   
        </thead>
        <tbody>
          <?php get_activity(); ?>
          
                       
        </tbody>
    </table>
     </div>
    </div>
    </div>
    
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">
   const dateDiv = document.getElementById('clock');

function myDateFunction() {
  const now = new Date();
  const nowStr = now.toLocaleString('en-US');
  dateDiv.innerHTML = nowStr;
}
setInterval(myDateFunction, 1000);
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>
</html>