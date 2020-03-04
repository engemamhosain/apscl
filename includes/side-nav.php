 <li><a href="dashboard.html" class="logo-container">APSCL<i class="material-icons left">spa</i></a></li>
 <li> <div class="user-view">

              
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
                 <!--  <div style="position: relative; ">
                    <a href="index.php" style="position: absolute;right: 0px;text-align: right"> <i class="material-icons white-text">logout</i> </a>
                    <a href="dashboard.php" style="width: 100px;"><i class="material-icons white-text">home</i></a>                   
                  </div> -->

            </div></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold waves-effect waves-blue active"><a class="collapsible-header">Equipment Maintenance<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="report_list.php#report" class="waves-effect waves-blue">Show Reports<i class="material-icons">web</i></a></li>
                  <li><a href="report_list.php#report/add" class="waves-effect waves-blue">Create New<i class="material-icons">list</i></a></li>                  
                </ul>
              </div>
            </li>
            <li class="bold waves-effect waves-blue"><a class="collapsible-header"> TR | Trouble Report<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect waves-blue">All TR<i class="material-icons">show_chart</i></a></li>
                  <li><a href="tr_form.php" class="waves-effect waves-blue">Create New<i class="material-icons">equalizer</i></a></li>
                  
                </ul>
              </div>
            </li>
            <li class="bold waves-effect waves-blue"><a class="collapsible-header">Equipment Manual<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="fullscreen-table.html" class="waves-effect waves-blue">All Manuals<i class="material-icons">show_chart</i></a></li>                  
                </ul>
              </div>
            </li>
            <li class="bold waves-effect waves-blue"><a class="collapsible-header">Admin/User Management<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="user_list.php" class="waves-effect waves-blue">Team Management<i class="material-icons">cloud</i></a></li>
                </ul>
              </div>
            </li>
             <li><a href="index.php" class="waves-effect waves-blue">Logout <i class="material-icons">logout</i></a></li>
          </ul>
        </li>
        <?php include 'includes/include_js.php';?>

         <script type="text/javascript">
  $(".username").html(localStorage.username+" ( "+localStorage.role+" )");
  $(".userid").html( "ID: " + localStorage.id );
</script>


<style>
  .sidenav .user-view{ background: rgba(68, 169, 255,.8); margin-bottom: 0 }
  .sidenav li.active, .sidenav .collapsible>li:hover{ background: rgba(255,255,255,.2) }

  .waves-effect.waves-blue .waves-ripple {
  
    background-color: rgba(68, 169, 255, 0.65);
  }
          
</style>