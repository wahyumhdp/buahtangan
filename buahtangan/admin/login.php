<?php
	session_start();

	if (isset($_SESSION["login"])) {
		header("Location:index.php");
	}
	
	require 'functions.php';
	if(isset($_POST["login"])){
		$username=$_POST["username"];
		$password=$_POST["password"];

		$result = mysqli_query($conn,"SELECT * FROM admin WHERE username='$username'");

		if(mysqli_num_rows($result)===1){
			$row = mysqli_fetch_assoc($result);
			$_SESSION["login"]=true;
			header("Location:index.php");
			exit; 	
		}
		$error = true;
	}
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" type="text/css" href="css2/util.css">
  <link rel="stylesheet" type="text/css" href="css2/main.css">
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <form action="" method="post" enctype="multipart/form-data">
      <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
        <form class="login100-form validate-form">
          <span class="login100-form-title p-b-33">
            Admin
          </span>

          <div class="wrap-input100 validate-input" >
            <label for="username"></label>
            <input class="input100" type="text" name="username" placeholder="Username" id="username">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
          </div>

          <div class="wrap-input100 rs1 validate-input" >
            <label for="password"></label>
            <input class="input100" type="password" name="password" placeholder="Password" id="password">
            <span class="focus-input100-1"></span>
            <span class="focus-input100-2"></span>
          </div>

          <div class="container-login100-form-btn m-t-20">
            <button class="login100-form-btn" value="submit" name="login">
              Sign in
            </button>
          </div>

          </div>
          </form>
      </div>
    </div>

</body>
</html>