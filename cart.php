<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="stylefile.css">
  <style>
  td.description {
  vertical-align: top;
}
  td{
    padding: 15px;
    text-align: center;
    vertical-align: middle;
  }
  table.TFtable tr: nth-child(odd){
    background: black;
  }
  table.TFtable tr: nth-child(even){
    background: #dae5f4;
  }
  table.center {
  margin-left:auto;
  margin-right:auto;
}
  tr:nth-child(even){
  background-color: #f2f2f2;
  }
  .footer {
   left: 0;
   bottom: 0;
   width: 100%;
   height: 50px;
   background-color: black;
   color: white;
   text-align: center;
   text-decoration-color: white;
 }
 form {
  text-align: center;
}

  </style>
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
    echo("Error description: " . mysqli_error($con));
  }
  $printrow = $_SESSION['totalrows'];
   ?>
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

  <a href="cart.php" style="float:right">&nbsp &nbsp &nbsp &nbsp <i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp Cart (<?php echo $_SESSION['totalrows']; ?>)&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</a>
</div>


<?php
  require('db.php');
  session_start();

    $a = $_SESSION['username'];
    $query = "SELECT `u_id` FROM `users` WHERE `u_name` = '$a' ";
    //$query1 = " SELECT u_id FROM users WHERE u_name= $a ";
    $result1 = mysqli_query($con, $query);
    $row = mysqli_fetch_row($result1);
    if($result1){

    }else{
      echo("Error description: " . mysqli_error($con));
    }
    $u_idd = $row[0];
    $query3 =  "SELECT * FROM `cart` WHERE `u_id` = $u_idd ";
    $result3 = mysqli_query($con,$query3);
    $sr_no = 1;
    $sum = 0; ?>
      <table class="table table-hover center table-striped table-dark"  style="width:900px">
    <?php
    if($result3){
      while ($row3 = mysqli_fetch_row($result3)) {
          $cid = $row3[0];
          $pid = $row3[2];
          $q =" SELECT * FROM `product` WHERE `p_id`=$row3[2] ";
          $r = mysqli_query($con,$q);
         if($r){
            while($rs = mysqli_fetch_row($r)){
              $GLOBALS['m']=$GLOBALS['m']+1;
    ?>

                  <!-- <div  class="table table-hover center table-striped table-dark"  style="height:181px; width:900px; margin-left: auto; margin-right: auto;border:1px black" > -->

                  <tr>
                  <td style="width:60px" class="description">
                    <?php echo $sr_no ;
                      $sr_no++;
                      ?>
                  </td>
                  <td style="width:140px" class="description">
                  <?php
                  //echo '<img src="data:image/jpg;base64,' . base64_encode( $rs[1] ) . '" />'; style ="padding:10px; height:250px; width:250px;"
                  //echo '<div class="caption"  style=" height:250px weight:250px" class="caption"><img  src="data:image/jpeg;base64,'. base64_encode($rs[1]) .'" />'.'</div>';
                  echo '<div   class="caption"><img   style ="padding:10px; height:150px; width:150px;" src="data:image/jpeg;base64,'.base64_encode($rs[1]). '"/>'.'</div>';
                  ?>
                  </td>
                  <td style="width:390px" class="description">
                  <?php
                  echo $rs[2];

                  ?>
                  </td>
                  <td style="width:140px" class="description" >
                  <?php
                  echo $rs[3];
                  $sum += $rs[3];
                  ?>
                  </td>
                  <td class="description">
                    <form method="POST">
                    <button type="submit" class="btn btn-primary" name="udelete" value="<?php echo $cid;?>">Delete</button>
                    <?php  if(isset($_POST['udelete']))
                    {
                     $x=$_POST['udelete'];
 //                     delete t
 // from   yourtable t
 // where  yourColumn = (select top 1 yourColumn from yourtable order by . . . )
                     $query4 = "DELETE  FROM `cart`  WHERE `c_id` = '$x' LIMIT 1";

                     $result4 = mysqli_query($con,$query4);
                     header("Location: cart.php");
                     // "DELETE  FROM `cart` WHERE `p_id` = $x ";
                    }?>
                    </form>
                  </td>
                  </tr>


<!--
              </div> -->
    <?php


            }
          }else{
            echo("Error description: " . mysqli_error($con));
          }

      }
    }else{
      echo("Error description: " . mysqli_error($con));
    }
    ?>
      </table>
<br>
<br>
<br>
  <?php
    if($GLOBALS['m']==0){ ?>
    <form>
    <h2>Your Cart is Empty!</h2>
  </form>
    <?php
    }else{ ?>
     <form method="post" >
       <span style="font-size:150%"><b>YOUR TOTAL AMOUNT IS: <b><i class="fa fa-inr" aria-hidden="true"></i> <?php echo $sum ?> &nbsp &nbsp &nbsp</span>
       <button type="submit" class="btn btn-primary" name="pay">PAY</button>
       <?php  if(isset($_POST['pay']))
       {

         echo '<script>window.location.href = "pay.php";</script>';
        $query5 =  "DELETE FROM `cart` WHERE `u_id`= '$u_idd'";
        $result5 = mysqli_query($con,$query5);
        if($result5){
          header('Location: home.html');
        }else{
          echo("Error description: " . mysqli_error($con));
        }


       }?>
     </form>
   <?php } ?>

<!-- echo "Your the total amount is:   ".$sum; -->

</body>
</html>
