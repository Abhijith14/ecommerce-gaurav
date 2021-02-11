<?php

include("db.php");


$msg = false;

if(isset($_POST['regbtn']))
{
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user WHERE USERNAME = '$user'";

    $results = mysqli_query($conn, $sql);
    if (mysqli_num_rows($results)==1) {
        
      	$msg = "User Already Exists !!";
    }
    else
    {
    	$sqlreg = "INSERT INTO user (USERNAME, PASSWORD) VALUES('$user', '$pass')";
    	mysqli_query($conn, $sqlreg);
    	session_start();
        $_SESSION['auth'] = 'true';
        $_SESSION['user'] = $user;
        header("location:index.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register | Style +</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<a href="index.php" style="margin-left: 145px;"><span class="login100-form-title p-b-51">
						Style +
					</span></a>
<?php 
					if($msg)
					{
						?>
					<span style="float: right; color: red;">User Exists !!</span>
				<?php } ?>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Create a Username" required>
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Create a Password" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="login.php" class="txt1">
								Have an Account ?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button name="regbtn" class="login100-form-btn">
							Register
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	


</body>
</html>