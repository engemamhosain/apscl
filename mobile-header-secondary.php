<!DOCTYPE html>
<html>
<head>
<div class="col-12 sie-ttitle-mobile"><img src="app/asset/img/burger-menu.png" width="30" style="position: absolute; top:12px; left:15px "> O&M Knowledge Base <span>APSCL</span></div>

  <link rel="icon" type="image/png" href="Login_v3/images/icons/favicon.ico"/>
  <title>
    O&M Knowledge Base APSCL 
  </title>

  <?php include 'includes/include_css.php';?>
  <link rel="stylesheet" href="mobile-css.css">
</head>

<body class="app-color">

<img src="app/asset/img/banner.png" width="100%">




  <!-- <div class="header secondary"><div class="logo-title">
    <a href="mobile_dashboard.php"> <i  class="material-icons" style="font-size:33px; vertical-align: middle;">keyboard_backspace</i></a> Current Page Title
  </div> -->
  <!-- <div class="user-pic dropdown-trigger"  data-target='dropdown-user'><img src="asset/img/user-nopic.png"></div> -->
   <!-- Dropdown user -->
  <div id='dropdown-user' class='dropdown-content'>
    
    <div>User Name</div>
    <a href=""><i  class="material-icons" style="font-size:16px; vertical-align: middle;">settings</i> Settings</a>
   
  </div>
<!-- <a href="#!" class="dropdown-trigger"  data-target='dropdown-notification'>
<div class="notif-icon secondary">        
   <i  class="material-icons white-text res" style="font-size:30px;">notifications</i> 
  <div class="notif-num">9</div>
</div>
</a> -->
</div>
<!-- Dropdown notifiaction -->
  <div id='dropdown-notification' class='dropdown-content'>
    
    <div> Notification 01</div>
    <div> Notification 02</div>
    <div> Notification 03</div>
    <div> Notification 04</div>
   
  </div>

<style>
      .sie-ttitle-mobile{ background-color: rgb(202, 53, 53); padding: 0 10px; color:white; font-weight: bold; padding-left: 60px; font-size: 18px; line-height: 50px; height: 50px;}

  .header.secondary{ height: 40px }
  #dropdown-user{ width:120px!important; padding: 15px; top: 60px!important; text-align: right }
   #dropdown-notification{ width:120px!important; padding: 15px; top:10px!important; text-align: right }
  .notif-icon.secondary{position: absolute;top:50%; margin-top:-15px;right:15px;}
  .notif-num{text-align:center;position: absolute;top:0;right:0;background-color: red;width:16px;height:16px;line-height:16px;border-radius: 10px; color: white; font-size: 12px}
</style>