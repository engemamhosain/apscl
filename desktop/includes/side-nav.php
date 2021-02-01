 <li><a href="dashboard.php" class="logo-container">APSCL O&M <span>Knowledge Base</span></a></li>
 <li> <div class="user-view">

                <div class="background">

                    <img src="../asset/img/apscl-logo.jpg">
                </div>

                  <a href="#user">
                    <img class="circle" src="../asset/img/employee.png" id="profile_pic_side_bar" >
                  </a>
                  <a href="#name">
                    <span class="white-text name username"></span><span></span>
                  </a>
                  <a href="#email" style="float:left">
                    <span class="white-text email userid"></span>
                  </a>
                  <a href="../profile/profile.php" class="white-text name"><i class="material-icons chevron">edit</i></a>

            </div></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold waves-effect waves-blue"><a class="collapsible-header">Equipment Maintenance<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                <li  ><a href="../report/approved_report.php" class="waves-effect waves-blue">Approved Report<i class="material-icons">verified</i></a></li>
                   <li  ><a href="../report/waiting_for_approve.php" class="waves-effect waves-blue">Waiting For Approved<i class="material-icons">speaker_notes_off</i></a></li>
                  <li><a href="../report/my_report.php" class="waves-effect waves-blue">My Reports<i class="material-icons">note</i></a></li>
                  <li><a href="../report/add_report.php" class="waves-effect waves-blue">Add Report<i class="material-icons">note_add</i></a></li>
                </ul>
              </div>
            </li>
            <li class="bold waves-effect waves-blue"><a class="collapsible-header"> TR | Trouble Report<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body" onclick='alert("Please go to TR-CR management system")'>
                <ul>
                  <li><a href="#" class="waves-effect waves-blue" onclick='alert("Please go to TR-CR management system")'>All TR<i class="material-icons">picture_as_pdf</i></a></li>
                  <li><a href="#" onclick='alert("Please go to TR-CR management system")' class="waves-effect waves-blue">My TR<i class="material-icons">picture_as_pdf</i></a></li>
                  <li><a href="#" onclick='alert("Please go to TR-CR management system")' class="waves-effect waves-blue">Create New<i class="material-icons">queue</i></a></li>

                </ul>
              </div>
            </li>
            <li class="bold waves-effect waves-blue"><a class="collapsible-header">Equipment Manual<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="../manual/device_manual.php" class="waves-effect waves-blue">All Manuals<i class="material-icons">picture_as_pdf</i></a></li>
                  <li><a href="../manual/add_manual.php" class="waves-effect waves-blue">Add New<i class="material-icons">note_add</i></a></li>
                </ul>
              </div>
            </li>
            <li class="bold waves-effect waves-blue"><a class="collapsible-header">Admin/User Management<i class="material-icons chevron">chevron_left</i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="../user_management/user_list.php" class="waves-effect waves-blue">Team Management<i class="material-icons">group</i></a></li> <li><a href="../user_management/add_user.php" class="waves-effect waves-blue">Add user<i class="material-icons">add</i></a></li>
                </ul>
              </div>
            </li>
             <li><a href="" class="waves-effect waves-blue logoff" onclick="logOut()" >Logout <i class="material-icons right">logout</i></a></li>
          </ul>
        </li>
        <?php include '../includes/include_js.php';?>

<script type="text/javascript">
  $(".username").html(localStorage.name+" ( "+localStorage.role+" )");
  $(".userid").html( "ID: " + localStorage.id );
  if(localStorage.role=="ADMIN"){
      $(".unpublish").show();
  }
  if(localStorage.profile_picture){
    $('#profile_pic_side_bar').attr('src', localStorage.profile_picture);
  }
  function logOut() {
    localStorage.clear();
    location.href=location.origin+"/apscl-fahad/desktop/login/login.php"

  }
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
