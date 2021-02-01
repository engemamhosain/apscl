<?php
include '../includes/header-new.php';

?>

<style>

</style>
</head>
<body>
<main><div class="container">
<h4 style="text-align:center">Profile</h4>
  <div class="row equal-height-grid">

    <div class="col l9 s12">

      <div class="card">
        <div class="card-content">
          <span class="card-title" id="e_name">Employee Name</span>
          <p id="e_designation" >Designation</p>
        </div>

        <div class="divider"></div>

        <div class="card-content">
          <div id="e_bio">

          </div>
        </div>


      </div>

    </div>

    <div class="col l3 s12">

      <div class="card">
        <div class="card-content">

        <img id="e_photo" src="employee.png" alt="Profile Photo" style="width:100%" />
        </div>

      </div>

    </div>

  </div>

</div>

    </main>


<div class="card profile">

</div>
	<?php include '../includes/footer-new.php';?>
	<?php //include '../includes/include_js.php';?>

	 <script src="../asset/js/app/pages/add_user.js"></script>
	 <script type="text/javascript">

    $("#e_name").html(localStorage.name);
    if(localStorage.profile_picture){
      $("#e_photo").attr('src', localStorage.profile_picture);
    }
    $("#e_designation").html('Designation '+localStorage.designation);
    var bio = 'Role :  '+localStorage.role +' <br/>';
    bio += 'Employee id:  '+localStorage.employee_id +' <br/>';
    // bio += 'Employee id:  '+localStorage.employee_id +' <br/>';
    $("#e_bio").html(bio);
  //  $(".profile").html(`
  //  <img src="employee.jpg" alt="John" style="width:100%">
  // <h1>${localStorage.name}</h1>
  // <p class="title">${localStorage.role}</p>
  // <p>${localStorage.id}</p>
  // <div style="margin: 24px 0;">
  //   <a href="#"><i class="fa fa-dribbble"></i></a>
  //   <a href="#"><i class="fa fa-twitter"></i></a>
  //   <a href="#"><i class="fa fa-linkedin"></i></a>
  //   <a href="#"><i class="fa fa-facebook"></i></a>
  // </div>
  // <p><button>Contact</button></p>

  //      `);
	 </script>





