<?php
  require ('db.php');
  $q = "INSERT INTO cart(username, image, name , price) VALUES ("radhika", "img1.1.1.jpg", "mobile", "12345");"
  $result   = mysqli_query($con, $q);
  if ($result) {
      echo "done!";
  }

 ?>
