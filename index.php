<?php include 'user/users.php';?>
<?php
	
	$isLogin="false";	
	 $get_user = [];
	if(isset($_POST["username"])){
		if(!select_user($_POST["username"],$_POST["pass"])){
			header('Location: error-404.html');

		}
		 $get_user = select_user($_POST["username"],$_POST["pass"]);
		
		$isLogin="true";
	}


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v3/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v3/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v3/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v3/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v3/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v3/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v3/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v3/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v3/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v3/css/main.css">
<!--===============================================================================================-->

<style type="text/css">

</style>
</head>
<body>
	
	<div class="limiter">

		<div class="container-login100" style="background-image: url('Login_v3/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="index.php" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-account"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100 username" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100 pass" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn loginbtn">
							Login
						</button>`
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
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
	<script src="base_url.js"></script>
	
	<script type="text/javascript">
						

						
         var isloginMatch = <?php echo $isLogin; ?>;
         
         var get_user = <?php echo json_encode($get_user);?>
   //      localStorage.isLogin = "false"

			// function Login(){
			// 	 user_list.forEach(function(item){ 
			// 	 	console.log(item);
   //      			if( item.username === $(".username").val() && item.password === $(".pass").val() ){
					 
			// 		 localStorage.role = item.role;
			// 		 localStorage.id = item.id;
			// 		 localStorage.username = item.username;					 

			// 		 isloginMatch=true;
			// 		}
   //  			}); 
			
				if(isloginMatch){
			 		 localStorage.role = get_user.role;
			 		 localStorage.id = get_user.id;
			 		 localStorage.username = get_user.username;	
					localStorage.isLogin = "true"
					location.replace("dashboard.php");
				}
	</script>

</body>
</html>