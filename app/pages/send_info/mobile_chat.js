          
 var result=[],lastTime=0;
   function sendMessage(){
        get("postMessage.php",{name:localStorage.user,employee_id:localStorage.employee_id,message:$(".type_msg").val(),tr_no:location.hash,media_url:""},function(data){
                try {

                    getMessage(lastTime);
                                       
                } catch (error) {
                    
                }
            
            });  
   } 

    
    function getMessage(time){
        get("getMessage.php",{tr_no:location.hash,_created:time},function(data){
            try {
                result=JSON.parse(data).entries;
                result.forEach(element => {
                    if(localStorage.employee_id==element.message_poster_id){
                        own_message(element);
                    }else{
                        load(element);
                    }

                    if(result.length>0){
                        lastTime=result[result.length-1]._created;
                    }
                    
                });  
               
            } catch (error) {
                throw error
            }
          
        });  
    }
    getMessage(0);


    


    var load =(data)=>{
        
        $(".card-body").append(  `
        
        <div class="d-flex justify-content-start mb-4">
           
            <div class="msg_cotainer" style="background-color:skyblue">
               ${data.name}
           </div>
            <div class="msg_cotainer" style="min-width: 130px;">
               ${data.message}
                <span class="msg_time_send">${new Date(data._created*1000).toDateString()+" "+new Date(data._created*1000).toLocaleTimeString()}</span>
            </div>
        </div>
        `
    );
     }
     var own_message=(data)=>{
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
         if(lastTime!=0){
            getMessage(lastTime);
         }
       
        setTimeout("timedCount()",30*1000);
      }
      
      timedCount();

     
   
