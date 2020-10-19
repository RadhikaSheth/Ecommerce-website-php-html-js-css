<html>
<head>
  <title>ONECLICK CART</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylefile.css">
  <!-- No need to change any CSS here-->
<style>
body{
  background-color: #FBFCFC;
}
h3{
  color: black;
}
.grow img{
transition: 1s ease;
}

.grow img:hover{
-webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
transform: scale(1.2);
transition: 1s ease;
}
</style>
</head>
<body>
  <?php
  session_start();
   ?>
  <div class="topnav">
  <h1 style="text-align:center; color:white">&nbsp &nbsp ONECLICK CART<sub style="font-size:40%"> FIND IT! LOVE IT! BUY IT!</sub></h1>

</div>
<div class="topnav">
  <a href="home.php">&nbsp HOME &nbsp &nbsp</a>
  <a href="smartPhones.php">&nbsp Smart Phones &nbsp &nbsp</a>
  <a href="speakers.php">&nbsp Speakers &nbsp &nbsp</a>
  <a href="headphones.php">&nbsp Headphones &nbsp &nbsp</a>
  <a href="earphones.php">&nbsp Earphones &nbsp &nbsp</a>
  <a href="logout.php" style="float:right">&nbsp &nbsp Logout &nbsp &nbsp</a>
  <a href="cart.php" style="float:right">&nbsp &nbsp &nbsp &nbsp <i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp Cart(<?php echo $_SESSION['totalrows']; ?>) &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
</div>
<a href="sp_info1.php">
  <div  class="grow" style="background-color:#CDEAF2; height:250px; width:900px; margin-left: auto; margin-right: auto;border:1px black" >
    <div class="col-sm-6 " >
      &nbsp &nbsp &nbsp<img src="img2.1.1.jpg" alt="Image1" width="250 px" height="250px" style="padding:6px">
    </div>
    <div class="col-sm-6">
      <br>
      <br>
      <br>
      <h3>Echo Dot (3rd Gen) – Smart speaker with Alexa (Black)</h3>
      <h3>Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>3,499.00</h3>
    </div>
  </div>
</a>
<a href="sp_info2.php">
  <div  style="background-color:  #E6F3F6;height:250px; width:900px; margin-left: auto; margin-right: auto; ">
<div  class="grow" style="background-color:  #E6F3F6;height:250px; width:900px; margin-left: auto; margin-right: auto; ">
  <div class="col-sm-6" >
    &nbsp &nbsp &nbsp<img src="img2.2.1.jpg" align:right alt="Image2" width="250 px" height="250px" style="padding:6px">
  </div>
  <div class="col-sm-6">
    <br>

    <h3>Infinity (JBL) Fuze 100 Deep Bass Dual Equalizer IPX7 Waterproof Portable Wireless Speaker (Mystic Blue)</h3>
    <h3>Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>1,199.00</h3>
  </div>

</div>
</a>
<a href="sp_info3.php">
<div  class="grow" style="background-color:#CDEAF2;height:250px; width:900px; margin-left: auto; margin-right: auto; ">
  <div class="col-sm-6" >
  &nbsp &nbsp &nbsp<img src="img2.3.1.jpg" alt="Image3" width="250 px" height="250px" style="padding:6px">
  </div>
  <div class="col-sm-6">
    <br>

    <h3>boAt Stone SpinX 2.0 R 12W Portable Wireless Speaker with 360° Stereo Sound, Up to 8H Playtime, IPX6 Water and Splash Resistance and TWS Feature(Charcoal Black)</h3>
    <h3>Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>1,999.00</h3>
  </div>

</div>
</a>
<a href="sp_info4.php">
<div  class="grow" style="background-color:  #E6F3F6;height:250px; width:900px; margin-left: auto; margin-right: auto; ">
  <div class="col-sm-6" >
  &nbsp &nbsp &nbsp<img src="img2.4.1.jpg" alt="Image4" width="250 px" height="250px" style="padding:6px">
  </div>
  <div class="col-sm-6">
    <br>
    <br>
    <br>
    <h3>Sony SRS-XB01 Extra Bass Portable Wireless Speaker (White)</h3>
    <h3>Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>2,199.00</h3>
  </div>

</div>
</a>
<a href="sp_info5.php">
<div   class="grow"style="background-color:#CDEAF2;height:250px; width:900px; margin-left: auto; margin-right: auto; ">
  <div class="col-sm-6" >
  &nbsp &nbsp &nbsp<img src="img2.5.1.jpg" alt="Image4" width="250 px" height="250px" style="padding:6px">
  </div>
  <div class="col-sm-6">
    <br>
    <br>
    <h3>Portronics Dynamo Bluetooth 5.0 Portable Stereo Speaker with TWS, USB Music & FM Music and Clear Bass Sound, 5W, Blue</h3>
    <h3>Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>1,049.00</h3>
  </div>

</div>
</a>

</body>
</html>
