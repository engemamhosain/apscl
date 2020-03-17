
// $d.on('tom-tom', function(e, data){
//     console.log('tom-tom',data);
// });
// $d.trigger('tom-tom', {data:'cool data'});




// localstoage ?? 

// url ?? 
var tmp_breadcum = _.template($("#tmp_breadcrumbs").html());
function change_breadcum(arr){
    var html_push = '';
    _.each(arr, function(item){
        html_push += tmp_breadcum(item);
    });

    $('#px-breadcrumb').html(html_push);
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

function api_get(collection_name, callback){

    var url = tg.config.apiurl + 'collections/get/'+collection_name + tg.config.token;
    if(location.href.split("/")[location.href.split("/").length-1]=="unpublish_report_list.php#report"){
        var status="not approve"
    }else{
         var status="approved"
    }



    if(location.pathname.split("/")[location.pathname.split("/").length-1] == "tr_status.php"){
        if(collection_name=="TR_Status"){
            $.post(url,{"filter": {"tr_id":location.hash.substr(1)}}, function(data){            
                tg.db[collection_name] = data;
                callback(data);
            });
            return
        }
        $.post(url,{"filter": {"_id":location.hash.substr(1)}}, function(data){            
            tg.db[collection_name] = data;
            callback(data);
        });
        return
    }


  if(location.hash=="#my_tr"){
        
        $.post(url,{"filter": {"Tr_creator":localStorage.username}}, function(data){         
            tg.db[collection_name] = data;
            callback(data);
        });

        return
    }
    
    if(collection_name === "TR"){
    $.post(url,function(data){
        set_full_text(data);
        tg.db[collection_name] = data;
        callback(data);
    });    
        return
    }

    if(collection_name === "Department"){
        $.post(url,function(data){   

            tg.db[collection_name] = data;
            callback(data);
        });    
        return
    }


    
    $.post(url,{"filter": {"status":status}}, function(data){
        set_full_text(data);
        tg.db[collection_name] = data;
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
// function api_post_user(post_data ,callback){
   
//     $.post(tg.config.user_url, {user: post_data}, callback);
// }

function api_remove(collection_name, collection_id , callback){
    var url = tg.config.apiurl + 'collections/remove/'+collection_name + tg.config.token;
    $.post(url, {filter: {_id:collection_id}}, callback);
}



//---------------------------- Not using
/*
function get_fields_label(data){

    var process_obj = [],
        labels = {},
        tmp_items =[], 
        tmp_obj = {};
    
    _.each(data.fields, function(item, key){
        labels[key] = item.options.label; 
    });
    

    

    _.each(data.entries, 
        function(array_item){
            tmp_items = [];
            full_text = '';

            _.each(array_item, function(value, key){
                tmp_obj = {
                    key: key,
                    value: value
                };

                if(_.isString(value)){
                    full_text += value.toLowerCase();
                }
                

                if(_.isUndefined(labels[key])){
                    tmp_obj.label     =  false;
                    tmp_obj.show      = false;
                }else{
                    tmp_obj.show      = true;
                    tmp_obj.label     = labels[key];
                }

                tmp_items.push(tmp_obj);
            });
            tmp_items._full_text = full_text;
            process_obj.push(tmp_items);
    });

    return process_obj;
}

*/