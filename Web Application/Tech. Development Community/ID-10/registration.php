<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tech. Community | Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/images/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/register_vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/register_vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/register_vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/register_vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/register_vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/register_vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">
	<link rel="stylesheet" href="assets/css/pre_loader.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #ff0000;
background-image: linear-gradient(315deg, #ff0000 0%, #ffed00 74%);">
	
<!-- ------------------------------------------------- Tech. Development Community -------------------------------------------------------- -->
<!-- ----------------------------------------------------- Start  Pre-loader  ------------------------------------------------------------- -->
<div id="preloader-active">
	<div class="preloader d-flex align-items-center justify-content-center">
		<div class="preloader-inner position-relative">
			<div class="preloader-circle"></div>
			<div class="preloader-img pere-text">
				<img id="proloader-run" src="assets/images/Tech-Logo.png" alt="">
			</div>
		</div>
	</div>
 </div>
 <!-- ----------------------------------------------- --- End Preloader Section  ----------------------------------------------------------- -->
 
	
	<div class="container-login100">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="../connection.php" method="POST" id="register-form">
				<span class="login100-form-title p-b-37">
					Registration
				</span>
				<hr style="border-top: 1px dashed red;"> <br>
				<div class="wrap-input100 validate-input m-b-20" data-validate="Name	?">
					<input class="input100" type="name" id="name" name="name" placeholder="Enter Name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Email	?">
					<input class="input100" type="email" id="email" name="email" placeholder="Email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20">
					<b style="color: gray;">Select : </b>
					<input type="radio" name="male" value="male" required> Male
					<input type="radio" name="male" value="male" required> Female
					<input type="radio" name="male" value="male" required> Other
					<br>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Mobile Number	?">
					<input class="input100" type="text" maxlength="10" id="number" name="number" placeholder="Mobile Number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Aadhar Number	?">
					<input class="input100" type="text" id="aadhar" max="12" name="aadhar" placeholder="Aadhar Number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Password	?">
					<input class="input100" type="password" id="pass" name="pass" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Repeat Password	?">
					<input class="input100" type="password" id="re_pass" name="re_pass" placeholder="Re password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit" name="Registration_Button" id="Registration_Button">
						Register
					</button>
				</div>
				<br>
				<hr style="border-top: 1px dashed #000;">
				<div class="text-center">
					<a href="user_login.html" class="txt2 hov1" style="color: red;">
						Already a member? Login here
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets/register_vendor/jquery/jquery-3.2.1.min.js"></script>
<!--=============assets/register_vendor============================================================================-->
	<script src="assets/register_vendor/animsition/js/animsition.min.js"></script>
<!--=============assets/register_vendor============================================================================-->
	<script src="assets/register_vendor/bootstrap/js/popper.js"></script>
	<script src="assets/register_vendor/bootstrap/js/bootstrap.min.js"></script>
<!--=============assets/register_vendor============================================================================-->
	<script src="assets/register_vendor/select2/select2.min.js"></script>
<!--=============assets/register_vendor============================================================================-->
	<script src="assets/register_vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/register_vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/register_vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/main.js"></script>

	<script src="assets/js/preloader.js"></script>

</body>
</html>