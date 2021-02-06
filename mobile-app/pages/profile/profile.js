
if(localStorage.profile_picture!=null && localStorage.profile_picture!=="null"){
    $('#profileImage').attr('src',localStorage.profile_picture);
  }
  
  $('.user-name').html("Name:"+localStorage.name);
  $('.user-id').html("Id:"+localStorage.id);
  
  $("#profileImage").click(function(e) {
      $("#imageUpload").click();
  });
  
  function fasterPreview( uploader ) {
      if ( uploader.files && uploader.files[0] ){
            $('#profileImage').attr('src',window.URL.createObjectURL(uploader.files[0]));
  
          var fd = new FormData();
          fd.append('file',uploader.files[0]);
          fd.append('name',localStorage.name);
          fd.append('jwt',localStorage.jwt);
          image_post("upload_file.php",fd,function(data){ 
            localStorage.profile_picture=data.file_uploader
            get("u_users_profile_picture.php",{profile_picture:data.file_uploader,id:localStorage.id},function(data){ });
  
          });
      
      }
  }
  
  $("#imageUpload").change(function(){
      fasterPreview( this );
  });
  