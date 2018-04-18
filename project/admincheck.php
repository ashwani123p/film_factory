<?php

  session_start();
 $host="localhost";
 $user="root";
 $password="yash18121998yadav";
 $db="DBMSdata";
 $connect = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['submit'])){
  $uname=$_POST['Username'];
  $password=$_POST['Password'];
  $sql="select * from Admins where UserName='".$uname."' AND PassWord='".$password."' limit 1";
  $result=mysqli_query($connect,$sql);
    $_SESSION['username'] = $uname;
    header("Location: admin.php");
}
?>



<html>
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	 <link rel="stylesheet" href="c.css">

	</head>
	<body>
		<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">

            <div class="account-wall" >
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" action = "<?php $_PHP_SELF ?>" method="POST"  >
                <input type="text" class="form-control" name="Username" placeholder="UserName" required autofocus />
                <input type="password" class="form-control" name="Password" placeholder="Password" required />
               <!--  <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button> -->
                    <input type="submit" name="submit" value="Sign in"/>
                </form>
            </div>
    </div>
</div>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</body>

</html>
