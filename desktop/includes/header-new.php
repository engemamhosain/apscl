<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="">
  <title>Home - Admin</title>
  <?php include '../includes/include_css.php';?>
</head>
<body class="has-fixed-sidenav">
  <header>
    <div class="navbar-fixed">
      <?php include '../includes/top-nav.php';?>
    </div>
    <ul id="sidenav-left" class="sidenav sidenav-fixed">
      <?php include '../includes/side-nav.php';?>
    </ul>
    <?php include '../includes/top-dropdown.php';?>
  </header>

  <div class="top-banner">
	<div class="header_wrapper" align="left">
	 
	  <div class="app-name"> APSCL O&M<br> Knowledge Base </div>
	   <img src="../asset/img/logo.png"  class="app-logo" />
	  <div style="position: absolute;right: 0px;top: 0px;">
	  	<img src="../asset/img/mujib100.png" class="mojib" align="right" />
	  </div>
	</div>
</div>

<style type="text/css">

	.header_wrapper {

	  padding: 45px 15px 0;
	  background: url(../asset/img/banner.jpg) no-repeat center 30% /cover;
	  width: 100%;
	  position: relative;
	  
	  height: 201px;
	 
	}

.header_wrapper:after{ content: ''; position: absolute; height: 100%; width: 100%; left:0; top: 0; background: rgba(255, 255, 255,.6); z-index: 0}


.mojib{
	height: 150px;padding-left:  10px;margin-top: 25px; position: relative; z-index: 9
}
.app-name{
	color: #222;font-size: 44px;font-weight: bold; text-align: center; position: relative; z-index: 9; line-height: 44px; text-shadow: 0 0 5px rgba(0,0,0,.2) 
}
.app-logo{
	width:100px; position: absolute; z-index: 9; top: 40px; left: 20px
}

@media only screen and (max-width: 800px) {
 	.header_wrapper {
	margin:auto;
	width: 100%;
	position: relative;

}

.app-name{
	font-size: 33px;;
}

}


</style>

<center>

<div class="preloader-wrapper big active" style="margin-top:100px;">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div><div class="gap-patch">
        <div class="circle"></div>
      </div><div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>
</center>