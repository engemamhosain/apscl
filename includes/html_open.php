
  <script type="text/javascript">
      if(localStorage.isLogin == "false"){
        location.replace("error-404.html")
      }
  </script>
  
<div class="row">
     <div class="col-3 col-sm-3  col-md-3  col-lg-3  col-xl-3">
    	<ul id="nav-mobile" class="sidenav sidenav-fixed" style="transform: translateX(0px);">
        <div class="user-view">
              <div class="background">

                <img src="asset/img/bg_apscl.jpg">
              </div>
              <a href="#user">
                <img class="circle" src="asset/img/employee.jpg">
              </a>
              <a href="#name">
                <span class="white-text name username"></span>
              </a>
              <a href="#email">
                <span class="white-text email userid"></span>
              </a>
              <div style="position: relative;">
                <a href="index.php" style="position: absolute;right: 0px;text-align: right;"> <i class="material-icons white-text">logout</i> </a>
                <a href="dashboard.php" style="width: 100px;"><i class="material-icons white-text">home</i></a>
              </div>

        </div>
       
        <li class="bold">
          <p>

          </p>
        </li>
       
        <li class="no-padding ">
          <ul class=" collapsible collapsible-accordion">
            <li class="bold ">
              <a  style="width: 300px;" class="collapsible-header waves-effect waves-teal" tabindex="0">
                Equipment Maintenance Report
              </a>
              <div class="collapsible-body" style="display: block;">
                <ul>
                  <li><a style="width: 300px;" href="report_list.php#report"> Show Reports </a></li>                  
                  <li><a style="width: 300px;" href="report_list.php#report/add"> Create New</a></li>

                </ul>
              </div>
            </li>
      </ul>
      </li>

        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold ">
              <a  style="width: 300px;" class="collapsible-header waves-effect waves-teal" tabindex="0">
                TR | Trouble Report
              </a>
              <div class="collapsible-body" style="display: block;">
                <ul>
                  <li><a href="tr_list.php" style="width: 300px;" href="#"> All TR</a></li>
                  <li><a style="width: 300px;" href="tr_form.php"> Create New</a></li>                              
                </ul>
              </div>
            </li>

      </ul>
      </li>
      <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold ">
              <a style="width: 300px;" class="collapsible-header waves-effect waves-teal" tabindex="0">
                Equipment Manual
              </a>
              <div class="collapsible-body" style="display: block;">
                <ul>                  
                  <li><a style="width: 300px;" href="device_manual.php"> Equipment List </a></li>
                  
                </ul>
              </div>
            </li>

      </ul>
      </li>

      <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold ">
              <a style="width: 300px;" class="collapsible-header waves-effect waves-teal" tabindex="0">
                Admin / User Management
              </a>
              <div class="collapsible-body" style="display: block;">
                <ul>
                  <li><a style="width: 300px;"  href="user_list.php"> Team Management </a></li>                 
                </ul>
              </div>
            </li>

      </ul>
      </li>
      <li><a href="index.php"> Logout</a></li>

    </div>

<div class="col-8 col-sm-8  col-md-8  col-lg-8  col-xl-8">
