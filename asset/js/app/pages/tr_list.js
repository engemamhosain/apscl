
function init_tr_list_populate(data){
     var template = $("#tmp_tr_list").html(),
         tx = _.template(template), 
         html_to_push = '';


        if(location.pathname.split("/")[location.pathname.split("/").length-1] == "tr_list.php"){

            _.each(data.entries, function(item, key, arr){    
                html_to_push  += tx(item);
            });  

        }else{
          html_to_push  += tx(data.fields);
        }

     $("#list_push").html(html_to_push);

}

function init_tr_status_populate(data){

     var template = $("#tmp_tr_list").html(),
        tx = _.template(template), 
        html_to_push = '';
        html_to_push  += tx(data);        
        $("#list_push").html(html_to_push);
        console.log("data");
        console.log(data);
        if(data.entries[0].Referred_to != localStorage.department){
            $(".Assign_to_wrapper").hide();
            
        }else{
            $(".Assign_to_wrapper").show();
        }
}

function init_tr_note_populate(data){

     var template = $("#tmp_tr_status_list").html(),
        tx = _.template(template), 
        html_to_push = '';
         _.each(data.entries, function(item, key, arr){    
                html_to_push  += tx({fields:data.fields,item:item});        
            });  
        //html_to_push  += tx(data);        
        $("#status_list").html(html_to_push);
}


if(location.pathname.split("/")[location.pathname.split("/").length-1] == "tr_status.php"){
    api_get('TR', init_tr_status_populate);
    api_get('TR_Status', init_tr_note_populate);
}else{
    api_get('TR', init_tr_list_populate);
}

$d.on('hash-changed', function(e, hash){

    if(hash === '#my_tr'){
       api_get('TR', init_tr_list_populate); 
    }

});
