<?php
  require('db.php');
  session_start();
  if(isset($_POST['addTOCart'])){
    $a = $_SESSION['username'];
    $query = "SELECT `u_id` FROM `users` WHERE `u_name` = '$a' ";
    //$query1 = " SELECT u_id FROM users WHERE u_name= $a ";
    $result1 = mysqli_query($con, $query);
    $row = mysqli_fetch_row($result1);
    if(!($result1)){
      echo("Error description: " . mysqli_error($con));
    }
    $query2 = "INSERT INTO `cart`(`u_id`, `p_id`) VALUES ($row[0],'4')";
    $result2 = mysqli_query($con, $query2);
    if($result1){
      echo '<script>alert("Product added to cart!")</script>';
    }else{
      echo("Error description: " . mysqli_error($con));
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylefile.css">
  <!-- No need to change any CSS here-->

</head>
<body>

  <div class="topnav">
  <h1 style="text-align:center; color:white">&nbsp &nbsp ONECLICK CART<sub style="font-size:40%"> FIND IT! LOVE IT! BUY IT!</sub></h1>

</div>
<div class="topnav">
  <a href="home.html">&nbsp HOME &nbsp &nbsp</a>
  <a href="smartPhones.html">&nbsp Smart Phones &nbsp &nbsp</a>
  <a href="speakers.html">&nbsp Speakers &nbsp &nbsp</a>
  <a href="headphones.html">&nbsp Headphones &nbsp &nbsp</a>
  <a href="earphones.html">&nbsp Earphones &nbsp &nbsp</a>
  <a href="logout.php" style="float:right">&nbsp &nbsp Logout &nbsp &nbsp</a>
  <a href="cart.php" style="float:right">&nbsp &nbsp &nbsp &nbsp <i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp Cart &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
</div>

<div class="container-fluid h-100">
  <div class="row justify-content-center h-100">
    <div class="col-sm-6" style="background-color:#B5DFD6; height:680px">
      <br>
      <br>
      <br>
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:95%;align:center">

        <!-- Change the number of list items according to the number of images -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>

        </ol>

        <!-- Just cahnge the number of images and the name under src. -->
        <div class="carousel-inner" style="align:center;">
          <div class="item active">
            <img class="img-responsive center-block" src="img1.4.1.jpg" alt="Image1" style="width:70%;">
          </div>

          <div class="item">
              <img class="img-responsive center-block" src="img1.4.2.jpg" alt="Image2" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.4.3.jpg" alt="Image3" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.4.4.jpg" alt="Image4" style="width:70%;">
          </div>

        </div>

        <!-- No Change here -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="col-sm-6" style="background-color:#DBF5F0;height:680px " >

        <!-- product name -->
      <h2 >OnePlus 8 Pro (Black 8GB RAM+128GB Storage)</h2>
      <br>
       &nbsp &nbsp Rating:&nbsp
         <!-- change the stars as per the product rating. here first four are full and last one is half star. -->
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star-o" aria-hidden="true"></i>
      <br>
      <br>
        <!-- Price-->

      <p>&nbsp &nbsp Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>54,999.00</p>
      <p style="color:#2E86C1"><b> &nbsp &nbsp IN STOCK!</b></p>
      <br>
      <form method="POST">
        <button type="submit" class="btn btn-info btn-lg" name="addTOCart" id="addTOCart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp Add to Cart</button>
      </form>
      <br>
      <br>
      <br>
      <ul style="width:600px " >
          <!-- Quick details -->
        <li>48MP rear camera with 4k video at 30/60 fps, 1080p video at 30/60 fps, super slow motion: 720p video at 480 fps, 1080p video at 240fps, time-lapse: 1080p 30fps, 4k 30fps, cine aspect ratio video recording, video hdr, cat&dog face detect & focus, ultrashot hdr, nightscape, super micro, portrait, pro mode, panorama, ai scene detection, raw image, audio zoom, audio 3d, infrared photography camera | 16MP front camera</li>
        <li>17.22 centimeters (6.78-inch) 120Hz fluid display with 3168 x 1440 pixels resolution, 513 ppi pixel density and vibrant color effect color support</li>
        <li>Memory, Storage & SIM: 8GB RAM | 128GB internal memory | Dual SIM (nano+nano) dual-standby (5G+5G)</li>
        <li>Oxygen OS based on Android v10 operating system with 2.86GHz of clock speed with Qualcomm Snapdragon 865, powered by Kryo 585 CPU octa core processor, Adreno 650</li>
        <li>4510mAH lithium-ion battery</li>
        <li>1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
        <li>Box also includes: Warp charge 30t power adapter, warp type-c cable (support usb 2.0), quick start guide, welcome letter, safety information and warranty card, logo sticker, case, screen protector (pre-applied), sim tray ejector</li>

      </ul>
    </div>
  </div>
  <div class="container-fluid h-100">
    <br>
    <br>
    <h2 style="text-align:center">Technical Details</h2>
    <br>
    <br>
      <!-- Change the table as per the details.-->
  <table class="table table-hover center table-striped table-dark" style="width:900px">
    <tr>
      <th scope="row">OS</th>
      <td>Android</td>
    </tr>
    <tr>
      <th scope="row">RAM</th>
      <td>8 GB</td>
    </tr>
    <tr>
      <th scope="row">Product Dimensions</th>
      <td>16.5 x 0.9 x 7.4 cm; 199 Grams</td>
    </tr>
    <tr>
      <th scope="row">Batteries</th>
      <td>1 Lithium Polymer batteries required. (included)</td>
    </tr>
    <tr>
      <th scope="row">Connectivity technologies</th>
      <td>GSM, BC0(Roaming), Wi-Fi 802.11 a/b/g/n/ac/ax, 2.4G/5G, Wi-Fi 6, Bluetooth 5.1, support aptX & aptX HD & LDAC & AAC, NFC enabled, LTE-FDD, NR, WCDMA, CDMA, (B1/2/3/4/5/7/8/12/17/18/19/20/26), N78, (B1/B2/B4/B5/B8/B9/B19), 5G, (850/900/1800/1900), (B1/3/41/40), LTE-TDD, 5G SA, (B34/38/39/40/41/46), MIMO, LTE, NSA, N78, 2x2 MIMO</td>
    </tr>
    <tr>
      <th scope="row">Special features</th>
      <td>Dual SIM, In-display fingerprint sensor, Electronic compass, Accelerometer, Ambient light sensor, Gyroscope, Sensor core, GPS, Proximity sensor</td>
    </tr>
    <tr>
      <th scope="row">Other display features</th>
      <td>Wireless</td>
    </tr>
    <tr>
      <th scope="row">Other camera features</th>
      <td>48MP+8MP+48MP+5MP</td>
    </tr>
    <tr>
      <th scope="row">Colour</th>
      <td>Black</td>
    </tr>
    <tr>
      <th scope="row">Whats in the box</th>
      <td>	Handset, Warp Charge 30T Power Adapter, Warp Type-C Cable (Support USB 2.0), Quick Start Guide, Welcome Letter, Safety Information and Warranty Card, LOGO Sticker, Case, Screen Protector (pre-applied), SIM Tray Ejector</td>
    </tr>
    <tr>
      <th scope="row">Item Weight</th>
      <td>199 g</td>
    </tr>
    <tr>
      <th scope="row">Best Sellers Rank</th>
      <td>#814 in Electronics (See Top 100 in Electronics)#117 in Smartphones</td>
    </tr>
    <tr>
      <th scope="row">Manufacturer</th>
      <td>	OnePlus, OPPO Mobiles India Private Limited, PLOT-NO.1, SECTOR ECOTECH-VII, GREATER, NOIDA, UTTAR PRADESH, India-201306</td>
    </tr>
    <tr>
      <th scope="row">Item Dimensions LxWxH</th>
      <td>	16.5 x 0.9 x 7.4 Centimeters</td>
    </tr>


  </table>
</div>
</div>
  <!-- No Change here -->
  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 ">
          <h6>About</h6>
          <p class="text-justify">Our company assures you, the best quality of products with the best possible deals! Just click it and have the most amazing products in your hands by minimum time!<i>  FIND IT! LOVE IT! BUY IT!</i></p>
        </div>

        <div class="col-sm-6"  style="text-align:center;">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li><a href="smartPhones.html">Smart Phones</a></li>
            <li><a href="speakers.html">Speakers</a></li>
            <li><a href="headphones.html">Headphones</a></li>
            <li><a href="earphones.html">Earphones</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>

</footer>

</body>
</html>
