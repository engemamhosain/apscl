
var rating=5;

if(location.hash.split("/")[0]=="#my"){
    load("my_maintenance_report.php")
    $(".approve").hide()

}

if(location.hash.split("/")[0]=="#waiting"){
    load("waiting_for_approval_maintenance_report.php")
    $(".approve").show()
}

if(location.hash.split("/")[0]=="#approved"){
    load("gm_maintenance_report.php")
    $(".approve").hide()
  
    setTimeout(() => {
        $(".review").show()
        loadApprove(); 
       
    }, 2000);
    

}




function load(url){

    get(url,{}, function(data){

        try {
            var template = $("#tmp_report_details").html(), tx = _.template(template), html_to_push = '';
            _.each(data.data, function(item, key, arr){
                if(item.id==location.hash.split("/")[1]){
                    html_to_push  += tx(item);
                   
                    if(localStorage.uuid == item.approved_by_uid){
                   //     $(".approve").show()
                    }else{
                     //   $(".approve").hide()
                    }
                }
                
            });       

            $("#details_push").html(html_to_push);
         } catch (error) {
             console.log(error)
         }
      
      });
      
}

  
function approve(){
    get("update_approved_maintenance_report.php",{approved:1,id:location.hash.split("/")[1]}, function(data){ 
        location.replace("waiting_for_approve.php") 
    });
}




function review(){
    get("i_comment.php",{"page_id":location.hash,rating:rating,comment:$("#comment").val()}, function(data){ 
        location.reload()
    });
}





  

function loadApprove(){




get('gm_comment.php',{"page_id":location.hash}, function(data){

    try {

        data.data.forEach((element,index) => {
            console.log(index)
          
         $(".list").append(`  
         <ul class="collection">
       

         <li class="collection-item avatar">
           <i class="material-icons circle green">comment</i>
           <span class="title">${element.created_by_name}</span>
           <p>
           ${element.comment}
           </p>
           <a href="#!" class="secondary-content"><div class="${index}"></div></a>
         </li>
       
       </ul>
             
       `);

       $('.'+index).jsRapStar({
           enabled:false,
           value: element.rating,
			length: 5,
			starHeight: 15
    });
            
        });
     } catch (error) {
         console.log(error)
     }

});

    $('#rating').jsRapStar({
        step: false,
        value: 5,
        length: 5,
        starHeight: 40,
        colorFront: '#0f0',
        onClick: function (score) {
            rating = score
        },
        onMousemove: function (score) {
            $(this).attr('title', 'Rate ' + score);
        }
    });


    new Jodit("#comment", {
        enableDragAndDropFileToEditor: true,
        uploader: {
            url:tg.config.cockpit_add_asset_url,
            format: 'json',
            pathVariableName: 'path',
            filesVariableName: 'images',
            prepareData: function (data) {                    
                return data;
            },
            isSuccess: function (resp) {
               this.jodit.selection.insertHTML('<img src="'+tg.config.cockpit_image_url+resp.assets.path+'"/>') 
                return !resp.error;
            },
            getMsg: function (resp) {
                return resp.msg.join !== undefined ? resp.msg.join(' ') : resp.msg;
            },
            process: function (resp) {  
                   
                return {
                    files: resp[this.options.filesVariableName] || [],
                    path: resp.assets.path,
                    baseurl: resp.baseurl,
                    error: resp.error,
                    msg: resp.msg
                };
            },
            error: function (e) {           
                console.log("error");
                this.events.fire('errorPopap', [e.getMessage(), 'error', 4000]);
            },
            defaultHandlerSuccess: function (data, resp) {
                console.log("defaultHandlerSuccess");
             
                
                var i, field = this.options.filesVariableName;
                if (data[field] && data[field].length) {
                    for (i = 0; i < data[field].length; i += 1) {
                        this.selection.insertImage(data.baseurl + data[field][i]);
                    }
                }
            },
            defaultHandlerError: function (resp) {
                 console.log("defaultHandlerError");
                this.events.fire('errorPopap', [this.options.uploader.getMsg(resp)]);
            }
        }
    
    
    });
    

}

