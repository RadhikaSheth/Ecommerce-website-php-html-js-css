<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylefile.css">

</head>
<body>
  <?php
  require 'db.php';
  session_start();
  $u_idd = $_SESSION['u_idd'];
  $query6 = "SELECT COUNT(*) FROM `cart` WHERE `u_id` = $u_idd ";
  $result6 = mysqli_query($con, $query6);
  if($result6){
  $rowcount = mysqli_fetch_array($result6);
  $totalrows = $rowcount[0];
  $_SESSION['totalrows'] = $totalrows;

  }else{
    echo("1Error description: " . mysqli_error($con));
  }

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
<a href="smartPhones.php">
  <div style="background-color:#F6EDCF; height:250px" >
    <div class="col-sm-6" >
      <img src="home1.jpg" alt="Image1" width="450 px" height="250px">
    </div>
    <div class="col-sm-6">
      <br>
      <br>
      <h1 style="color:#1A5276"> GET BEST SMARTPHONES</h1>
      <h1 style="color:#1A5276"> AT BEST PRICE</h1>
    </div>
  </div>
</a>
<a href="speakers.php">
<div style="background-color:#FODAB1; height:250px">
  <div class="col-sm-6" >
    <img src="home2.jpg" align:right alt="Image2" width="450 px" height="250px">
  </div>
  <div class="col-sm-6">
    <br>
    <br>
    <h1 style="color:#283747"> GET POWERFUL SOUND </h1>
    <h1 style="color:#283747"> WITH LOUD SPEAKERS</h1>
  </div>

</div>
</a>
<a href="headphones.php">
<div style="background-color:#DAF1F9; height:250px">
  <div class="col-sm-6" >
  <img src="home3.jpg" alt="Image3" width="450 px" height="250px">
  </div>
  <div class="col-sm-6">
    <br>
    <br>
    <h1 style="color:#17202A "> BUY COMFORTABLE AND </h1>
    <h1 style="color:#17202A "> ADJUSTABLE HEADPHONES</h1>
  </div>

</div>
</a>
<a href="earphones.php">
<div style="background-color:#A4D7E1; height:250px">
  <div class="col-sm-6" >
  <img src="home4.jpg" alt="Image4" width="450 px" height="250px">
  </div>
  <div class="col-sm-6">
    <br>
    <br>
    <h1 style="color:#17202A "> GET LOW-COST EARPHONES </h1>
    <h1 style="color:#17202A "> WITH AMAZING SOUND QUALITY</h1>
  </div>

</div>
</a>

</body>
</html>
