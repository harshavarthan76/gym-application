<?php  
 $connect = mysqli_connect("localhost", "root", "root765", "maindb");  
 $query = "SELECT * FROM members";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html >  
     <head>  
           <title>HOME PAGE</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">  
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
           <link rel="preconnect" href="https://fonts.gstatic.com">
           <script type="text/javascript" src="ajax.js"></script>
           <!-- <link rel="stylesheet" href="CSS/homepagestyles.css"> -->
     </head>  
     
     <body>  
          <div class="container" >  
                <!-- <h3 align="center">Bootstrap Modal with Dynamic MySQL Data using Ajax & PHP</h3>   -->
                <br />  
                <div class="table-responsive">  
                     <div class="table table-bordered">  
                        
                         
                         <form method="POST" action="historyActivity.php">
                         <label for="myInput" style="width:50%;">Activity Log </label>
                         <input type="date" name="myInput" class="sample" placeholder="Date"  required /> 
                         
                         <input type="submit" name="getActivity" value="Log"  class="btn btn-outline-secondary" /> 
                         
                         </form>
                     </div>
                </div>  
           </div> 
          

           
      </body>  
 </html>  