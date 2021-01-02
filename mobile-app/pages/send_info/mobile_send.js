          
     get("chat_group.php",{},function(data){
         try {
             var result=JSON.parse(data).entries;
             result.forEach(element => {
                load(element);
                 
             });
         } catch (error) {
             
         }
       
     });   

     var load =(data)=>{
        
        $(".contacts").append(  `
        
        <li>
        
            <div class="d-flex bd-highlight" onclick="goChat(''+ ${data.Tr_No})">
            <div class="img_cont">
                <i class="fas fa-comment fa-3x pr-3" style="color:white;" aria-hidden="true"></i>
                
                </div>
                <div class="user_info">
                    <span>Tr no ${data.Tr_No}</span>
                    <p>Tr created by ${data.Tr_creator}
                    <br>Status ${data.status}
                    </p>
                   
                </div>
            </div>
        </li>

        `
    
    );
     }
     
     function goChat(no){
         location.href="mobile-send-chat.html#"+no
       
     }

     $(document).ready(function(){
        $(".myInput").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $(".contacts li").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });  

