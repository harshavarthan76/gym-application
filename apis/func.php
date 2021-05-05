<?php
$con=mysqli_connect("localhost","root","root123","maindb");

function get_patient_details(){
    global $con;
    $query="select * from members";
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
// function get_package(){
//     global $con;
//     $query="select * from Package";
//     $result=mysqli_query($con,$query);
//     while($row=mysqli_fetch_array($result)){
//         $Package_id=$row ['Package_id'];
//         $Package_name=$row['Package_name'];
//         $Amount=$row['Amount'];
//         echo"<tr>
//         <td>$Package_id</td>
//         <td>$Package_name</td>
//             <td>$Amount</td>
            
//         </tr>";

//     }
// }
// function get_trainer(){
//     global $con;
//     $query="select * from Trainer";
//     $result=mysqli_query($con,$query);
//     while($row=mysqli_fetch_array($result)){
//         $Trainer_id=$row ['Trainer_id'];
//         $Name=$row['Name'];
//         $phone=$row['phone'];
//         echo"<tr>
//         <td>$Trainer_id</td>
//         <td>$Name</td>
//             <td>$phone</td>
            
//         </tr>";

//     }
// }
function get_payment(){
     global $con;
    $query="select * from members";
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
	
	if($password == "pass")
	{
     $sql = mysqli_query($con,"SELECT gym_id,last_payment, days_left FROM members ");
       
            while ($row = mysqli_fetch_assoc($sql)) 
{
    $date_of_payment = date("Y-m-d");
              
                   $last_payment = $row["last_payment"];
                      $gym_id = $row["gym_id"];
 
             $date_of_payment= strtotime($date_of_payment);
        
          
            $last_payment = strtotime($last_payment);
          
            
               $day_left = floor(($date_of_payment-$last_payment)/60/60/24);
            
               $status = 'PAID';
                if ($day_left > 30) {
                  $status = "EXPIRED";
                }
         
         
            $query="UPDATE members SET days_left= '$day_left', payment_status = '$status' where gym_id = '$gym_id'";
              $result=mysqli_query($con,$query);
              }  
             
              if ($result) {
            echo "<script>alert('logged in Successfully') </script>";

               
             echo "<script>window.open('../entry-pages/admin-panel.php','_self')</script>";
            //   }
             
          
            }
          
	
}
	else
    {
        echo "<script>alert('error login')</script>";
        echo "<script>window.open('../entry-pages/index.php','_self')</script>";
    }
    }



if(isset($_POST['pat_submit']))
{
    $gym_id=$_POST['gym_id'];
    $name=$_POST['name'];
     
    $fname=$_POST['fname'];
    $email=$_POST['email'];
    $date_of_joining= date('Y-m-d', strtotime($_POST['date_of_joining']));
    $contact=$_POST['contact'];
     $package_type=$_POST['payment_type'];
    $last_payment=$date_of_joining;
    $status= 'PAID';

     $date_of_payment= new DateTime ($date_of_joining);
     $today = new DateTime();
     $day_left= $today->diff($date_of_payment)->format("%d");
    $date_of_payment=date('Y-m-d',strtotime($_POST['date_of_joining']));

    $query="insert into members(gym_id,name,father_name,email,date_of_joining,contact,last_payment,payment_status,package)values('$gym_id','$name','$fname','$email','$date_of_joining','$contact','$last_payment', '$status','$package_type')";
     $result=mysqli_query($con,$query);
    if($result)
    {
      echo "<script>alert('Member added.')</script>";
        echo "<script>window.open('admin-panel.php','_self')</script>";
    }
    else 
    {
        echo "<script>alert('Error! Member not added.')</script>";
    }
    } 
    // if(isset($_POST['tra_submit']))
    // {
    //     $Trainer_id=$_POST['Trainer_id'];
    //     $Name=$_POST['Name'];
    //     $phone=$_POST['phone'];
    //     $query="insert into Trainer(Trainer_id,Name,phone)values('$Trainer_id','$Name','$phone')";
    //      $result=mysqli_query($con,$query);
    //     if($result)
    //     {
    //       echo "<script>alert('Trainer added.')</script>";
    //         echo "<script>window.open('admin-panel.php','_self')</script>";
    //     }
    //     } 
        if(isset($_POST['pay_submit']))
        {
         $gym_id=$_POST['gym_id'];
            $name=$_POST['name'];
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
                    //   $last_payment=date('Y-m-d',strtotime($last_payment));
            //  echo "$date_of_payment";
          
            if ($package_type == "Monthly") {
                $day_left = 30 - $day_left ;
            }
            else if ($package_type == "3 Month") {
                $day_left = 90 - $day_left ;
            }
            else if ($package_type == "6 Month") {
                $day_left = 180 - $day_left ;
            }
             else if ($package_type == "Yearly") {
                $day_left = 365 - $day_left ;
            }
           
            $query="UPDATE members SET  last_payment= '$date_of_payment', payment_status = '$status' , package ='$package_type'
             WHERE  gym_id = '$gym_id' or name = '$name' ";
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
                
               
            echo "<script>window.open('payment.php','_self')</script>";
          //  header("Location: www.google.com");
            //   }
             
          
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




