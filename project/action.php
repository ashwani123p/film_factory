<?php
$host="localhost";
 $user="root";
 $password="yash18121998yadav";
 $db="DBMSdata";
$connect = mysqli_connect($host,$user,$password,$db);
$errors = array();


if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $genre=$_POST['genre'];
  $year=$_POST['year'];
  $imdb=$_POST['imdb'];
  $actors=$_POST['actors'];
  $director=$_POST['director'];
  $info=$_POST['info'];
  $imag = $_FILES['image']['name'];
  $link=$_POST['link'];
    $query = "INSERT INTO `DBMSdata` (`ID`, `Genre`, `Name`, `Year Of Release`, `ImDb Rating`, `Actors`,
    `Directors`, `Info`,`Picture`, `Link`) VALUES (NULL,'$genre', '$name', '$year', '$imdb','$actors','$director','$info','$imag','$link')";
    mysqli_query($connect,$query);
    //$_SESSION['username'] = $username;
    //$_SESSION['success'] = "You are now logged in";
    header('location: admin.php' );
}

?>
