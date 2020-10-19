
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
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylefile.css">
  <!-- No need to change any CSS here-->

</head>
<body>
  <?php
    require('db.php');
    session_start();
    $a = $_SESSION['username'];
    $query = "SELECT `u_id` FROM `users` WHERE `u_name` = '$a' ";
    //$query1 = " SELECT u_id FROM users WHERE u_name= $a ";
    $result1 = mysqli_query($con, $query);
    $row = mysqli_fetch_row($result1);
    $_SESSION['u_idd'] = $row[0];
    if(!($result1)){
      echo("Error description: " . mysqli_error($con));
    }
    if(isset($_POST['addTOCart'])){

      $query2 = "INSERT INTO `cart`(`u_id`, `p_id`) VALUES ($row[0],'2')";
      $result2 = mysqli_query($con, $query2);
      if($result1){?>
      <script>
    $(document).ready(function() {
        toastr.info('ADDED TO CART!');
    });
 </script> <?php
         // echo "string";
      }else{
        echo("Error description: " . mysqli_error($con));
      }
    }
  $u_idd = $_SESSION['u_idd'];
  $query6 = "SELECT COUNT(*) FROM `cart` WHERE `u_id` = $u_idd ";
  $result6 = mysqli_query($con, $query6);
  if($result6){
  $rowcount = mysqli_fetch_array($result6);
  $totalrows = $rowcount[0];
  $_SESSION['totalrows'] = $totalrows;

  }else{
    echo("Error description: " . mysqli_error($con));
  }
  $printrow = $_SESSION['totalrows'];
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

<div class="container-fluid h-100">
  <div class="row justify-content-center h-100">
    <div class="col-sm-6" style="background-color:#B5DFD6; height:800px">
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
            <img class="img-responsive center-block" src="img1.2.1.jpg" alt="Image1" style="width:70%;">
          </div>

          <div class="item">
              <img class="img-responsive center-block" src="img1.2.2.jpg" alt="Image2" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.2.3.jpg" alt="Image3" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.2.4.jpg" alt="Image4" style="width:70%;">
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

    <div class="col-sm-6" style="background-color:#DBF5F0;height:800px " >

        <!-- product name -->
      <h2 >Redmi Note 9 Pro Max (Interstellar Black, 8GB RAM, 128GB Storage) - 64MP Quad Camera & Latest 8nm Snapdragon 720G | with 12 Months No Cost EMI</h2>
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
      <p >&nbsp &nbsp M.R.P.:&nbsp &nbsp<span style="text-decoration: line-through;"> <i class="fa fa-inr" aria-hidden="true"></i>22,999.00</span></p>
      <p>&nbsp &nbsp Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>19,999.00</p>
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
        <li>64MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 32MP front camera</li>
        <li>16.9418 centimeters (6.67-inch) FHD+ LCD full screen dot display multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass</li>
        <li>The all-new Interstellar Black colour combines different hues of grey and blue together to deliver a shade that mesmerizes you</li>
        <li>Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor</li>
        <li>Memory, Storage & SIM: 8GB RAM | 128GB internal memory expandable up to 512GB with dedicated SD card slot | Dual SIM (nano+nano) dual-standby (4G+4G)</li>
        <li>5020mAH lithium-polymer large battery providing talk-time of 29 hours and standby time of 492 hours | 33W fast charger in-box and Type-C connectivity</li>
        <li>1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
        <li>Box also includes: Power adapter, USB cable, SIM eject tool, Warranty card, User guide, Clear soft case, Screen protector pre-applied on the phone</li>


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
      <td>16.6 x 0.9 x 7.7 cm; 209 Grams</td>
    </tr>
    <tr>
      <th scope="row">Item model number</th>
      <td>Redmi Note 9 Pro Max</td>
    </tr>
    <tr>
      <th scope="row">Connectivity technologies</th>
      <td>4G, IR blaster, Wi-Fi, NavIC, GLONASS, 802.11 a/b/g/n/ac, USB 2.0 OTG, Bluetooth v5.0 wireless technology, GPS, BeiDou</td>
    </tr>
    <tr>
      <th scope="row">Special features</th>
      <td>Dual SIM, Infrared, Accelerometer, Ambient light sensor, Gyroscope, GPS, Video Player, Music Player, Proximity sensor</td>
    </tr>
    <tr>
      <th scope="row">Display technology</th>
      <td>1080 x 2400 pixels, 20:9 ratio (~395 ppi density),Corning Gorilla Glass 5, 450 nits typ. brightness</td>
    </tr>
    <tr>
      <th scope="row">Other display features</th>
      <td>Wireless</td>
    </tr>
    <tr>
      <th scope="row">Resolution</th>
      <td>2400 x 1080</td>
    </tr>
    <tr>
      <th scope="row">Other camera features</th>
      <td>64MP+8MP+5MP+2MP</td>
    </tr>
    <tr>
      <th scope="row">Form factor</th>
      <td>Touchscreen Phone</td>
    </tr>
    <tr>
      <th scope="row">Battery Power Rating</th>
      <td>5020</td>
    </tr>
    <tr>
      <th scope="row">Whats in the box</th>
      <td>Handset, Power adapter, USB cable, SIM eject tool, Warranty card, User guide, Clear soft case, Screen protector pre-applied on the phone</td>
    </tr>
    <tr>
      <th scope="row">Item Weight</th>
      <td>209 g</td>
    </tr>
    <tr>
      <th scope="row">Best Sellers Rank</th>
      <td>#4,578 in Electronics (See Top 100 in Electronics)#280 in Smartphones</td>
    </tr>
    <tr>
      <th scope="row">Manufacturer</th>
      <td>Redmi, Rising Stars Mobile India Pvt Ltd., 380 Belerica Road, Sri City, Chittoor District, Andra Pradesh - 517646. Phone : 1800 1036286</td>
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
            <li><a href="smartPhones.php">Smart Phones</a></li>
            <li><a href="speakers.php">Speakers</a></li>
            <li><a href="headphones.php">Headphones</a></li>
            <li><a href="earphones.php">Earphones</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>

</footer>

</body>
</html>
