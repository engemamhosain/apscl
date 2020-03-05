 <li><a href="dashboard.php" class="logo-container">APSCL O&M <span>Knowledge Base</span></a></li>
 <li> <div class="user-view">

              
               <!--  <div  class="close-wrapper" onclick='$(".sidemenu").hide();'>
                  <i class="material-icons white-text">close</i>
                </div> -->
                <div class="background">

                    <img src="asset/img/apscl-logo.jpg">
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
                 <!--  <div style="position: relative; ">
                    <a href="index.php" style="position: absolute;right: 0px;text-align: right"> <i class="material-icons white-text">logout</i> </a>
                    <a href="dashboard.php" style="width: 100px;"><i class="material-icons white-text">home</i></a>                   
                  </div> -->

            </div></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold waves-effect waves-blue"><a class="collapsible-header">Equipment Maintenance<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="report_list.php#report" class="waves-effect waves-blue">Show Reports<i class="material-icons">note</i></a></li>
                  <li><a href="report_list.php#report/add" class="waves-effect waves-blue">Create New<i class="material-icons">note_add</i></a></li>                  
                </ul>
              </div>
            </li>
            <li class="bold waves-effect waves-blue"><a class="collapsible-header"> TR | Trouble Report<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="tr_list.php" class="waves-effect waves-blue">All TR<i class="material-icons">picture_as_pdf</i></a></li>
                  <li><a href="tr_form.php" class="waves-effect waves-blue">Create New<i class="material-icons">queue</i></a></li>
                  
                </ul>
              </div>
            </li>
            <li class="bold waves-effect waves-blue"><a class="collapsible-header">Equipment Manual<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="device_manual.php" class="waves-effect waves-blue">All Manuals<i class="material-icons">picture_as_pdf</i></a></li>                  
                </ul>
              </div>
            </li>
            <li class="bold waves-effect waves-blue"><a class="collapsible-header">Admin/User Management<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="user_list.php" class="waves-effect waves-blue">Team Management<i class="material-icons">group</i></a></li>
                </ul>
              </div>
            </li>
             <li><a href="index.php" class="waves-effect waves-blue logoff">Logout <i class="material-icons right">logout</i></a></li>
          </ul>
        </li>
        <?php include 'includes/include_js.php';?>

         <script type="text/javascript">
  $(".username").html(localStorage.username+" ( "+localStorage.role+" )");
  $(".userid").html( "ID: " + localStorage.id );
</script>


<style>
  .background{ background-color: white; }
  .background img{ height: 100%; width: 100%; object-fit: contain; }
  .sidenav .user-view{ background: rgba(68, 169, 255,.95); margin-bottom: 0; height: 200px}
  .sidenav li.active, .sidenav .collapsible>li:hover{ background: rgba(255,255,255,.2) }

  .waves-effect.waves-blue .waves-ripple {
  
    background-color: rgba(68, 169, 255, 0.65);
  }
            .sidenav .logo-container{  font-weight: bold;}
            .logoff i{ margin-right: 0!important }
            .sidenav li>a{ font-weight: bold }
  .sidenav .logo-container{ line-height: 24px; margin-top:15px; height: 49px; font-size: 28px; color: #184c9a }
  .logo-container span { display: block; font-size: 14px; text-transform: uppercase; letter-spacing: 2px }
</style>