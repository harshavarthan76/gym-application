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
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
		<!-- <link rel="stylesheet" href="css/adminpanelstyles.css"> -->

		<style>
			.navbar.scrolled {
  background: rgb(222, 192, 222);
  transition: background 500ms;
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


		</style>
  	</head>
	
	<body>
	
	
		<nav id="mainNavbar" class="navbar navbar-dark  navbar-expand-md py-2 fixed-top " >
          <a href="#" class="navbar-brand px-3">
          <!-- <i class="fas fa-dumbbell"></i>      -->
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
					
					<li class="nav-item mx-2">
                    	<a href="index.php" class="logoutbtn btn btn-danger"  >LOG OUT</a>
                    </li>

                    <li class="nav-item ">
                         <button class="btn btn-secondary" onclick="document.location.href='homepage.php'">MEMBER LOGIN</button>
                    </li>
               
                   
                    
               </ul>
          </div>
     </nav>
		
   			<div class="container-fluid my-5 ps-5 pt-3">
    			<div class="row">
        			
					<div class="col-md-3">
            			
						<div class="list-group">
                			<a href="" class="list-group-item list-group-item-action list-group-item-dark">Members</a>
                			<a href="member_details.php" class="list-group-item">Member details</a>
                			<a href="payment.php" class="list-group-item">Payments</a>
                       		<a href="homepage.php" class="list-group-item">Add New Activity</a>
			                <a href="activity.php" class="list-group-item">Activity Log</a>
                			<a href="getActivity.php" class="list-group-item">Previous Activity Log</a>
            			</div>
            			
						<hr>
          			</div>
           
		    		
					<div class="col-md-8">
            			<div class="">
	    					<div class="text-center">
                				<h3>Register new members</h3>
                			</div> 
                			
							<!-- <div class="card-body row"></div> -->
                				<form class="form-group" action="func.php" method="post">
                 					<div class="col-md-4">
										<label>Gym Id:</label>
										<input type="text" name="gym_id" class="form-control" required><br>
									</div>

									<div class="row">
										<div class="col-md-6">
                							<label>Name:</label>
											<input type="text" name="name" class="form-control" required><br>
										</div>
										
										<div class="col-md-6">
                    						<label>Father name:</label>
											<input type="text" name="fname" class="form-control"><br>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-6">
  											<label>Email:</label>
											<input type="text" name="email" class="form-control"><br> 
										</div> 
  										
										<div class="col-md-6">
											<label>Date of Joining:</label>
											<input type="date" name="date_of_joining" class="form-control"><br>
										</div> 
									</div> 
									
									<div class="row">
										<div class="col-md-6">
 											<label>Contact</label>
                    						<input type="text" name="contact" class="form-control"><br> 
										</div>

  										<div class="col-md-6">  
											Package Type:
                							<select name="package_type" id="pay-select" class="form-select" aria-label="Default select example">
    										<option selected>Choose a package type</option>
											<option value="cash">Monthly</option>
    										<option value="upi">3 months</option>
    										<option value="other">6 months</option>
       										<option value="other">Yearly</option>
                    					</div>

							
	
								<div>                            
									<input type="submit" class="btn btn-secondary mt-4" name="pat_submit" value="Register">   
									<!-- <a href="func.php" class="btn btn-danger"></a>				 -->
								</div>
											
                				</form>
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
   