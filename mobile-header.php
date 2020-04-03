<!DOCTYPE html>
<html>
<head>
  <link rel="icon" type="image/png" href="Login_v3/images/icons/favicon.ico"/>
  <title>
    O&M Knowledge Base APSCL 
  </title>

  <?php include 'includes/include_css.php';?>
  <link rel="stylesheet" href="mobile-css.css">
</head>

<body class="app-color">






  <!-- <div class="header"><div class="logo-title">
    <a href="mobile_dashboard.php"><img src="asset/img/apscl-logo.png" class="logo-m"> <div class="site-title">O&M Knowledge Base <span>APSCL</span></div></a>
  </div>  
 -->
  <div class="header"><div class="logo-title">
    <a href="mobile_dashboard.php">
      <a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
      <div class="site-title">O&M Knowledge Base <span>APSCL</span></div></a>
  </div>


  <div class="user-pic dropdown-trigger"  data-target='dropdown-user'><img src="asset/img/user-nopic.png"></div>
   <!-- Dropdown user -->
  <div id='dropdown-user' class='dropdown-content'>
    
    <div>User Name</div>
    <a href=""><i  class="material-icons" style="font-size:16px; vertical-align: middle;">settings</i> Settings</a>
   
  </div>
  <a href="#!" class="dropdown-trigger"  data-target='dropdown-notification'>
  <div class="notif-icon">        
     <i  class="material-icons white-text res" style="font-size:30px;">notifications</i> 
    <div class="notif-num">9</div>
  </div>
  </a>
</div>
<!-- Dropdown notifiaction -->
  <div id='dropdown-notification' class='dropdown-content'>    
     <div id ="notification_message" style="font-size: 12px;"></div>
  </div>

<style>
  #dropdown-user{ width:120px!important; padding: 15px; top: 60px!important; text-align: right }
   #dropdown-notification{ height:400px;width:300px!important; padding: 15px; top:10px!important; text-align: right }
  .notif-icon{position: absolute;top:50%; margin-top:-15px;right:65px;}
  .notif-num{text-align:center;position: absolute;top:0;right:0;background-color: red;width:16px;height:16px;line-height:16px;border-radius: 10px; color: white; font-size: 12px}
</style>

  <script type="text/template" id="tmp_tr_notification_list">
       <div class="card blue-grey darken-1" style="color: white;width:100%">            
          <table class="striped" onclick="location.reload('tr_status.php#<%= message_id %>')">
            <thead>
              <tr>
                  <th width="50%"><%= title %></th>
                  <th style="text-align:right"><%= new Date(_created).toLocaleDateString()+""+
                   new Date(_created).toLocaleTimeString() %></th>            
              </tr>
            </thead>

            <tbody>
              <tr>
                <td><%= message %></td>
                <td></td>       
              </tr>         
            </tbody>
          </table>             
       </div>
</script>
