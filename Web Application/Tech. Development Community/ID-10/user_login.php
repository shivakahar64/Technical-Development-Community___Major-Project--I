<?php	include('../connection.php') ?>
<?php 
	include('../verify.php');
	if(isset($_SESSION['user_check'])){
		header("location: ../ID-8/dashboard.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tech. Community | User Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="assets/login_part/wave.png">
	<div class="container">
		<div class="img">
			<img src="assets/login_part/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST" id="login-form">
			<?php include('../errors.php'); ?>
                            <!-- form validation messages -->
		                    <?php include('../messages.php'); ?>
				<img src="assets/login_part/avatar.svg">
				<h2 class="title">login user</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" id="email" name="email" class="input" value="<?php echo $user_id; ?>">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="pass" id="pass" class="input">
            	   </div>
				</div>
				<br>
				<a href="">Forget Password</a>
				<input type="submit" class="login_user" name="signin" id="signin" value="Login">
				<br>
				<a href="registration.html" style="color: red;">No account? Create one </a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/login.js"></script>
</body>
</html>
