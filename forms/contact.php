<?php
  $N=$_POST['name'];
  $E=$_POST['email'];
  $M=$_POST['message'];
  $database="ohh";
  $username="root";
  $password="";
  $query="INSERT INTO `ret` VALUES ('','$N','$E','$M')";
  $con=mysqli_connect("localhost","$username","$password","$database") or die("DAMNNNN");
  mysqli_query($con,$query) or die("CRAPPP");
  echo "Submitted";
  mysqli_close($con);

?>
