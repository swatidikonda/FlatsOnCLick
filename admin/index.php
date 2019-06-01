<?php
include "connection.php";
include "userClass.php";
$userClass = new userClass();
$errorMsgReg='';
$errorMsgLogin='';
$uid="";


/* Login Form */
if (!empty($_POST['loginSubmit']))
{

 $usernameEmail=$_POST['username'];
 $password=$_POST['password'];
if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 )
{

	$uid=$userClass->userLogin($usernameEmail,$password);

/*if($uid=="2")
{
$url=$_SERVER['DOCUMENT_ROOT']."/universal_home.php";
header("Location: $url"); // Page redirecting to home.php
}
else if($uid=="1"){
	$url=$_SERVER['DOCUMENT_ROOT']."/universal_home.php";
header("Location: $url"); // Page redirecting to home.php
}
else if($uid=="3"){
	$url=$_SERVER['DOCUMENT_ROOT']."/dr_panel/dr_home.php";
header("Location: $url"); // Page redirecting to home.php
}*/
/* else
{
$errorMsgLogin="Please check login details.";
} */
}
}
?>
<?php
ob_start ();

//$_SESSION['id']="sadasdasds";
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Admin Login
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="" name="login">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
				       <input type="submit" name="loginSubmit"  class="login100-form-btn" value="LOGIN"/>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	$url=BASE_URL.'admin_panel.php';
		header("Location: $url");
	die();
}
?>
</body>
</html>