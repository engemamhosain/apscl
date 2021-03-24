
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
  

            // var f = uploader.files[0] ;
            // var fileName = f.name.split('.')[0];
            // var img = new Image();
            // img.src = URL.createObjectURL(f);
            // img.onload = function(){
            //     var canvas = document.createElement('canvas');
            //     canvas.width = img.width;
            //     canvas.height = img.height;
            //     var ctx = canvas.getContext('2d');
            //     ctx.drawImage(img, 0, 0);
            //     canvas.toBlob(function(blob){
            //             console.info(blob.size);

            //             var f2 = new File([blob], fileName + ".jpeg");
                        
            //             // var xhr = new XMLHttpRequest();
            //             // var form = new FormData();
            //             // form.append("fileToUpload", f2);
            //             // xhr.open("POST", "upload.php");
            //             // xhr.send(form);
            //     }, 'image/jpeg', 0.5);
            // }

          var fd = new FormData();
          fd.append('file',uploader.files[0]);
          fd.append('name',localStorage.name);
          fd.append('jwt',localStorage.jwt);
          image_post("upload_file.php",fd,function(data){ 
            localStorage.profile_picture=data.file_uploader
            get("u_users_profile_picture.php",{profile_picture:data.file_uploader,id:localStorage.id},function(data){ });
            $(".loading").hide();
          });
      
      }
  }
  
  $("#imageUpload").change(function(){
    $(".loading").show();
      fasterPreview( this );
  });
  