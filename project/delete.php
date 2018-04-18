<?php

  session_start();
  $con=mysqli_connect("localhost","root","yash18121998yadav","DBMSdata");
// Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    /*$var_value = $_SESSION['key'];*/



    if(isset($_POST['button'])){    //trigger button click

        $search=$_POST['search'];

        $_SESSION['search'] = $search;

        header("Location: search1.php");


    }


    $loguser=$_SESSION['username'];
    $user_name = $_GET['user'];
    $movie = $_GET['mov'];
$result1=$con->query("SELECT * FROM `moviedetails` WHERE UserName='$user_name'AND Name='$movie'");
$row=mysqli_fetch_array($result1);
$ret=$row["returndate"];
  $d1=date("Y-m-d");
  $date1=date_create($d1);
  $date2=date_create($ret);
  $diff=date_diff($date1,$date2);
  $a= $diff->format("%R%a");
  $sql = "DELETE FROM `moviedetails` WHERE UserName='$user_name' AND Name='$movie'";
  if($a>=0){
  if ($con->query($sql) === TRUE ) {
   header("Location: profile.php?user=$user_name");

} }else {
    echo '<script type="text/javascript">alert("pay fine!");</script>';

}
?>

<!Doctype html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

         <!--  <script type="text/javascript">
            function pass(img) {
                var src = img.src;
                window.open(src);
            }
          </script> -->
          <style type="text/css">

          footer {
              position: fixed;
              height: 100px;
              bottom: 0;
              width: 100%;
          }


          .full {
    background: url(background.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
    height:100%;
}


    </style>


</head>
<body>
<div class="full">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="profile.php"><?php echo $loguser ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Genres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="genretype.php?Genre=Action">Action</a>
          <a class="dropdown-item" href="genretype.php?Genre=Horror">Horror</a>
          <a class="dropdown-item" href="genretype.php?Genre=Sci-Fi">Sci-Fi</a>
          <a class="dropdown-item" href="genretype.php?Genre=Mystery">Mystery</a>
          <a class="dropdown-item" href="genretype.php?Genre=Romance">Romance</a>
          <a class="dropdown-item" href="genretype.php?Genre=Drama">Drama</a>
          <a class="dropdown-item" href="genretype.php?Genre=Comedy">Comedy</a>
          <a class="dropdown-item" href="genretype.php?Genre=Documentary">Documentary</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="genretype.php?Genre=top">Top-IMDB</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0" method="post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 mr-sm-2" type="submit" name="button">Search</button>
      <button class="btn btn-danger my-2 my-sm-0" type="submit" name="LogOut">Log Out</button>
    </form>
  </div>
</nav>
<div class="container">
  <div class="center">

<div class="card mt-5" style="width: 18rem;">
  <img class="card-img-top" src="bhim.png" alt="Card image cap">
  <div class="card-body">

    <div class="alert alert-warning" role="alert">

                    Pay your Fine!!
   </div>
  </div>
</div>

</div>
</div>





</div>









</body>
</html>
