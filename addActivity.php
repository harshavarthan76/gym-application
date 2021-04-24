<?php
$con=mysqli_connect("localhost","root","root765","maindb");

if(isset($_POST["temp"]))
{
            $connect = mysqli_connect("localhost", "root", "root765", "maindb"); 
       
    $gym_id=$_POST["temp"];
      
   

    $names;

      $query2="select name from members where gym_id = '$gym_id'";
    $result=mysqli_query($connect,$query2);
    while($row=mysqli_fetch_array($result)){
       $names=$row['name'];
     //   $names=$name;
    }
   date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)


    $in_time = date('H:i:s');
    $fmt = date('A', strtotime($in_time));
     $curr_date = date("Y-m-d");
  
        
     if ($fmt == "AM") {
          $fmt = "Mrng";
     }
     else {
           $fmt = "Eve";
     }
   $in_time = date('h:i:s');
       
    $query="insert into log(gym_id,name,in_time,entry_date,shift)values('$gym_id','$names','$in_time','$curr_date','$fmt')";
    
    $result=mysqli_query($connect,$query);
    
    if($result)
    {
   
      echo "<script>alert('Entry Done.')</script>";
        echo "<script>window.open('activity.php','_self')</script>";
    }
    else 
    {
        echo "<script>alert('Error!.')</script>";
    }

     
}
?>