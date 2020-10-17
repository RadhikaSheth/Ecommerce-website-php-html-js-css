<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 'on');
  $con = mysqli_connect('localhost', 'root', 'radhikaphp09','Project');
  if (!$con) {
      die('Could not connect: ' . mysqli_error());
  }
  $q = "INSERT INTO cart(username, image, name , price) VALUES ('radhika', 'img1.1.1.jpg', 'mobile', '12345')";
  $result   = mysqli_query($con, $q);
  if ($result) {
      echo "done!";
  }else{
    error_reporting(E_ALL);
    ini_set('display_errors', 'on');
  }

 ?>
