
if(typeof($("#tmp_breadcrumbs").html())!="undefined"){

    var tmp_breadcum = _.template($("#tmp_breadcrumbs").html());
    
}

function change_breadcum(arr){

    if(typeof($("#tmp_breadcrumbs").html())=="undefined"){
       return
    }


    var html_push = '';
    _.each(arr, function(item){
        html_push += tmp_breadcum(item);
    });

    if(typeof($("#px-breadcrumb").html())!="undefined"){
        $('#px-breadcrumb').html(html_push);
    }

}



function set_full_text(data){
    _.each(data.entries, 
        function(array_item){
            full_text = '';
            _.each(array_item, function(value, key, arr){
                if(_.isString(value)){
                    full_text += value.toLowerCase();
                }
            });
            array_item._full_text = full_text;
        });
}


function api_filter_get(collection_name,obj, callback){
    var url = tg.config.apiurl + 'collections/get/'+collection_name + tg.config.token;
      $.post(url,{"filter": obj}, function(data){                    
            callback(data);
        });
        
}

function api_get(collection_name, callback){




    var url = tg.config.k20api+"/desktop/"+"gm_maintenance_report.php";

    if(location.href.split("/")[location.href.split("/").length-1]=="unpublish_report_list.php#report"){
        var status = "not approve"
    }else{
         var status = "approved"
    }
    console.log(url)


//     if(location.pathname.split("/")[location.pathname.split("/").length-1] == "tr_status.php"){
//         if(collection_name=="TR_Status"){

//             $.post(url,{"filter": {"tr_id":location.hash.substr(1)}}, function(data){            
//                 tg.db[collection_name] = data;
//                 callback(data);
//             });

//             return
//         }

//         $.post(url,{"filter": {"_id":location.hash.substr(1)}}, function(data){            
//             tg.db[collection_name] = data;
//             callback(data);
//         });

//         return
//     }


//   if(location.hash=="#my_tr"){
        
//         $.post(url,{"filter": {"Tr_creator":localStorage.username}}, function(data){         
//             tg.db[collection_name] = data;
//             callback(data);
//         });

//         return
//     }
    
//     if(collection_name === "TR"){
//     $.post(url,function(data){       
//         tg.db[collection_name] = data;
//         callback(data);
//     });    
//         return
//     }

//     if(collection_name === "Department"){
//         $.post(url,function(data){   

//             tg.db[collection_name] = data;
//             callback(data);
//         });    
//         return
//     }


    
    $.post(url,{"filter": {"status":status}}, function(data){
        set_full_text(data);
        tg.db[collection_name] = data;
        tg.db[collection_name].fields= [{option:"name_of_trouble",value:"name of trouble"},{option:"description_of_work",value:"description of work"},{option:"root_cause_analysis",value:"root cause analysis"},{option:"trouble_description",value:"trouble description"},{option:"used_tools_list",value:"used tools list"},{option:"report_creator",value:"report creator"}]
        callback(data);
    });
}



function api_post(collection_name, post_data ,callback){
    var url = tg.config.apiurl + 'collections/save/'+collection_name + tg.config.token;
    $.post(url, {data: post_data}, callback);
}



function api_post_user(post_data ,callback){
   console.log(post_data);
    $.post(tg.config.user_url, {"user":post_data}, callback);
}


function api_get_user(post_data ,callback){
   
    $.post(tg.config.get_user_url,  {filter:post_data}, callback);
}



function api_remove(collection_name, collection_id , callback){
    var url = tg.config.apiurl + 'collections/remove/'+collection_name + tg.config.token;
    $.post(url, {filter: {_id:collection_id}}, callback);
}

function api_push_remove(collection_name, employee_id , callback){
    var url = tg.config.apiurl + 'collections/remove/'+collection_name + tg.config.token;
    $.post(url, {filter: {employee_id:employee_id}}, callback);
}


function api_get_notificaion(collection_name, callback){
   var url = tg.config.apiurl + 'collections/get/'+collection_name + tg.config.token;
     
        $.post(url,{"filter": {"department":localStorage.department}}, function(data){         
            tg.db[collection_name] = data;
            callback(data);
        });
}
