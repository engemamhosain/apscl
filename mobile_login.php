<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="Login_v3/images/icons/favicon.ico"/>
  <title>
    O&M Knowledge Base APSCL :: Login
  </title>

  <?php include 'includes/include_css.php';?>
  <link rel="stylesheet" href="mobile-css.css">

</head>

<body class="app-color">







<div class="container"> 
  <div class="row">
    <div class="col s12" align="center">
       <img src="asset/img/apscl-logo.png" width="150" style="padding: 30px 0">
    </div>
    <div class="site-title-mobile">O&M Knowledge Base <span>APSCL</span></div>


    <form action="mobile_dashboard.php" method="post" class="mobilelogin">
 

  <div class="container">
   <div class="input-field">
          <input  id="user_name" type="text" class="validate">
          <label for="user_name">Employee ID</label>
        </div>

    <div class="input-field">
          <input id="pass_word" type="password" class="validate">
          <label for="pass_word">Password</label>
        </div>

    <button type="submit" class="btn waves-effect waves-light">Login</button>
    <label class="remember">
      <input type="checkbox" checked="checked" name="remember"> 
      <span>Remember me</span>
    </label>
  </div>

  <div style="text-align: center; padding: 15px">
   
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>


  
  


  </div>
</div>

<?php include 'mobile-footer.php';?>
<style>
  /* Change Autocomplete styles in Chrome*/
input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus,
textarea:-webkit-autofill,
textarea:-webkit-autofill:hover,
textarea:-webkit-autofill:focus,
select:-webkit-autofill,
select:-webkit-autofill:hover,
select:-webkit-autofill:focus {
 background: transparent!important;
}
</style>