
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

      $query2 = "INSERT INTO `cart`(`u_id`, `p_id`) VALUES ($row[0],'1')";
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
  <a href="cart.php" style="float:right">&nbsp &nbsp <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart(<?php echo $_SESSION['totalrows']; ?>) &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>

</div>

<div class="container-fluid h-100">
  <div class="row justify-content-center h-100">
    <div class="col-sm-6" style="background-color:#B5DFD6; height:620px">
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
          <li data-target="#myCarousel" data-slide-to="4"></li>
          <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Just cahnge the number of images and the name under src. -->
        <div class="carousel-inner" style="align:center;">
          <div class="item active">
            <img class="img-responsive center-block" src="img1.1.1.jpg" alt="Image1" style="width:70%;">
          </div>

          <div class="item">
              <img class="img-responsive center-block" src="img1.1.2.jpg" alt="Image2" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.1.3.jpg" alt="Image3" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.1.4.jpg" alt="Image4" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.1.5.jpg" alt="Image5" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.1.6.jpg" alt="Image6" style="width:70%;">
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

    <div class="col-sm-6" style="background-color:#DBF5F0;height:620px " >

        <!-- product name -->
      <h2 >Apple iPhone 11 (128GB) - Purple</h2>
      <br>
       &nbsp &nbsp Rating:&nbsp
         <!-- change the stars as per the product rating. here first four are full and last one is half star. -->
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star" aria-hidden="true"></i>
      <i class="fa fa-star-half-o" aria-hidden="true"></i>
      <br>
      <br>
        <!-- Price-->
      <p >&nbsp &nbsp M.R.P.:&nbsp &nbsp<span style="text-decoration: line-through;"> <i class="fa fa-inr" aria-hidden="true"></i>73,600.00</span></p>
      <p>&nbsp &nbsp Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>71,099.00</p>
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
        <li>6.1-inch (15.5 cm) Liquid Retina HD LCD display</li>
        <li>Water and dust resistant (2 meters for up to 30 minutes, IP68)</li>
        <li>Dual-camera system with 12MP Ultra Wide and Wide cameras; Night mode, Portrait mode, and 4K video up to 60fps</li>
        <li>12MP TrueDepth front camera with Portrait mode, 4K video, and Slo-Mo</li>
        <li>Face ID for secure authentication and Apple Pay</li>
        <li>A13 Bionic chip with third-generation Neural Engine</li>
        <li>Fast-charge capable</li>
        <li>Wireless charging</li>
        <li>iOS13 with Dark Mode, new tools for editing photos and video, and brand new privacy features</li>

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
      <th scope="row">Display</th>
      <td>6.1-inch Liquid Retina HD display with True Tone</td>
    </tr>
    <tr>
      <th scope="row">Capacity</th>
      <td>64GB, 128GB, 256GB</td>
    </tr>
    <tr>
      <th scope="row">Splash, Water, and Dust Resistant</th>
      <td>Water resistant to a depth of 2 metres for up to 30 minutes (IP68)</td>
    </tr>
    <tr>
      <th scope="row">Camera and Video</th>
      <td>Dual 12MP cameras (Ultra Wide, Wide) with Portrait mode, Night mode, Auto Adjustments, next-generation Smart HDR and 4K video up to 60 fps with extended dynamic range</td>
    </tr>
    <tr>
      <th scope="row">Front Camera</th>
      <td>12MP TrueDepth front camera with Portrait mode, Smart HDR, 4K video recording up to 60 fps and slo-mo video support for 1080p at 120 fps</td>
    </tr>
    <tr>
      <th scope="row">Power and Battery</th>
      <td>Up to 17 hours video playback; up to 10 hours video streaming</td>
    </tr>
    <tr>
      <th scope="row">In the Box</th>
      <td>iPhone, EarPods with Lightning Connector, Lightning to USB Cable, 5W USB Power Adapter, Documentation</td>
    </tr>
    <tr>
      <th scope="row">Warranty</th>
      <td>1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</td>
    </tr>
    <tr>
      <th scope="row">Height</th>
      <td>150.9 mm (5.94 inches)</td>
    </tr>
    <tr>
      <th scope="row">Width</th>
      <td>75.7 mm (2.98 inches)</td>
    </tr>
    <tr>
      <th scope="row">Depth</th>
      <td>8.3 mm (0.33 inches)</td>
    </tr>
    <tr>
      <th scope="row">Weight</th>
      <td>194 grams (6.84 ounces)</td>
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
