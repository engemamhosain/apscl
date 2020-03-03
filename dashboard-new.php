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
        <nav class="navbar white">
          <div class="nav-wrapper"><a href="#!" class="brand-logo grey-text text-darken-4">Home</a>

            <ul id="nav-mobile" class="right">
              <li class="hide-on-med-and-down"><a href="https://themes.materializecss.com/products/admin">Buy Now!</a></li>
              <li class="hide-on-med-and-down"><a href="#!" data-target="dropdown1" class="dropdown-trigger waves-effect"><i class="material-icons">notifications</i></a></li>
              <li><a href="#!" data-target="chat-dropdown" class="dropdown-trigger waves-effect"><i class="material-icons">settings</i></a></li>
            </ul><a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
          </div>
        </nav>
      </div>
      <ul id="sidenav-left" class="sidenav sidenav-fixed">
       <?php include 'includes/side-nav.php';?>
      </ul>
      <div id="dropdown1" class="dropdown-content notifications">
        <div class="notifications-title">notifications</div>
        <div class="card">
          <div class="card-content"><span class="card-title">Joe Smith made a purchase</span>
            <p>Content</p>
          </div>
          <div class="card-action"><a href="#!">view</a><a href="#!">dismiss</a></div>
        </div>
        <div class="card">
          <div class="card-content"><span class="card-title">Daily Traffic Update</span>
            <p>Content</p>
          </div>
          <div class="card-action"><a href="#!">view</a><a href="#!">dismiss</a></div>
        </div>
        <div class="card">
          <div class="card-content"><span class="card-title">New User Joined</span>
            <p>Content</p>
          </div>
          <div class="card-action"><a href="#!">view</a><a href="#!">dismiss</a></div>
        </div>
      </div>
      <div id="chat-dropdown" class="dropdown-content dropdown-tabbed">
        <ul class="tabs tabs-fixed-width">
          <li class="tab col s3"><a href="#settings">Settings</a></li>
          <li class="tab col s3"><a href="#friends" class="active">Friends</a></li>
        </ul>
        <div id="settings" class="col s12">
          <div class="settings-group">
            <div class="setting">Night Mode
              <div class="switch right">
                <label>
                  <input type="checkbox"><span class="lever"></span>
                </label>
              </div>
            </div>
            <div class="setting">Beta Testing
              <label class="right">
                <input type="checkbox"><span></span>
              </label>
            </div>
          </div>
        </div>
        <div id="friends" class="col s12">
          <ul class="collection flush">
            <li class="collection-item avatar">
              <div class="badged-circle online"><img src="img/portrait1.jpg" alt="avatar" class="circle"></div><span class="title">Jane Doe</span>
              <p class="truncate">Lo-fi you probably haven't heard of them</p>
            </li>
            <li class="collection-item avatar">
              <div class="badged-circle"><img src="img/portrait2.jpg" alt="avatar" class="circle"></div><span class="title">John Chang</span>
              <p class="truncate">etsy leggings raclette kickstarter four dollar toast</p>
            </li>
            <li class="collection-item avatar">
              <div class="badged-circle"><img src="img/portrait3.jpg" alt="avatar" class="circle"></div><span class="title">Lisa Simpson</span>
              <p class="truncate">Raw denim fingerstache food truck chia health goth synth</p>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <main><div class="container">
  <div class="row">
    <div class="col s12">
      <h2>Dashboard</h2>



  <div class="animation start-home"></div>
    </div>
    
   
   


  
</div>
    </main><footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col s6 m3">
        <img class="materialize-logo" src="img/materialize-logo.png" alt="Materialize">
        <p>Made with love by Materialize.</p>
      </div>
      <div class="col s6 m3">
        <h5>About</h5>
        <ul>
          <li><a href="#!">Blog</a></li>
          <li><a href="#!">Pricing</a></li>
          <li><a href="#!">Docs</a></li>
        </ul>
      </div>
      <div class="col s6 m3">
        <h5>Connect</h5>
        <ul>
          <li><a href="#!">Community</a></li>
          <li><a href="#!">Subscribe</a></li>
          <li><a href="#!">Email</a></li>
        </ul>
      </div>
      <div class="col s6 m3">
        <h5>Contact</h5>
        <ul>
          <li><a href="#!">Twitter</a></li>
          <li><a href="#!">Facebook</a></li>
          <li><a href="#!">Github</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer><!-- Scripts -->

<?php include 'includes/include_js.php';?>
  </body>
</html>