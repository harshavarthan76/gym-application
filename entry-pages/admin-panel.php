<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "root123";
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
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="../add-float/collapzion.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../add-float/collapzion.js"></script>
		 <script src="admin.js"></script>
	<script src="https://kit.fontawesome.com/acf7311159.js" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
			 <link rel="stylesheet" href="../css/admin.css">
		<style>
		
* {
  font-family: 'Josefin Sans', sans-serif;
}
body {
 
 background-image: url("../images/gym10.jpg");
 
  background-size: cover; 
 
}
#btncollapzion {
  font-weight: bold;
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
.gymName {
	color: black;
}

/* .col-md-8 , .col-md-8 h1{
	font-size:7rem;
	   color: rgba(0, 0, 0, 0.5);;
} */




			.navbar.scrolled {
  background: rgb(222, 192, 222);
  transition: background 500ms;
}

#mainNavbar {
  font-size: 1.3rem;
  font-weight: 100;
  margin: 0 1em 0 2em;
  font-weight: bold;
}

#mainNavbar .nav-link {
  font-weight: bold;
  color: black;
}

#mainNavbar .nav-link:hover {
  color: #ea1c2c;
}

#mainNavbar .navbar-brand {
  color: #ea1c2c;
  font-size: 2rem;
}

#btncollapzion {
  color: black;
  font-weight: bold;
  font-size: 28px;
}


		</style>
  	</head>
	
	<body>

	
	
		<nav id="mainNavbar" class="navbar navbar-dark  navbar-expand-md py-2 fixed-top " >
          <a href="#" class="navbar-brand px-3">
          <i class="fas fa-dumbbell" class="gymName"></i>     
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
                    <a href="../tables/member_details.php" class="nav-link">MEMBERS</a>
                    </li>
                
                    <li class="nav-item">
                    <a href="../tables/payment.php" class="nav-link">PAYMENT</a>
                    </li>

               
					<li class="nav-item position-absolute end-0 px-5">
     
         
                    	<a href="index.php" class="logoutbtn btn btn-danger">LOG OUT</a>

                         <button class="btn btn-success ms-2" onclick="document.location.href='homepage.php'">MEMBER LOGIN</button>
                         
                    </li>
               
       
                  
               </ul>
          </div>
     </nav>


	 
	
 <div>
             <div id="btncollapzion" class=" btn_collapzion"></div></div>
	
	<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
    
</html>
   