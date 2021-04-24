<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Payment details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <style>
        body {
  background-color: burlywood;
}

    </style>

</head>
<body>

    <div class="contaier-fluid my-2">
        <div class="row">
            <div class="col-md-8">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 ms-4">
                            <a href="admin-panel.php" class="btn btn-secondary ">Go Back</a>
                        </div>
                        
                        <h3 class="col-md-8 text-center">PAYMENT DETAILS</h3>
                    </div>

                    <table class="table table-hover table-dark table-striped">
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
                <div class="card-body">
                    <h3 class="text-center">Make new Payment</h3>

                    <form class="form-group" action="func.php" method="post">
                        <!-- <div class="row"> -->
                            <!-- <div class="col-md-6"> -->
                                <input placeholder="Gym Id" type="text" name= "gym_id" class="form-control " required /> <br>
                            <!-- </div> -->

                            <!-- <div class="col-md-6"> -->
                                <input placeholder="name" type="text" name="name" class="form-control"  />  <br>
                            <!-- </div> -->
                    
                        <!-- <div class="row">
                            <div class="col-md-6">  -->
                                <!-- <select name="payment_type" id="pay-select" class="form-control">
                                <option selected>Choose a package type..</option>
                                <option value="cash">Monthly</option>
                                <option value="upi">3 month</option>
                                <option value="other">6 month</option>
                                <option value="other">Yearly</option> -->
                            <!-- </div> -->
                                
                            <!-- <div class="col-md-6 ">   -->
                                <input name="date_of_payment" type="date" class="form-control" required />
                            <!-- </div> -->
                        <!-- </div> -->
                
                        <input type="submit" class="btn btn-primary mt-4" name="pay_submit" value="PAY">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- <div class="container-fluid my-2">
        <div class="card row">
            <div class="card-body">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-2 ms-4">
                            <a href="admin-panel.php" class="btn btn-secondary ">Go Back</a>
                        </div>
                    
                    <h3 class="col-md-8 text-center">PAYMENT DETAILS</h3>
                    </div>
            
                
                    <div class="card-body">
                    <table class="table table-hover table-dark table-striped">
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
            <div class="card-body col-md-5 " >
                <h3>Make new Payment</h3>
            </div> 
                
            <form class="form-group" action="func.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input placeholder="Gym Id" type="text" name= "gym_id" class="form-control" required /> <br>
                        </div>

                        <div class="col-md-6">
                            <input placeholder="name" type="text" name="name" class="form-control"  />  <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6"> 
                            <select name="payment_type" id="pay-select" class="form-control">
                            <option selected>Choose a package type..</option>
                            <option value="cash">Monthly</option>
                            <option value="upi">3 month</option>
                            <option value="other">6 month</option>
                            <option value="other">Yearly</option>
                        </div>
                          
                        <div class="col-md-6 ">  
                            <input name="date_of_payment" type="date" class="form-control" required />
                        </div>
                    </div>
                
                    <input type="submit" class="btn btn-primary mt-4" name="pay_submit" value="PAY">
            </form>
            </div>
        </div>
    </div> -->
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </div>
    </body>
</html>