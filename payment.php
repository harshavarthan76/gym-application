<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Payment details</title>
    <script src="https://kit.fontawesome.com/acf7311159.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <style>
        body {
  background-color: burlywood;
}

    </style>

</head>
<body>

    <div class="contaier-fluid my-2">
        <div class="row m-0">
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2">
                        <a href="admin-panel.php" class = "btn btn-secondary"> <i class="fas fa-arrow-left"></i> Go Back </a>
                        
                        </div>
                        
                        <h3 class="col-md-8 text-center">PAYMENT DETAILS</h3>
                    </div>

                    <table class="table table-hover table-dark table-striped mt-3">
                        <thead>
                            <tr>
                                <th>Gym ID </th>
                                <th>Name</th>
                                <th>Date of Payment</th>
                                <th>Days</th>
                                <th>Status</th>
                            </tr>   
                        </thead>
                        <tbody>
                            <?php get_payment(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card-body mt-5">
                    <h3 class="text-center">Make new Payment</h3>

                    <form class="form-group mt-4" action="func.php" method="post">
                        
                                <input placeholder="Gym Id" type="text" name= "gym_id" class="form-control " required /> <br>
                           
                                <input placeholder="name" type="text" name="name" class="form-control"  />  <br>
                            
                                <input name="date_of_payment" type="date" class="form-control" required />
                            
                        <div class="text-center">
                        <input type="submit" class="btn btn-primary mt-4" name="pay_submit" value="PAY"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
    
    <script>
function goBack() {
  window.history.back();
}
</script>

<script type = "text/javascript" >  
    function preventBack() { window.history.forward(); }  
    setTimeout("preventBack()", 0);  
    window.onunload = function () { null };  
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </div>
    </body>
</html>