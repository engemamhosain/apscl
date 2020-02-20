
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
    $.get(url, function(data){
        console.log(data.fields);
        set_full_text(data);
        tg.db[collection_name] = data;
        callback(data);
    });
}

function api_post(collection_name, post_data ,callback){
    var url = tg.config.apiurl + 'collections/save/'+collection_name + tg.config.token;
    $.post(url, {data: post_data}, callback);
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