<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://kit.fontawesome.com/acf7311159.js" crossorigin="anonymous"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Register New Members</title>

	<style>
    body {
  background-color:  #e2ebf0;
}

	</style>
</head>
<body>
<div class="container my-3">
<div class="card">
            			<div class="card-body">
						<div class="col-md-2">
                        <a href="../entry-pages/admin-panel.php" class = "btn btn-secondary"> <i class="fas fa-arrow-left"></i> Go Back </a>
                        
                        </div>
	    					<div class="text-center">
                				<h2>Register new members</h2>
                			</div> 
                			
							
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
                						     <select name="payment_type"  class="form-control">
                                <option value="Monthly" selected>Monthly</option>
                                <option value="3 month">3 month</option>
                                <option value="6 month">6 month</option>
                                <option value="Yearly">Yearly</option>
                    					</div>

							
	
								<div class="text-center">                            
									<input type="submit" class="btn btn-secondary mt-4" name="pat_submit" value="Register">   
									
								</div>
											
                				</form>
                	</div>
    			 </div>
				 </div>
				 <script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script> 
</body>
</html>

