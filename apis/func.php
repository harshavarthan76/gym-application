<?php
$con=mysqli_connect("localhost","root","root123","maindb");
?>
<!DOCTYPE html> 

 <html lang="en" >  
     <head>  
           <title>HOME PAGE</title>
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1">  

           <script src="https://kit.fontawesome.com/acf7311159.js" crossorigin="anonymous"></script>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="preconnect" href="https://fonts.gstatic.com">
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
           <link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
           <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css" media="all">

           <link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">
           


<?php
function get_patient_details(){
    global $con;
    $query="select * from members ORDER BY last_payment DESC";
    $result=mysqli_query($con,$query);
    while ($row=mysqli_fetch_array($result)){
        
    $gym_id=$row['gym_id'];
    $name=$row['name'];
    $fname=$row['father_name'];
    $email=$row['email'];
    $date_of_joining= date('Y-m-d', strtotime($row['date_of_joining']));
    $contact=$row['contact'];
    $last_payment=$row['last_payment'];
      echo "<tr>
        <td>$gym_id</td>
          <td>$name</td>
        <td>$fname</td>
            <td>$email</td>
              <td>$date_of_joining</td>
            <td>$contact</td>
          <td>$last_payment</td>
        </tr>";
    }
}

function get_payment(){
     global $con;
    $query="select * from members ORDER BY last_payment DESC";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
       $gym_id=$row['gym_id'];
       $name=$row['name'];
       $date_of_payment=$row['last_payment'];
          $package_type=$row['package'];
         $date_of_payment=date('d-m-Y',strtotime($date_of_payment));
         $today = date("d-m-Y");
            $day_left= $row['days_left'];
            $status=$row['payment_status'];
        /*$customer_name=$row['customer_name'];*/
        
        echo"<tr>
        <td >$gym_id</td>
        <td>$name</td>
        <td>$date_of_payment</td>
        <td>$day_left</td>
        <td>$status</td>
         <td>$package_type</td>
        
            </tr>";

    }
}

function get_days() {
    global $con;
     $sql = mysqli_query($con,"SELECT gym_id,last_payment, days_left, package FROM members");
        while ($row = mysqli_fetch_assoc($sql)) {
              $gym_id = $row["gym_id"];
              $date_of_payment = date("Y-m-d");
              $last_payment = $row["last_payment"];
              $package_type = $row["package"];
             $date_of_payment= strtotime($date_of_payment);
             $last_payment = strtotime($last_payment);
          
            
               $day_left = floor(($date_of_payment-$last_payment)/60/60/24);
              
               $status = 'PAID';
            
            //  if ($package_type != "Monthly") {
            //       echo "<script>alert('$package_type')</script>";
                
            // }
                 if ($package_type == "Monthly") {
                $day_left = 30 - $day_left ;
                  
            }
            else if ($package_type == "3 month") {
                $day_left = 90 - $day_left ;
            }
            else if ($package_type == "6 month") {
                $day_left = 180 - $day_left ;
            }
             else if ($package_type == "Yearly") {
                $day_left = 365 - $day_left ;
            }
          

              // echo "<script>alert($day_left)</script>";
            if ($day_left < 0) {
              $status = "EXPIRED";
              $day_left = 0;
            }
         
            $query="UPDATE members SET days_left= '$day_left', payment_status = '$status' where gym_id = '$gym_id'";
              $result=mysqli_query($con,$query);
              

              if ($result) {
            //  echo "$date_of_payment<br></br>";
            //  echo "$last_payment";
            //  echo "$day_left";
              

              }
           
          else
    {
        echo "<script>alert('error login')</script>";
    }
        }
}

if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if($password == "pass"){ ?>
   <div class="alert alert-success" role="alert">
      This is a success alert—check it out!
  </div>

    echo "<script>window.open('../entry-pages/index.php','_self')</script>";
<?php  }
	else
    {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('../entry-pages/index.php','_self')</script>";
    }
    }



