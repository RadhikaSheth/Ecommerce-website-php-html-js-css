
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

      $query2 = "INSERT INTO `cart`(`u_id`, `p_id`) VALUES ($row[0],'3')";
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
    <div class="col-sm-6" style="background-color:#B5DFD6; height:650px">
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
            <img class="img-responsive center-block" src="img1.3.1.jpg" alt="Image1" style="width:70%;">
          </div>

          <div class="item">
              <img class="img-responsive center-block" src="img1.3.2.jpg" alt="Image2" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.3.3.jpg" alt="Image3" style="width:70%;">
          </div>

          <div class="item">
            <img class="img-responsive center-block" src="img1.3.4.jpg" alt="Image4" style="width:70%;">
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

    <div class="col-sm-6" style="background-color:#DBF5F0;height:650px " >

        <!-- product name -->
      <h2 >Honor 9X (Sapphire Blue, 6+128GB Storage) -Pop up Front Camera & 48MP Triple Rear Camera</h2>
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
      <p >&nbsp &nbsp M.R.P.:&nbsp &nbsp<span style="text-decoration: line-through;"> <i class="fa fa-inr" aria-hidden="true"></i>19,999.00</span></p>
      <p>&nbsp &nbsp Price: &nbsp &nbsp &nbsp<i class="fa fa-inr" aria-hidden="true"></i>16,999.00</p>
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
        <li>48MP + 8MP + 2MP rear camera and 16MP front facing camera</li>
        <li>16.73 centimeters (6.59-inch) with 2340 x 1080 pixels resolution, 391 ppi pixel density and 16.7M color support</li>
        <li>Memory, Storage & SIM: 6GB RAM | 128GB storage expandable up to 512GB| Dual SIM with dual standby (4G+4G)</li>
        <li>EMUI 9.1.0 based on Android 9 operating system with 2.2GHz Kirin 710 F octa core processor</li>
        <li>4000mAH Lithium polymer battery</li>
        <li>1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</li>
        <li>Box also includes : Charger, USB cable(Type C), Quick Start Guide, Warranty Card, Eject tool, TPU Protective case</li>

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
      <td>6 GB</td>
    </tr>
    <tr>
      <th scope="row">Product Dimensions</th>
      <td>	16.4 x 0.9 x 7.7 cm; 197 Grams</td>
    </tr>
    <tr>
      <th scope="row">Batteries</th>
      <td>1 Lithium Polymer batteries required. (included)</td>
    </tr>
    <tr>
      <th scope="row">Connectivity technologies</th>
      <td>2G GSM: B2/3/5/8, 4G LTE FDD: B1/B3/B5/B7/B8/B28, 3G UMTS: B1/5/8, 4G LTE TDD: B38/40/41</td>
    </tr>
    <tr>
      <th scope="row">Special features</th>
      <td>Dual SIM</td>
    </tr>
    <tr>
      <th scope="row">Resolution</th>
      <td>2340 x 1080</td>
    </tr>
    <tr>
      <th scope="row">Other camera features</th>
      <td>48MP + 8MP + 2MP</td>
    </tr>
    <tr>
      <th scope="row">Colour</th>
      <td>Sapphire Blue</td>
    </tr>
    <tr>
      <th scope="row">Whats in the box</th>
      <td>Handset, Charger, USB cable(Type C), Quick Start Guide, Warranty Card, Eject tool, TPU Protective case</td>
    </tr>
    <tr>
      <th scope="row">Item Weight</th>
      <td>197 g</td>
    </tr>
    <tr>
      <th scope="row">Best Sellers Rank</th>
      <td>#5,853 in Electronics (See Top 100 in Electronics)#335 in Smartphones</td>
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
