    var lastSaveId=0;
    $(".user_img").attr("src",location.hash.split("--")[3]);
    
 	$(".title").html(decodeURIComponent(location.hash.split("--")[2]))


     function chooseFile(){
         $('#media').trigger('click');
     }

     $("#media").change(function() {
        $(".loading").show();
        var fd = new FormData();
        var files = $('#media')[0].files[0];
        console.log($('#media')[0].files[0])

        fd.append('file',files);
        fd.append('name',localStorage.user);
        fd.append('jwt',localStorage.jwt);

        image_post("upload_file.php",fd,function(data){
           
            var image=`<img src="${data.file_uploader}" style="max-width:100%;max-height:120px;"/>`;
           get("new_chat_details.php",{group_id:location.hash.split("--")[1],message:image},function(data){
            try {
                $(".loading").hide()    ;
                getMessage(lastSaveId); 
                                   
            } catch (error) {
                
            }
        
        });  

        });


     });

 
 
 var result=[];
   function sendMessage(){
       if($(".type_msg").val()<1){
        alert("Please type message")
        return
       }
        get("new_chat_details.php",{group_id:location.hash.split("--")[1],message:$(".type_msg").val()},function(data){
                
            try {

                    getMessage(lastSaveId);
                    $(".type_msg").val("");
                                       
                } catch (error) {
                    
                }
            
        });
   } 

    
    function getMessage(id){
        get("chat_details.php",{group_id:location.hash.split("--")[1],last_id:id},function(data){
            try {
                if(data.last_id!=null){
                    lastSaveId = data.last_id; 
                }
               
                result=data.data

                result.forEach(element => {
                    if(localStorage.name==element.name){
                        own_message(element);
                    }else{
                        load(element);
                    }
                    
                });  
                loadZoom();
               
            } catch (error) {
                throw error
            }
          
        });  
    }
    getMessage(lastSaveId);


    


    var load =(data)=>{

        if(data.message.startsWith(" <img")){

            $(".card-body").append(  `
        
            <div class=" justify-content-start mb-4">
               
                <div class="msg_cotainer1" style="background-color:skyblue1">
                   ${data.created_by_name}
               </div>
                <div class="card" style="height:150px;" >
                    ${data.message}
                    <span class="msg_time_send">${new Date(data.created_on*1000).toDateString()+" "+new Date(data.created_on*1000).toLocaleTimeString()}</span>
                </div>
            </div>
            `
            )
            return

        }
        
        $(".card-body").append(  `
        
        <div class="d-flex justify-content-start mb-4">
           
            <div class="msg_cotainer" style="background-color:skyblue">
               ${data.created_by_name}
           </div>
            <div class="msg_cotainer" style="min-width: 130px;">
               ${data.message}
                <span class="msg_time_send">${new Date(data.created_on).toDateString()+" "+new Date(data.created_on).toLocaleTimeString()}</span>
            </div>
        </div>
        `
    );
     }
     var own_message=(data)=>{


        console.log(data.message)
        if(data.message.startsWith(" <img")){

            $(".card-body").append(`
            <div class="d-flex justify-content-end mb-4">
                <div class="card" style="height:150px;">
                <img src="${image_show_url+"/"+data.media_url}" style="width:200px;height:150px;"/>
                
                    <span class="msg_time_send">${new Date(data._created*1000).toDateString()+" "+new Date(data._created*1000).toLocaleTimeString()}</span>
       
                </div>
                <div style="background-color:green;color:white;text-align:center;width:60px;height:40px;border-radius:30px;line-height:40px;">ME</div>
            </div>`
            );
            return

        }

        
        $(".card-body").append(`
        <div class="d-flex justify-content-end mb-4">
            <div class="msg_cotainer_send" style="min-width: 130px;">
            ${data.message}
            
                <span class="msg_time_send">${new Date(data._created*1000).toDateString()+" "+new Date(data._created*1000).toLocaleTimeString()}</span>
   
            </div>
            <div style="background-color:green;color:white;text-align:center;width:60px;height:40px;border-radius:30px;line-height:40px;">ME</div>
        </div>`
        );
     }



     function timedCount() {
         if(lastSaveId!=0){
             console.log(lastSaveId)
            getMessage(lastSaveId);
         }
       
        setTimeout("timedCount()",10*1000);
      }
      
      timedCount();

     
   function goAddMember(){
       location.href="add_member.html#/"+location.hash.split("--")[1];
   }

   function memberList(){
    location.href="member_list.html#/"+location.hash.split("--")[1];
}

   

function loadZoom(){
    ezoom.onInit($('.msg_cotainer img'), {
        hideControlBtn: false,
        onClose: function (result) {
            console.log(result);
        },
        onRotate: function (result) {
            console.log(result);
        },
    });
}