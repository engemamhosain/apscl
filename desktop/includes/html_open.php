<!--
  <script type="text/javascript">
      if(localStorage.isLogin == "false"){
        location.replace("error-404.html")
      }
  </script>
 -->
  <style type="text/css">

    @media only screen and (min-width: 800px) {
      .close-wrapper{
      position: relative;text-align: right;display: none;
    }
     .menu-wrapper{
      display: show;
    }

  }
    .close-wrapper{
      position: relative;text-align: right;
    }

    .menu-wrapper{
      margin: 16px;
    }

  </style>

<div class="row">
              <div class="menu-wrapper" onclick='$(".sidemenu").show();'>
                  <i class="material-icons blue-text">menu</i>
              </div>
     <div class="col s3 m3 l3 xl3 sidemenu">
        	<ul id="nav-mobile" class="sidenav sidenav-fixed" style="transform: translateX(0px);">
            <div class="user-view">


                <div  class="close-wrapper" onclick='$(".sidemenu").hide();'>
                  <i class="material-icons white-text">close</i>
                </div>
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
                  <div style="position: relative; ">
                    <a href="index.php" style="position: absolute;right: 0px;text-align: right"> <i class="material-icons white-text">logout</i> </a>
                    <a href="dashboard.php" style="width: 100px;"><i class="material-icons white-text">home</i></a>
                  </div>

            </div>


          <ul class="collapsible">
            <li>
              <div class="collapsible-header">
                 <ul id="slide-out" class="sidenav" style="background-color: #34495e;color: white;">


                        <style type="text/css">

                        .GNVPVGB{

                            padding: 5px;
                            margin: auto;
                            width: 80%;
                            border-radius: 2px;
                            box-shadow: 0 3px 1px -2px
                        rgba(0,0,0,.14),0 2px 2px 0 rgba(0,0,0,.098),0 1px 5px 0
                            rgba(0,0,0,.084);
                        }
                        </style>

                       <div style="margin-left: 16px;">Message</div>

                         <div id ="notification_message" style="font-size: 12px;">

                                <div class="GNVPVGB" onclick='location.replace("<?php echo APP_BASE_URL; ?>group_chat/group_chat.php")'>
                                  <div style="background-color:white;color: #6c757d;height: 24px;position: relative;" >
                                     <i class="material-icons left blue-text" style="margin-top:-10px;font-size: 20px;">notification_important</i>
                                  <div  style="position:absolute;font-size: 12px;left: 30px;top: -10px;"><span>Md. Fahad Hossain</span></div>
                                    <i class="tiny material-icons right gray-text"  style="position:absolute;right:-22px;margin-top:-10px;font-size: 20px;">close</i>

                                  </div>
                                  <div style="background-color:#6c757d;height: 40px;color: white;text-align:left;">
                                      <div>Circulating Water Pump Motor </div>
                               </div>
                              </div>

                                <div class="GNVPVGB" onclick='location.replace("<?php echo APP_BASE_URL; ?>group_chat/group_chat.php")'>
                                  <div style="background-color:white;color: #6c757d;height: 24px;position: relative;" >
                                     <i class="material-icons left blue-text" style="margin-top:-10px;font-size: 20px;">notification_important</i>
                                  <div  style="position:absolute;font-size: 12px;left: 30px;top: -10px;"><span>Md. Khairul Bashar</span></div>
                                    <i class="tiny material-icons right gray-text"  style="position:absolute;right:-22px;margin-top:-10px;font-size: 20px;">close</i>

                                  </div>
                                  <div style="background-color:#6c757d;height: 40px;color: white;text-align:left;">
                                      <div>Circulating Water Pump Motor </div>
                               </div>
                              </div>

                               <div class="GNVPVGB" onclick='location.replace("<?php echo APP_BASE_URL; ?>group_chat/group_chat.php")'>
                                  <div style="background-color:white;color: #6c757d;height: 24px;position: relative;" >
                                     <i class="material-icons left blue-text" style="margin-top:-10px;font-size: 20px;">notification_important</i>
                                  <div  style="position:absolute;font-size: 12px;left: 30px;top: -10px;"><span>Md. Fahad Hossain</span></div>
                                    <i class="tiny material-icons right gray-text"  style="position:absolute;right:-22px;margin-top:-10px;font-size: 20px;">close</i>

                                  </div>
                                  <div style="background-color:#6c757d;height: 40px;color: white;text-align:left;">
                                      <div>Circulating Water Pump Motor </div>
                               </div>
                              </div>

                               <div class="GNVPVGB" onclick='location.replace("<?php echo APP_BASE_URL; ?>group_chat/group_chat.php")'>
                                  <div style="background-color:white;color: #6c757d;height: 24px;position: relative;" >
                                     <i class="material-icons left blue-text" style="margin-top:-10px;font-size: 20px;">notification_important</i>
                                  <div  style="position:absolute;font-size: 12px;left: 30px;top: -10px;"><span>Md. Khairul Bashar</span></div>
                                    <i class="tiny material-icons right gray-text"  style="position:absolute;right:-22px;margin-top:-10px;font-size: 20px;">close</i>

                                  </div>
                                  <div style="background-color:#6c757d;height: 40px;color: white;text-align:left;">
                                      <div>Circulating Water Pump Motor </div>
                               </div>
                              </div>



                          </div>



                  </ul>
                  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons red-text">message</i></a>

                <span class="new badge">4</span>
              </div>
            </li>

          </ul>


            <li class="bold">
              <p> </p>
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
                      <li><a style="width: 300px;" href="device_manual.php">All Manuals</a></li>
                      <li><a style="width: 300px;" href="add_manual.php"> Add New</a></li>

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
       </ul>

    </div>

<div class="col s12 m8 l8 xl8">
