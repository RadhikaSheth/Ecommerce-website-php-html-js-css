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
    $query2 = "INSERT INTO `cart`(`u_id`, `p_id`) VALUES ($row[0],'8')";
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
    <div class="col-sm-6" style="background-color:#B5DFD6; height:750px">
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
            <img class="img-responsive center-block" src="img2.3.1.jpg" alt="Image1" style="width:70%;">
          </div>

          <div class="item">
              <img class="img-responsive center-block" src="img2.3.2.jpg" alt="Image2" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img2.3.3.jpg" alt="Image3" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img2.3.4.jpg" alt="Image4" style="width:70%;">
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

    <div class="col-sm-6" style="background-color:#DBF5F0;height:750px " >

        <!-- product name -->
      <h2 >boAt Stone SpinX 2.0 R 12W Portable Wireless Speaker with 360° Stereo Sound, Up to 8H Playtime, IPX6 Water and Splash Resistance and TWS Feature(Charcoal Black)</h2>
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
      <p >&nbsp &nbsp M.R.P.:&nbsp &nbsp<span style="text-decoration: line-through;"> <i class="fa fa-inr" aria-hidden="true"></i>6,190.00</span></p>
      <p>&nbsp &nbsp Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>1,999.00</p>
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
        <li>1 year warranty from the date of purchase. For other product related queries please contact us at +912249461882 or info@imaginemarketingindia.com</li>
        <li>Delivered by 40mm x2 Dynamic Drivers for crystal clear audio reproduction and a passive bass radiator that accentuates the scene, elevate the vibes with Stone SpinX 2.0 R’s 360° stereo sound</li>
        <li>Amplify the party scenes with its TWS feature, meaning that you can connect two Stone SpinX 2.0 Rs and forge them into one</li>
        <li>Stone SpinX 2.0 R boasts of an ergonomic, portable and cylindrical design made to battle the elements with IPX6 Water resistant and a shock proof design made from ABS & Fabric Grill</li>
        <li>Equipped with a screw mount, fit the Stone SpinX 2.0 R atop a cycle and push off for a long ride with enthralling beats that keep you company</li>
        <li>Keep the vibes lit at for extended durations with the 2000mAh Lithium Battery with a charging time of 2-2.5 hours that offers a minimum playtime of up to 8 hours</li>
        <li>It’s easy access seamless controls let you control your playlist in a user friendly way</li>

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
      <th scope="row">Brand</th>
      <td>Boat</td>
    </tr>
    <tr>
      <th scope="row">Manufacturer</th>
      <td>	boAt, +912249461882</td>
    </tr>
    <tr>
      <th scope="row">Model</th>
      <td>	Stone SpinX 2.0R</td>
    </tr>
    <tr>
      <th scope="row">Product Dimensions</th>
      <td>16.5 x 6.8 x 6.7 cm; 599 Grams</td>
    </tr>
    <tr>
      <th scope="row">Item model number</th>
      <td>Stone SpinX 2.0R</td>
    </tr>
    <tr>
      <th scope="row">Mounting Hardware</th>
      <td>	1xboAt Stone SpinX 2.0 R, 1x USB Cable, 1x User Manual</td>
    </tr>
    <tr>
      <th scope="row">Battery Average Life</th>
      <td>8 Hours</td>
    </tr>
    <tr>
      <th scope="row">Batteries Required</th>
      <td>No</td>
    </tr>
    <tr>
      <th scope="row">Country of origin</th>
      <td>China</td>
    </tr>
    <tr>
      <th scope="row">Item Weight</th>
      <td>599 g</td>
    </tr>
    <tr>
      <th scope="row">Maximum Operating Distance</th>
      <td>1 Feet</td>
    </tr>
    <tr>
      <th scope="row">Mounting Type</th>
      <td>Table Top</td>
    </tr>
    <tr>
      <th scope="row">Best Sellers Rank</th>
      <td>	#458 in Electronics (See Top 100 in Electronics)#11 in Bluetooth Speakers</td>
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
