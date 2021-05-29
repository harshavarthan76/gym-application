<!DOCTYPE html>
<?php include("../apis/method.php");?>
<?php  
 $connect = mysqli_connect("localhost", "root", "root123", "maindb");  
 $query = "SELECT gym_id FROM log";  
 $result = mysqli_query($connect, $query);  
 ?>  

 
<html>
<head>
	<title>Activity Log</title>
  <script src="https://kit.fontawesome.com/acf7311159.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">         <script type="text/javascript" src="outtime.js"></script>
  <link rel="stylesheet" href="../css/activitypagestyles.css">
</head>
<style>
 @font-face {
    font-family: josefin;
    src: url(..\fonts\josefin\JosefinSans-MediumItalic.ttf);
  }
  
  * {
    font-family : josefin;
  }
  body {
  background-color: #e2ebf0;
}
  </style>
<body>


 <div class="container my-2">
<div class="card">
     <div class="card-body">
     
         <div class="row">
         <div class="row">
             <div class="col-md-2 ms-3">
            <a href="../entry-pages/homepage.php" class="btn btn-secondary ">Go Back</a>
             </div>
             <h3 class="col-md-6 text-center">ACTIVITY LOG</h3>
             <div class="col-md-3 text-end ">
             <span  id="clock"></span>
             <!-- <a class="btn btn-secondary">Previous Activity</a> -->
             </div>
             
       <div class="row mt-5 ms-2">   
      <div class="col-md-5">
          <form class="form-inline" method="POST" action="../apis/method.php">
  <input type="text"  class="form-control" name="outtimeId"   style="text-transform:uppercase" placeholder="Enter Gym Id " required>
  </div>
  <div class="col-md-1">
              <input type="submit" name="gymId"   style="text-transform:uppercase" class="btn btn-success out_time" value="Out-Time"> 
              </div>       
              </form>
            <div class="col-md-5 ">
              <form method="POST" action="historyActivity.php">
                         <div class="row">
                         <div class="col-md-2"></div>
                         <div class="col-md-5">
                         <input type="date" name="myInput" class="sample form-control" placeholder="Date"  required /> 
                         </div>

                         <div class="col-md-5">
                         <button type="submit" name="getActivity" class="btn btn-outline-dark form-control">See Previous activity      <i class="fas fa-long-arrow-alt-right"></i></button> 
                         </div>
                         </div>
                         </form>
              </div> 
   </div>          
     <div class="card-body" >
         <div class="card-body">
    <table class="table table-hover table-success table-striped">
        <thead>
     <tr>
            <th>Gym Id</th>
             <th> Name</th>
            <th>In Time</th>
               <th>Out time</th>
         
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

  <script>
function goBack() {
  window.history.back();
}
</script>

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