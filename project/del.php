<?php
session_start();
  $connect=mysqli_connect("localhost","root","yash18121998yadav","DBMSdata");
// Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    /*$var_value = $_SESSION['key'];*/
    $movie_name = $_POST['movie'];
    $query="DELETE FROM `DBMSdata` WHERE `Name`='$movie_name'";
    mysqli_query($connect,$query);
     header("Location: admin.php");
?>
