<!DOCTYPE html>
<?php include("func.php");?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN LOGIN</title>

  <script src="https://kit.fontawesome.com/acf7311159.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">

  <link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">


  <style>
  .input-field button.btn {
  background: #fc636b;
  border: none;
  color: #fff;
  padding: 11px 15px;
  text-transform: uppercase;
  font-family: "Mukta", sans-serif;
  font-size: 16px;
  width: 100%;
  margin-top: 10px;
  letter-spacing: 2px;
  cursor: pointer;
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -ms-transition: 0.5s all;
  border-radius: 35px;
  -webkit-border-radius: 35px;
  -moz-border-radius: 35px;
  -ms-border-radius: 35px;
  -o-border-radius: 35px;
}


.main {
  background: url(images/bg.jpg) no-repeat center;
  background-size: cover;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
  position: relative;
  min-height: 100vh;
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
  
}

#mainNavbar {
  font-size: 1.5rem;
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
  font-size: 2.2rem;
}
</style>
  
</head>
<body>


<section class="main">
<nav id="mainNavbar" class="navbar navbar-dark  navbar-expand-md py-2 " >
          <a href="#" class="navbar-brand px-3">
          <i class="fas fa-dumbbell"></i>     
          OXYGEN GYM</a>
               <button class="navbar-toggler" data-toggle="collapse" data-target="#navLinks" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
        
          <div class="collapse navbar-collapse" id="navLinks">
          
               <ul class="navbar-nav nav-pills">
                    <li class="nav-item">
                    <a href="homepage.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item"></li>
                
                    <li class="nav-item">
                    <a href="#" class="nav-link">ABOUT</a>
                    </li>
                
                    <li class="nav-item">
                    <a href="#" class="nav-link">CONTACT</a>
                    </li>
                    

                    <li class="nav-item position-absolute end-0 px-5">
                         <button class="btn btn-secondary" onclick="document.location.href='homepage.php'">MEMBER  LOGIN</button>
                    </li>
               
                    
                    
               </ul>
          </div>
     </nav>
  <div class="layer">

  

    <div class="content-w3ls">
      <div class="text-center icon">
        <span class="fa fa-dumbbell"></span>
      </div>
      <div class="content-bottom">
        <form action="func.php" method="post">
          <div class="field-group">
            <span class="fa fa-user" aria-hidden="true"></span>
            <div class="input-field">
              <input name="username" id="text1" type="text" placeholder="Username" required>
            </div>
          </div>
          <div class="field-group">
            <span class="fa fa-lock" aria-hidden="true"></span>
            <div class="input-field">
              <input name="password" id="myInput" type="password" placeholder="Password">
            </div>
          </div>
          <div class="input-field">
          <button type="submit" id="inputbtn"  class="btn" name="login_submit">Submit</button>
          </div>
          
        </form>
      </div>
    </div>
    <div style="height:40px"></div>
    <footer>
      <div class="bottom-grid1">
        <div class="links">
          <ul class="links-unordered-list">
            <li class="">
              <a href="#" class="">About Us</a>
            </li>
            <li class="">
              <a href="#" class="">Privacy Policy</a>
            </li>
            <li class="">
              <a href="#" class="">Terms of Use</a>
            </li>
          </ul>
        </div>
       
      </div>
    </footer>
  </div>
</section>



</body>
</html>