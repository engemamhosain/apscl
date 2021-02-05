<?php include '../includes/config/config.php';?>
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
  <main>
    <?php include '../includes/slider-home.php';?>
  </main>

<div style="position:relative;">
  <div style="position: fixed;bottom: 100px;right: 60px;z-index: 100000">
  <a  href="group_chat.php" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">call</i></a>
  </div>

</div>
  <?php include '../includes/footer-new.php';?>
