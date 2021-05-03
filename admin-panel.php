<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "root765";
$databaseName = "maindb";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
	<head>
	<script src="https://kit.fontawesome.com/acf7311159.js" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		
		<style>

body {
 
 background-image: url("images/savedimg12.jpg");
 background-position: center; 
  background-repeat: no-repeat;
  background-size: cover; 
 
}

/* h2{
  color:white;
}

.form-group label{
  color:white;
} */
.list-group-item{
  line-height: 1.8;
}

.col-md-8 , .col-md-8 h1{
	font-size:7rem;
	color:white;
}




			.navbar.scrolled {
  background: rgb(222, 192, 222);
  transition: background 500ms;
}

#mainNavbar {
  font-size: 1.3rem;
  font-weight: 100;
  margin: 0 1em 0 2em;
}

#mainNavbar .nav-link {
  color: white;
}

#mainNavbar .nav-link:hover {
  color: #ea1c2c;
}

#mainNavbar .navbar-brand {
  color: #ea1c2c;
  font-size: 2rem;
}




		</style>
  	</head>
	
	<body>

	
	
		<nav id="mainNavbar" class="navbar navbar-dark  navbar-expand-md py-2 fixed-top " >
          <a href="#" class="navbar-brand px-3">
          <i class="fas fa-dumbbell"></i>     
          OXYGEN GYM</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
        
          <div class="collapse navbar-collapse" id="navLinks">
          
               <ul class="navbar-nav nav-pills ">
                    <li class="nav-item">
                    <a href="admin-panel.php" class="nav-link">HOME</a>
                    </li>
                
                    <li class="nav-item">
                    <a href="#" class="nav-link">ABOUT</a>
                    </li>
                
                    <li class="nav-item">
                    <a href="#" class="nav-link">CONTACT</a>
                    </li>
					
					<li class="nav-item position-absolute end-0 px-5">
                    	<a href="index.php" class="logoutbtn btn btn-danger">LOG OUT</a>

                         <button class="btn btn-secondary ms-2" onclick="document.location.href='homepage.php'">MEMBER LOGIN</button>
                    </li>
               
                   
                    
               </ul>
          </div>
     </nav>


	 
   			<div class="container-fluid my-5 ps-5 pt-3">
    			<div class="row mt-5">
        			
					<div class="col-md-3 mt-5">
            			
						<div class="card">
                			<!-- <a href="" class="list-group-item list-group-item-action list-group-item-dark">Members</a> -->
							<div class="card-body "> <p class="text-center">QUICK LINKS</p>
							 <!-- QUICK LINKS <br> <br> -->
                			<a href="reg-newmembers.php" class="list-group-item">Register New Members</a>
							<a href="member_details.php" class="list-group-item">Member details</a> 
                			<a href="payment.php" class="list-group-item">Payments</a> 
                       		<a href="homepage.php" class="list-group-item">Add New Activity</a> 
			                <a href="activity.php" class="list-group-item">Activity Log</a>
							</div>
                			
            			</div>
            			
						<hr>
          			</div>

					<div class="col-md-8 ">
					<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-3 text-end">
					<i class="fas fa-dumbbell"></i>  
					</div>
					<div class="col-md-6 text-center">
					<h1>OXYGEN</h1>
					<h1>GYM</h1>
					</div>	
					</div>
					</div>
           
	
					
       		</div>
      		
    	</div>
    
	
	<header>
		<nav>
     		<div class="main-wrapper">
	            <div class="nav-login">
			      
				   <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="includes/index.php" method="POST">
					            <button type="submit" name="submit">logout</button>
					              </form>';	
                                 } else{
							
							echo '<form action="includes/index.php" method="POST">
                              
                               						
				                </form>
				              <a href="index.php" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Logout</a>';
							
						}
				   
				    ?>			
		        
				</div>
	 		</div>
 		</nav>
	</header>
    
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
    
</html>
   