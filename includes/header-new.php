<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="">
  <title>Home - Admin</title>
  <?php include 'includes/include_css.php';?>
</head>
<body class="has-fixed-sidenav">
  <header>
    <div class="navbar-fixed">
      <?php include 'includes/top-nav.php';?>
    </div>
    <ul id="sidenav-left" class="sidenav sidenav-fixed">
      <?php include 'includes/side-nav.php';?>
    </ul>
    <?php include 'includes/top-dropdown.php';?>
  </header>

  <div class="top-banner">
	<div class="header_wrapper" align="left">
	  <img src="asset/img/logo.gif"  class="app-logo" />
	  <span class="app-name"> APSCL O&M Knowledge Base </span>
	  <div style="position: absolute;right: 0px;top: 0px;">
	  	<img src="asset/img/mojib1.jpg" class="mojib" align="right" />
	  </div>
	</div>
</div>

<style type="text/css">

	.header_wrapper {

	  margin:auto;
	  background-image: url(asset/img/banner.jpg);
	  width: 100%;
	  position: relative;
	  
	  height: 150px;
	  font-size: 18;
	}

.header_wrapper:before{ content: ''; position: absolute; height: 100%; width: 100%; background: rgba(68, 169, 255,.2) }


.mojib{
	height: 80px;padding-left:  10px;margin-top: 5px;
}
.app-name{
	color: red;font-size: 24px;margin-top:-10px;font-style: bold;
}
.app-logo{
	width:100px;padding-left:  10px;margin-top: 5px;
}

@media only screen and (max-width: 800px) {
 	.header_wrapper {
	margin:auto;
	width: 100%;
	position: relative;
	background-color: #34495e;
	border-radius: 8px;
	font-size: 0;
}

.mojib{
	width:100px;padding-left:  10px;margin-top: 5px;
}
.app-name{
	color: red;font-size: 12px;margin-top:-10px;font-style: bold;
}
.app-logo{
	width:100px;padding-left:  10px;margin-top: 5px;
}
.top-banner{

}
}
#details_push, #all_the_fields{ background: white; padding: 15px }

</style>