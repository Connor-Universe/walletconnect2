<?php 

 $connect = mysqli_connect("localhost","root","","walletconnectapp");
 #$connect = mysqli_connect("sql100.epizy.com","epiz_28901830","6RrjeTalzvYpln0","epiz_28901830_wallet");
$get_admin = "select * from admin_login";
$run_admin = mysqli_query($connect,$get_admin);
$get_data = "select * from client_data";
$run_data = mysqli_query($connect,$get_data);

?>