<?php
  session_start();
  $con=mysqli_connect("localhost","root","yash18121998yadav","DBMSdata");
// Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $loguser=$_SESSION['username'];




$result=$con->query("select * from DBMSdata");

    $i=1;

      $j=1;

    while($row_brand=mysqli_fetch_array($result))
    {
        $brand_image = $row_brand["Picture"];
        $var_value[$i]= $row_brand["ID"];
        $image_data[$i] = '<img class="card-img-top" src="data:image/jpeg;base64,'.base64_encode( $brand_image ).'"/>';
        $i++;
    }


$i=21;
    if(isset($_POST['button'])){    //trigger button click

        $search=$_POST['search'];

        $_SESSION['search'] = $search;

        header("Location: search1.php");


    }

    if(isset($_POST['LogOut'])){    //trigger button click



        header("Location: UserLogin.php");


    }

    /*function passp($var1){
        echo hello;
        $_SESSION['key'] = $var_value[$var1];
        header("Location: chk.php");
    }
    */

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
<div class="container" style="width:70%; height:100%;">
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>


      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="1.jpg" alt="First slide" style="height:400px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="2.jpg" alt="Second slide" style="height:400px">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="3.jpg" alt="Third slide" style="height:400px">
        </div>
         <div class="carousel-item">
          <img class="d-block w-100" src="4.jpg" alt="Fourth slide" style="height:400px">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
</div>



      <nav aria-label="breadcrumb container">
        <ol class="breadcrumb  alert-danger">
          <li class="breadcrumb-item active " aria-current="page">Home</li>
        </ol>
      </nav>
<!-- //tile -->



<div class="container ">


        <?php
        for ($k = 1; ;  ){
              if($j==$i){
                      break;
                    }

          ?>


            <div class="card-deck container mb-3 mt-3">

                <?php
                  for ($l = 1; $l<=5; $l++){
                    if($j==$i){
                      break;
                    }
                    ?>
                      <div class="card ">

                          <a href="chk.php?id=<?php echo $var_value[$j]; ?>">

                             <?php echo $image_data[$j];
                             $j++;
                             ?>
                          </a>
                      </div>
                    <?php } ?>
            </div>
                <?php } ?>

</div>


<!-- endinig -->




</div>




</body>

<footer>
  <div class="footer navbar-fixed-bottom">
  <div style="position:fixed; bottom: 0px; width:100%;">
  <div style="width:100%;">
  <div style="width:941px; background-color: rgba(120, 144, 156, 0.8); float:left;padding: 10px 80px; color: #000;"><h2 >fILM fACTORY</h2></div>
  <div style="width:410px; background-color: rgba(237, 95, 7, 0.8); float:right; padding: 10px 80px; color: #000;"><h2 >DBMS Project</h2></div>
  </div>
  </div>
  </div>
</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
