<?php
include("../../include/config.php");





   
   
    

$success = $admin_username1 = $admin_password2 ="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

  $admin_username1 = $_POST['admin_username'];
  $admin_password2 = $_POST['admin_password'];



  $get_set = "select * from admin_login";
  $run_set = mysqli_query($connect,$get_set);
  $row_set = mysqli_fetch_array($run_set);

  $admin_use = $row_set['username'];
  $admin_pass = $row_set['password'];
 

  if(!isset($admin_username1)){
    $admin_username1 = $admin_use;
  }elseif(!isset($admin_password2)){
    $admin_password2 = $admin_pass;
  }

  



  
  
 
  
  
       
        
      
         
         
        $update_user = "UPDATE admin_login SET  username = '$admin_username1', password = '$admin_password2' ";
        $run_user = mysqli_query($connect,$update_user);
        $success= "<div class='alert alert-dark'>
<strong>Success</strong> Settings Changed
</div> ";
        
}




  

  




        
  

?>