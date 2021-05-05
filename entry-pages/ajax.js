var temp;

 $(document).ready(function(){  
      $('.view_data').click(function(){  
           var gym_id = document.getElementById("myInput").value;
           temp = gym_id;  
         
           $.ajax({  
                url:"../apis/method.php",  
                method:"post",  
                data:{gym_id:gym_id},  
                success:function(data){  
                    
                     $('#employee_detail').html(data);  
                     $('#dataModal').modal("show"); 
                       
                }  
           });  
      });  
 });  
 
 
 $(document).ready(function(){
     
     
     $('#logIntime').click(function(){ 
         
     
            $.ajax({  
                type: "POST", 
                url:"../apis/addActivity.php", 
             
               //  method:"post",  
                data:{temp:temp},
                success: function(r) 
  {
      
       window.location.replace("../wk-activity/activity.php");
  },
                
          }  );
       
                 
           
     });  
});
