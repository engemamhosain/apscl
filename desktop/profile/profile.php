<?php
include '../includes/header-new.php';

?>

<style>
   #imageUpload
{
    display: none;
}

#profileImage
{
    cursor: pointer;
}
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
        <input id="imageUpload" type="file"  name="profile_photo" placeholder="Photo" required="" capture />

        <img id="e_photo" src="employee.png" alt="Profile Photo" style="width:100%" />
        <small style="font-size: .9em;">Clicking on the above image to change your profile picture. </small>
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

    function populate_data(){

      $("#e_name").html(localStorage.name);
      if(localStorage.profile_picture !== 'null'){
        $("#e_photo").attr('src', localStorage.profile_picture+"?"+new Date(getTime()));
      }
      $("#e_designation").html('Designation '+localStorage.designation);
      var bio = 'Role :  '+localStorage.role +' <br/>';
      bio += 'Employee id:  '+localStorage.employee_id +' <br/>';
      // bio += 'Employee id:  '+localStorage.employee_id +' <br/>';
      $("#e_bio").html(bio);

    }

    populate_data();

  $("#e_photo").click(function(e) {
      $("#imageUpload").click();
  });

  function fasterPreview( uploader ) {
      if ( uploader.files && uploader.files[0] ){
        $(".preloader-wrapper").show();
            $('#e_photo').attr('src',window.URL.createObjectURL(uploader.files[0]));

          var fd = new FormData();
          fd.append('file',uploader.files[0]);
          fd.append('name',localStorage.name);
          fd.append('jwt',localStorage.jwt);
          image_post("upload_file.php",fd,function(data){
            localStorage.profile_picture = data.file_uploader;
            get("u_users_profile_picture.php",{profile_picture:data.file_uploader,id:localStorage.id},function(data){

                populate_data();
                $(".preloader-wrapper").hide();
                location.reload();
              });

            // location.reload()
          });

      }
  }

  $("#imageUpload").change(function(){
      fasterPreview( this );
  });




	 </script>





