


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

