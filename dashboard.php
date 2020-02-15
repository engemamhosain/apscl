<!DOCTYPE html>
<html>
<head>
	<title>
		Home page / Dashboad
	</title>
	<script type="text/javascript">
			if(localStorage.isLogin == "false"){
				location.replace("error-404/")
			}
	</script>
	<?php include 'includes/include_css.php';?>


</head>
<body>
<?php include 'includes/html_open.php';?>

        <h1> APSCL O&M Knowledge Base </h1>

  <?php include 'includes/html_close.php';?>

	<?php include 'includes/include_js.php';?>

	   <script type="text/javascript">
  $(".username").html(localStorage.username+" ( "+localStorage.role+" )");
  $(".userid").html( "ID: " + localStorage.id );
</script>

</body>
</html>
