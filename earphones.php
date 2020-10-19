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
<a href="ear_1.php">
  <div  class="grow" style="background-color:#CDEAF2; height:250px; width:900px; margin-left: auto; margin-right: auto;border:1px black" >
    <div class="col-sm-6 " >
      &nbsp &nbsp &nbsp<img src="img4.1.1.jpg" alt="Image1" width="250 px" height="250px" style="padding:6px">
    </div>
    <div class="col-sm-6">
      <br>
      <br>
      <br>
      <h3>Philips SHE2405PP/00 Upbeat inear Earphone with Mic (Purple)</h3>
      <h3>Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>669.00</h3>
    </div>
  </div>
</a>
<a href="ear_2.php">
  <div  style="background-color:#E6F3F6;height:250px; width:900px; margin-left: auto; margin-right: auto; ">
<div  class="grow" style="background-color: #E6F3F6;height:250px; width:900px; margin-left: auto; margin-right: auto; ">
  <div class="col-sm-6" >
    &nbsp &nbsp &nbsp<img src="img4.2.1.jpg" align:right alt="Image2" width="250 px" height="250px" style="padding:6px">
  </div>
  <div class="col-sm-6">
    <br>
    <br>
    <br>
    <h3>Skullcandy Ink'd Wired in-Earphone with Mic (Gray Mint)</h3>
    <h3>Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>1,060.00</h3>
  </div>

</div>
</a>
<a href="ear_3.php">
<div  class="grow" style="background-color:#CDEAF2;height:250px; width:900px; margin-left: auto; margin-right: auto; ">
  <div class="col-sm-6" >
  &nbsp &nbsp &nbsp<img src="img4.3.1.jpg" alt="Image3" width="250 px" height="250px" style="padding:6px">
  </div>
  <div class="col-sm-6">
    <br>
    <br>
    <br>
    <h3>Skullcandy Jib Wired in-Earphone with Mic (Blue/Black)</h3>
    <h3>Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>835.00</h3>
  </div>

</div>
</a>
<a href="ear_4.php">
<div  class="grow" style="background-color:#E6F3F6;height:250px; width:900px; margin-left: auto; margin-right: auto; ">
  <div class="col-sm-6" >
  &nbsp &nbsp &nbsp<img src="img4.4.1.jpg" alt="Image4" width="250 px" height="250px" style="padding:6px">
  </div>
  <div class="col-sm-6">
    <br>
    <br>
    <br>
    <h3>JBL Endurance Run Sweat-Proof Sports in-Ear Headphones  (Yellow)</h3>
    <h3>Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>1,249.00</h3>
  </div>

</div>
</a>
<a href="ear_5.php">
<div   class="grow"style="background-color:#CDEAF2;height:250px; width:900px; margin-left: auto; margin-right: auto; ">
  <div class="col-sm-6" >
  &nbsp &nbsp &nbsp<img src="img4.5.1.jpg" alt="Image4" width="250 px" height="250px" style="padding:6px">
  </div>
  <div class="col-sm-6">
    <br>
    <br>
    <h3>Boat Bassheads 242 Wired Sports Earphones with HD Sound (Neon Green)</h3>
    <h3>Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>549.00</h3>
  </div>

</div>
</a>

</body>
</html>
