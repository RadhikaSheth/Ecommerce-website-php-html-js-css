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
    $query2 = "INSERT INTO `cart`(`u_id`, `p_id`) VALUES ($row[0],'5')";
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
      <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width:95%;align:center;">

        <!-- Change the number of list items according to the number of images -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>

        </ol>

        <!-- Just cahnge the number of images and the name under src. -->
        <div class="carousel-inner" style="align:center;">
          <div class="item active">
            <img class="img-responsive center-block" src="img1.5.1.jpg" alt="Image1" style="width:450px;height:450px">
          </div>

          <div class="item">
              <img class="img-responsive center-block" src="img1.5.2.jpg" alt="Image2" style="width:450px;height:580px">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.5.3.jpg" alt="Image3" style="width:350px;height:580px">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.5.4.jpg" alt="Image4" >
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
      <h2 >Vivo V19 (Piano Black, 8GB RAM, 128GB Storage) with No Cost EMI/Additional Exchange Offers)</h2>
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
      <p >&nbsp &nbsp M.R.P.:&nbsp &nbsp<span style="text-decoration: line-through;"> <i class="fa fa-inr" aria-hidden="true"></i>30,990.00</span></p>
      <p>&nbsp &nbsp Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>24,990.00</p>
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
        <li>48MP+8MP+2MP+2MPMP AI Quad rear camera with super night mode, ultra stable video, art portrait video, super macro, bokeh portrait | 32MP+8MP front facing camera</li>
        <li>16.36 centimeters (6.44-inch) FHD+ LIV (E3) Super AMOLED with 2400 x 1080 pixels resolution | In-Display Fingerprint</li>
        <li>Memory, Storage & SIM: 8GB RAM | 128GB internal memory expandable up to 512GB | Dual SIM (nano+nano) dual-standby (4G+4G)</li>
        <li>Funtouch OS 10 (Based on Android v10) operating system with 2.0GHz Qualcomm Snapdragon 712 AIE octa core processor</li>
        <li>4500mAH lithium-ion battery with 33W type-C vivo flash charge 2.0</li>
        <li>1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
        <li>Box also includes: Earphone, Type-C to USB Cable, USB Power Adapter, SIM Ejector, Protective Case, Protective Film (applied) and Documentation</li>

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
      <td>16 x 0.9 x 7.5 cm; 187 Grams</td>
    </tr>
    <tr>
      <th scope="row">Batteries</th>
      <td>1 Lithium Polymer batteries required. (included)</td>
    </tr>
    <tr>
      <th scope="row">Connectivity technologies</th>
      <td>	2G;GSM;(B2/3/5/8);3G;WCDMA;(B1/5/8);4G;TDD_LTE;(B38/40/41);4G;FDD_LTE;(B1/3/5/8)</td>
    </tr>
    <tr>
      <th scope="row">Special features</th>
      <td>Dual SIM;GPS;Music Player;Video Player;;In-Display Fingerprint Scanning;Accelerometer;Ambient light sensor;Proximity;E-compass and Gyroscope sensor;E-mail</td>
    </tr>
    <tr>
      <th scope="row">Other display features</th>
      <td>Wireless</td>
    </tr>
    <tr>
      <th scope="row">Other camera features</th>
      <td>	48MP+8MP+2MP+2MP</td>
    </tr>
    <tr>
      <th scope="row">Colour</th>
      <td>Piano Black</td>
    </tr>
    <tr>
      <th scope="row">Whats in the box</th>
      <td>	Handset, Earphone, Type-C to USB Cable, USB Power Adapter, SIM Ejector, Protective Case, Protective Film (applied) and Documentation</td>
    </tr>
    <tr>
      <th scope="row">Item Weight</th>
      <td>187 g</td>
    </tr>
    <tr>
      <th scope="row">Best Sellers Rank</th>
      <td>	#3,950 in Electronics (See Top 100 in Electronics)#261 in Smartphones</td>
    </tr>
    <tr>
      <th scope="row">Manufacturer</th>
      <td>	Vivo, vivo Mobile India Pvt. Ltd. 10th & 11th Floor, Palm Springs Plaza (Complex), Village Wazirabad, Sector-54, Gurugram- 122003, Haryana, India.</td>
    </tr>
    <tr>
      <th scope="row">Item Dimensions LxWxH</th>
      <td>16 x 0.9 x 7.5 Centimeters</td>
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
