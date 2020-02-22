<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<?php include 'includes/include_css.php';?>
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="ContactFrom/images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!-- 	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/bootstrap/css/bootstrap.min.css"> -->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/css/util.css">
	<link rel="stylesheet" type="text/css" href="ContactFrom/css/main.css">
	<link rel="stylesheet" href="asset/css/app.css">
<!--===============================================================================================-->
</head>
<body>

<?php include 'includes/html_open.php';?>

<?php include 'includes/nav_bar.php';?>

	<div class="animation start-contact"></div>
</nav>
	

<script type="text/javascript">
  $(".username").html(localStorage.username+" ( "+localStorage.role+" )");
  $(".userid").html( "ID: " + localStorage.id );
</script>


<div style="width: 80%;margin: auto">
	
		<div class="wrap-contact100" >
			<div class="contact100-form-title" style="background-image: url(ContactFrom/images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Contact Us
				</span>

				<span class="contact100-form-title-2">
					Feel free to drop us a line below!
				</span>
			</div>

			<form class="contact100-form validate-form">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Full Name:</span>
					<input class="input100" type="text" name="name" placeholder="Enter full name">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email:</span>
					<input class="input100" type="text" name="email" placeholder="Enter email addess">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Phone:</span>
					<input class="input100" type="text" name="phone" placeholder="Enter phone number">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message:</span>
					<textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>

</div>
  <?php include 'includes/html_close.php';?>
<?php include 'includes/include_js.php';?>

</body>
</html>
