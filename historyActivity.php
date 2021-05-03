<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/acf7311159.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
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
<div class="card">
            <div class="card-body" >
                <div class="row">
                    <div class="col-md-2 ms-4">
                    <button class = "btn btn-secondary" onclick="goBack()"><i class="fas fa-arrow-left"></i> Go Back</button>
                    </div>
                    
                    <h3 class="col-md-8 text-center">ACTIVITY HISTORY</h3>
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
               <th>Shift</th>
         
        </tr>   
        </thead>
        <tbody>
          <?php if (isset($_POST['getActivity'])){
        echo "<script>alert('Entry Done.')</script>";
         $connect = mysqli_connect("localhost", "root", "root765", "maindb");  
     $date = date('Y-m-d',strtotime($_POST['myInput']));;
    
    $query="select * from log where entry_date = '$date'";
    $result=mysqli_query($connect,$query);
    while($row=mysqli_fetch_array($result)){
       $gym_id=$row['gym_id'];
       $name=$row['name'];
       $in_time=$row['in_time'];
          $out_time=$row['out_time'];
         $shift=$row['shift'];
     

      
        
      
        echo"<tr>
        <td>$gym_id</td>
        <td>$name</td>
        <td>$in_time</td>
          <td>$out_time </td>
          <td>$shift</td>
     
                       
     
      
        
            </tr>";
      

    }
} ?>
          
                       
        </tbody>
    </table>
     </div>
    </div>
    </div>
    <div>

    <script>
function goBack() {
  window.history.back();
}
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </div>
     <script type="text/javascript">
   const dateDiv = document.getElementById('clock');

function myDateFunction() {
  const now = new Date();
  const nowStr = now.toLocaleString('en-US');
  dateDiv.innerHTML = nowStr;
}
setInterval(myDateFunction, 1000);
</script>
    </body>
    </html>