if(isset($_POST['add_member']))
{
    $gym_id=$_POST['gym_id'];
    $name=$_POST['name'];
     
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $date_of_joining= date('Y-m-d', strtotime($_POST['date_of_joining']));
    $contact=$_POST['contact'];
     $package_type=$_POST['package_type'];
    $last_payment=$date_of_joining;
    $status= 'PAID';

     $date_of_payment= new DateTime ($date_of_joining);
     $today = new DateTime();
     $day_left= $today->diff($date_of_payment)->format("%d");
    $date_of_payment=date('Y-m-d',strtotime($_POST['date_of_joining']));

    $query="insert into members(gym_id,name,father_name,email,date_of_joining,contact,last_payment,
    payment_status,package)values('$gym_id','$name','$fname','$email','$date_of_joining','$contact','$last_payment', '$status','$package_type')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('../tables/member_details.php','_self')</script>";
    }
    else 
    {
        echo "<script>alert('Error! Member not added.')</script>";
        echo "<script>window.open('../add/reg-newmembers.php','_self')</script>";
   
    }
    } 
   
        if(isset($_POST['add_payment']))
        {
         $gym_id=$_POST['gym_id'];
           
          $package_type=$_POST['package_type'];
            $payment_date=$_POST['date_of_payment'];
            $payment_date= mysqli_query($con,"SELECT last_payment from members where gym_id = '$gym_id'");
            $res = mysqli_fetch_array($payment_date);
            $last_payment = $res['last_payment'];
            
            $date_of_payment=date('d-m-Y',strtotime($_POST['date_of_payment']));
            

             $date_of_payment= strtotime($date_of_payment);
            $last_payment = strtotime($last_payment);
            
               $day_left = floor(($date_of_payment-$last_payment)/60/60/24);
          
           
            
         
              $status = 'PAID';
            
             $date_of_payment=date('Y-m-d',strtotime($_POST['date_of_payment']));
                    
            if ($package_type == "Monthly") {
                $day_left = 30 - $day_left ;
            }
            else if ($package_type == "3 month") {
                $day_left = 90 - $day_left ;
            }
            else if ($package_type == "6 month") {
                $day_left = 180 - $day_left ;
            }
             else if ($package_type == "Yearly") {
                $day_left = 365 - $day_left ;
            }
           
            $query="UPDATE members SET  last_payment= '$date_of_payment', payment_status = '$status' , package ='$package_type' WHERE  gym_id = '$gym_id' ";
             $result=mysqli_query($con,$query);
            if($result)
            {
                 $sql = mysqli_query($con,"SELECT gym_id,last_payment, days_left FROM members where gym_id = '$gym_id'");
       
            while ($row = mysqli_fetch_assoc($sql)) 
{
              $date_of_payment = date("Y-m-d"); 
                   $last_payment = $row["last_payment"];
 
             $date_of_payment= strtotime($date_of_payment);
        
          
            $last_payment = strtotime($last_payment);
          
            
               $day_left = floor(($date_of_payment-$last_payment)/60/60/24);
            
               $status = 'PAID';
         
         
            $query="UPDATE members SET days_left= '$day_left', payment_status = '$status' where gym_id = '$gym_id'";
              $result=mysqli_query($con,$query);
              }  
             
              if ($result) {
            echo "<script>alert('Payment sucessfull. $day_left') </script>";
                
               
            echo "<script>window.open('../tables/payment.php','_self')</script>";
         
             
          
            }
          }
        }
            
 
if(isset($_POST['login_submt']))
        {
        $Name=$_POST['username'];
        $pass=$_POST['password'];
         echo "WJ";
            
            // $payment_date= mysqli_query($con,"SELECT last_payment from members where gym_id = '$gym_id'");
            // $res = mysqli_fetch_array($payment_date);
            // $last_payment = $res['last_payment'];
            
            // $date_of_payment=date('d-m-Y',strtotime($_POST['date_of_payment']));
            
           if ($pass == "oxygen123")  {
           

        //$data = mysql_fetch_array($sql);
       

            // if( true)
            // {
        
            
              echo "<script>alert('Login sucessfull.')</script>";
               
               echo "<script>window.open('../admin-panel.php','_self')</script>";
          //   }
          //  }
            }
            else {
              echo "<script>alert('Login Failed')</script>";  
                 echo "<script>window.open('index.php','_self')</script>"; 
          
           }
        //  }}
            
           
          
            // echo "$day_left";
                
            
         
            //   $status = 'PAID';
            //  $date_of_payment=date('Y-m-d',strtotime($_POST['date_of_payment']));
                    //   $last_payment=date('Y-m-d',strtotime($last_payment));
            //  echo "$date_of_payment";
          
               
           
         
          }
        
?>




