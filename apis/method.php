<?php
$con=mysqli_connect("localhost","root","root123","maindb");
  
function get_activity(){
     global $con;
    $query="select * from log ORDER BY out_time IS NULL DESC, out_time DESC";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
       $gym_id=$row['gym_id'];
       $name=$row['name'];
       $in_time=$row['in_time'];
         $shift=$row['shift'];
       if ($row['out_time'] != "NULL")
        $out_time=$row['out_time'];
        else
        $out_time="--:--:--";
         $entry_date=$row['entry_date'];
         date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)

           $curr_date = date("Y-m-d");
           $currentDateTime=date('m/d/Y H:i:s');
          //  echo "<script> alert('$currentDateTime') </script>";
           $fmt = date('A', strtotime($currentDateTime));
             if ($fmt == "AM") {
          $fmt = "Mrng";
     }
     else {
           $fmt = "Eve";
     }
 
      
        /*$customer_name=$row['customer_name'];*/
        if ($entry_date === $curr_date && $fmt == $shift) {
        echo"<tr>
        <td>$gym_id</td>
        <td>$name</td>
        <td>$in_time</td>
          <td>$out_time </td>
     
                       
     
      
        
            </tr>";
        }

    }
}

function get_user(){
     global $con;
    $query="select gym_id,name,days_left,payment_status from members";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
       $gym_id=$row['gym_id'];
       $name=$row['name'];
       $in_time=$row['days_left'];
        $out_time=$row['payment_status'];
         $current_date=$row['entry_date'];
      
        /*$customer_name=$row['customer_name'];*/
        
        echo"<tr>
        <td>$gym_id</td>
        <td>$name</td>
        <td>$in_time</td>
        <td>$out_time</td>
        <td>$current_date</td>
      
        
            </tr>";

    }
}
 
if(isset($_POST["gym_id"]))  
 {  
   
       
      $output = '';  
     
      $connect = mysqli_connect("localhost", "root", "root123", "maindb");  
      $query = "SELECT * FROM members WHERE gym_id = '".$_POST["gym_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
         
           $output .= '  
                <tr>  
                     <td width="30%"><label>Gym Id</label></td>  
                     <td width="70%" >'.$row["gym_id"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Name</label></td>  
                     <td width="70%" >'.$row["name"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Days Left</label></td>  
                     <td width="70%">'.$row["days_left"].'</td>  
                </tr>  
                <tr>  
                     <td width="30%"><label>Payment Status</label></td>  
                     <td width="70%">'.$row["payment_status"].'</td>  
                </tr>  
              
                ';  
      }  
      $output .= "</table></div>
      ";  
      echo $output;  
 }  
 
 
if(isset($_POST["gymId"]))  
 {  
        $connect = mysqli_connect("localhost", "root", "root123", "maindb"); 
   $gym_id=$_POST["outtimeId"];
  

     
     date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)


    $out_time = date('h:i:s');
     $curr_date = date("Y-m-d");
    
         
  
       
    $query="UPDATE  log SET out_time='$out_time' WHERE gym_id = '$gym_id'  ";
     $result=mysqli_query($connect,$query);
     if($result)
    {
      echo "<script>alert('Entry Done.')</script>";
        echo "<script>window.open('../wk-activity/activity.php','_self')</script>";
    }
    else 
    {
        echo "<script>alert('Error!.')</script>";
    }

         
 } 



if (isset($_POST['getActivity'])){
        echo "<script>alert('Entry Done.')</script>";
         $connect = mysqli_connect("localhost", "root", "root123", "maindb");  
     $date = date('Y-m-d',strtotime($_POST['myInput']));;
    
    $query="select * from log where entry_date = '$date'";
    $result=mysqli_query($connect,$query);
    while($row=mysqli_fetch_array($result)){
       $gym_id=$row['gym_id'];
       $name=$row['name'];
       $in_time=$row['in_time'];
          $out_time=$row['out_time'];
         $shift=$row['shift'];
     

      
        /*$customer_name=$row['customer_name'];*/
      
        echo"<tr>
        <td>$gym_id</td>
        <td>$name</td>
        <td>$in_time</td>
          <td>$out_time </td>
          <td>$shift</td>
     
                       
     
      
        
            </tr>";
      

    }
}

 ?>