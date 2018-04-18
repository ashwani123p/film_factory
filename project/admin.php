<?php

  session_start();
  $con=mysqli_connect("localhost","root","yash18121998yadav","DBMSdata");
// Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


    $loguser=$_SESSION['username'];

    $user_name =$_SESSION['username'];
$result=$con->query("select * from Admins WHERE UserName='$user_name'");

    $row_brand=mysqli_fetch_array($result);
 $Name=$row_brand["Name"];
 $Email=$row_brand["Email"];
 $Phone=$row_brand["phone"];


    if(isset($_POST['LogOut'])){    //trigger button click



        header("Location: UserLogin.php");


    }

 if(isset($_POST['button'])){    //trigger button click

        $search=$_POST['search'];

        $_SESSION['search'] = $search;

        header("Location: search1.php");


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


  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <form class="form-inline my-2 my-lg-0" method="post">
      <center>
      <button class="btn btn-danger my-2 my-sm-0" type="submit" name="LogOut">Log Out</button>
    </center>
    </form>
  </div>
</nav>
</header>




  <div class="content" style="height:100%; position:absolute; top: 55px; left:1px;">
    <div class="card">
      <div class="container" style="position:absolute; top: 55px; left: 0px;">
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
</div>

<div class="container" style="height:100%; width:79%; position:absolute; top: 55px; right: 0; background-color: rgba(141, 110, 99, 0.8); margin-left:0px;">
    <div class="row col-md-8 col-md-offset-2 custyle">
    <div style="position:absolute; top: 55px; right: 0px;">
    <a href="addmovies.php?admin=<?php echo $user_name; ?>" class="btn btn-primary btn-xs pull-right"><b>+</b> Add Movies</a>
    <button class="btn btn-primary btn-xs pull-right" onClick="work()" id="first">Delete</button>
    <form method="post" action="del.php"><input id="id" type="hidden" placeholder=" movie name" name="movie"/>
      <button id="second" type="submit" style="visibility:hidden;">delete</button></form>


    </div>
</div>
</div>
<script>
function work(){
document.getElementById("id").type = "text";
document.getElementById("first").style.visibility = 'hidden';
document.getElementById("second").style.visibility = 'visible';
}
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </body>
  </html>
