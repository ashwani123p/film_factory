<?php

  session_start();
  $user_name = $_SESSION['username'];
  $con=mysqli_connect("localhost","root","yash18121998yadav","DBMSdata");
// Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

    /*$var_value = $_SESSION['key'];*/
    $user_name = $_SESSION['username'];
    $loguser=$_SESSION['username'];

    /*echo "$var_value";*/
$result=$con->query("select * from registration WHERE UserName='$user_name'");

    while($row_brand=mysqli_fetch_array($result)){
 $Name=$row_brand["FirstName"];
 $Email=$row_brand["Email"];}

$result1=$con->query("select * from moviedetails WHERE UserName='$user_name'");
$i=1;

while($row=mysqli_fetch_array($result1)){
  $movie[$i]=$row["Name"];
  $Issue[$i]=$row["issuedate"];
  $ret[$i]=$row["returndate"];
  $ac[$i]="delete.php?user=$user_name&mov=$movie[$i]";
  $i++;
}
$i--;


    if(isset($_POST['button'])){    //trigger button click

        $search=$_POST['search'];

        $_SESSION['search'] = $search;

        header("Location: search1.php");


    }

    if(isset($_POST['LogOut'])){    //trigger button click



        header("Location: UserLogin.php");


    }




?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="userprofile.css" rel="stylesheet">
<style>

</style>



  </head>

<body>

  <header>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width:1375px; ">
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

</header>






  <div class="content" style="height:100%; position:absolute; top: 55px; left:1px;"  >
    <div class="card">
        <div class="firstinfo"><img src="25.png"/>

            <div class="profileinfo" style="position:absolute; top: 55px; left: 0px;">
              <br><br><br><br><br>
                <h1><?php echo $Name; ?></h1>
                <h3> <?php echo $user_name; ?></h3>
                <p class="bio"> <a href="http://www.doyoubuzz.com/harun-pehlivan" target="_blank"><?php echo $Email; ?></a> </p>
            </div>
        </div>
    </div>
</div>
<div class="container" style="height:100%; width:80%; position:absolute; top: 55px; right: 0; background-color: rgba(141, 110, 99, 0.8); margin-left:0px;">
    <div class="row col-md-8 col-md-offset-2 custyle">
    <table class="table table-responsive table-striped custab ">
    <thead>
        <tr>
            <th>S.No.</th>
            <th>Movie Name</th>
            <th>Issue Date</th>
            <th>Return Date</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

            <?php
            if($i<1){?>
              <h3> NO MOVIE ISSUE </h3><?php }
            for ($l = 1; $l<$i+1; $l++){
              ?>
            <tr>
                <td><?php echo $l ?></td>
                <td><?php echo $movie[$l] ?></td>
                <td><?php echo $Issue[$l] ?></td>
                <td><?php echo $ret[$l] ?></td>
                <td class="text-center"><a href="<?php echo $ac[$l] ?>" ><button type="button">Return</button></a> </td>
            </tr>
         <?php }?>
    </table>
    <a href="home.php" class="btn btn-success btn-xs pull-right"><b>+</b> Add Movies</a>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </body>
  </html>
