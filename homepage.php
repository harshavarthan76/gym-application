<?php  
 $connect = mysqli_connect("localhost", "root", "root765", "maindb");  
 $query = "SELECT * FROM members";  
 $result = mysqli_query($connect, $query);  
 ?>

 <!DOCTYPE html> 

 <html lang="en" >  
     <head>  
           <title>HOME PAGE</title>
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">  

           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="preconnect" href="https://fonts.gstatic.com">
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
          
           <!-- <link rel="stylesheet" href="css/homepagestyles.css"> -->

           <style>

*,
*::after,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.container {
  background-color: white;
  /* background-color: #e4e9ee; */
  width: 22rem;
  height: 25rem;

  top: 50%;
  left: 70%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  font-size: larger;

  /*display: flex
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;  */
}
 body {
 
  background-image: url("images/savedimg21.jpg");
  background-size: cover;
} 

label, input[type="text"] {
      margin-bottom:10px;

     }
                    input[type="button"] {
                     letter-spacing: 0.08rem;
                    left: 40%;
                    border-radius:10%;                   
                    padding: 0.2rem 1rem 0.3rem 1rem; 
                     
                    } 

.navbar.scrolled {
  background: rgb(222, 192, 222);
  transition: background 500ms;
}
.mainbox2{
     margin-top: 35%;
}
.mainbox label{
     font-size: 1.3rem;
  /* font-weight:  */
}

#mainNavbar {
  font-size: 1.2rem;
  font-weight: 100;
}

#mainNavbar .nav-link {
  color: white;
}

#mainNavbar .nav-link:hover {
  color: #ea1c2c;
}

#mainNavbar .navbar-brand {
  color: #ea1c2c;
  font-size: 1.5rem;
}

.far{
     font-size:4em;
}

           </style>
     </head>

     
          
     <body >
          
     
          
      
     <nav id="mainNavbar" class="navbar navbar-dark  navbar-expand-md py-2 fixed-top " >
          <a href="#" class="navbar-brand px-3">
          <!-- <i class="fas fa-dumbbell"></i>      -->
          OXYGEN GYM</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
        
          <div class="collapse navbar-collapse" id="navLinks">
          
               <ul class="navbar-nav nav-pills">
                    <li class="nav-item">
                    <a href="homepage.php" class="nav-link">HOME</a>
                    </li>
                
                    <li class="nav-item">
                    <a href="#" class="nav-link">ABOUT</a>
                    </li>
                
                    <li class="nav-item">
                    <a href="#" class="nav-link">CONTACT</a>
                    </li>

                    <li class="nav-item position-absolute end-0 px-5">
                         <button class="btn btn-secondary" onclick="document.location.href='index.php'">ADMIN LOGIN</button>
                    </li>
               
                    <!-- <li class="nav-item position-absolute end-0 px-5">
                    <a href="index.php" class="nav-link active" aria-current="page" >ADMIN LOGIN</a>
                    </li> -->
                    
               </ul>
          </div>
     </nav>
          <div class="container" >          
               <div class="mainbox form-group">
               <div class="mainbox2 ps-3">      
                    <label for="myInput">MEMBER LOG IN</label>                          
                    <input type="text" id="myInput" name="gid" class="sample" placeholder=" Enter gym id" required /> 
               </div>
               
               <div class="mainbox3 text-center">
                    <input type="button" name="view" value="Log"  class="btn btn-outline-secondary btn-sm view_data" /> 
               </div>   
               </div>
          </div>

          
          
          

          <div id="dataModal" class="modal fade">  
  
               <div class="modal-dialog">  
                    <div class="modal-content">  
                         <div class="modal-header">                           
                              <h4 class="modal-title">Member Details</h4>  
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>  
                         </div>  

                         <div class="modal-body" id="employee_detail"> </div>  
                              <div class="modal-footer"> 
                              <button type="button" class="btn btn-danger close" data-bs-dismiss="modal">Close</button>
                                   <button type="submit"  class="btn btn-secondary"  id="logIntime"  >  LOG IN </button>
                              </div>  
                    </div>  
               </div>  
          </div>  
 
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
          <script type="text/javascript" src="ajax.js"></script>

         
    </script>
           
      </body>  
 </html>  
 