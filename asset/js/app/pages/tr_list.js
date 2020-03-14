




function init_tr_list_populate(data){
    console.log("data");         
    console.log(data);         
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




api_get('TR', init_tr_list_populate);

