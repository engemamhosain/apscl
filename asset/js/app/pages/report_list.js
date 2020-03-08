function deleteReport(item_id){
    if(confirm("Deleting this report, Will delete this permanently.\n Are you Sure? ")){
        api_remove('report',item_id, function(data){
            
            api_get('report', init_list_populate);
        });
    }
}

function edit_report_init_view(item_id){
    console.log('edit item',item_id);

}


function init_list_populate1(data){
    
    
    //  var template = $("#test").html(),
    //      tx = _.template(template), 
    //      html_to_push = '';
    
    // _.each(data.entries, function(item, key, arr){
    //     item.id=key;
    //     html_to_push  += tx(item);
    // });         
    
    //  $("#notification_message").html(html_to_push);

    
}


function init_list_populate(data){
    
    init_list_populate1(data);
     
     var template = $("#tmp_report_list").html(),
         tx = _.template(template), 
         html_to_push = '';
    
    _.each(data.entries, function(item, key, arr){
        item.id=key;
        html_to_push  += tx(item);
    });         

     $("#list_push").html(html_to_push);

     // $('.click_title').unbind('click');
     // $('.click_title').click(open_details);
     $('.container_main').hide();
     $('#list_push').show();
     change_breadcum([{url:'#report', title:'Report'}]);
     add_report_init();
}

function init_detail_populate(data){

     var template = $("#tmp_report_details").html(),
         tx = _.template(template), 
         html_to_push = '';
    
        
        html_to_push  = tx(data);
console.log(data);
     $('.container_main').hide();
     $('#details_push').show();

     $("#details_push").html(html_to_push);
     // $('.click_title').unbind('click');
     // $('.click_title').click(open_details);
}

function search_reports(e){
    var niddle = $(e.target).val().toLowerCase(),
        data_table = {
            entries:[],
            fields: tg.db['report'].fields
        };

        // data_table.fields = tg.db['report'].fields;
    _.each(tg.db['report'].entries, function(items){
        if(items._full_text.search(niddle)!== -1){
            data_table.entries.push(items);
        }
    });
    init_list_populate(data_table);
}



api_get('report', init_list_populate);
// var editor = new Jodit('#textarea1');
 var tml_textarea = _.template($("#tmp_textarea").html()), 
 tml_textinput = _.template($("#tmp_input").html());

function add_report_init(){
    var push_html = '', editor_id_list = [];
    _.each(tg.db['report'].fields, function(item, key, arr){

        if(item.type === 'text'){
            push_html += tml_textinput({key:key, label:item.options.label, value:''});            
        }else if(item.type === 'html'){
            push_html += tml_textinput({key:key, label:item.options.label, value:''});            
            editor_id_list.push('#all_the_fields #'+key);
        }
        // console.log('edit', {key, item});
    });

    
    $('#all_the_fields').html(push_html);
    _.each(editor_id_list, function(item){
       

     new Jodit(item, {


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
            console.log(resp);
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

    // buttons: [
    //     'source', '|',
    //     'table',
    //     'bold',
    //     'italic', '|',
    //     'ul',
    //     'ol', '|',
    //     'font',
    //     'fontsize',
    //     'brush',
    //     'paragraph', '|',
    //     'image',
    //     'file',
    //     'video',
    //     'cut',
    //     'copy',
    //     'paste',
    //     'link', '|',
    //     'left',
    //     'center',
    //     'right',
    //     'justify', '|',
    //     'undo', 'redo', '|',
    //     'hr',
    //     'eraser',
    //     'fullsize',
    //     'about'
    // ],
    //         uploader: {
    //              insertImageAsBase64URI: true
    //         },
        });


 //       new Jodit(item);
    });
    console.log('edit is ready');
}
// function open_details(e){
//     var id = $(e.target).data('id');
    
//     item = _.filter(tg.db['report'].entries, function(item){
//         if(item._id === id){
//             return item;
//         }
//     })[0];
//     init_detail_populate({entries:item, fields: tg.db['report'].fields});
//     // console.log({entries:item, fields: tg.db['report'].fields});
//     change_breadcum([{url:'#report', title:'Report'}, {url:'#report/'+item._id, title: item.name_of_trouble}]);
// }
function report_add_init_view(){
    $('.container_main').hide();
    $('#edit_push').removeClass('hide').show();
}

function report_edit_init_view(edit_data){
    // console.log('edit ...... ', edit_data);
    console.log('edit ...... fields', tg.db['report'].fields);
    // report_edit_init_view({entries:item, fields: tg.db['report'].fields});
    change_breadcum([{url:'#report', title:'Report'}, {url:'#report/edit/'+item._id, title: item.name_of_trouble}]);

    var push_html = '', editor_id_list = [];
    _.each(tg.db['report'].fields, function(item, key, arr){
        console.log(item, key, item.type);
        if(item.type === 'text'){
            push_html += tml_textinput({key:key, label:item.options.label, value: edit_data[key]});            
        }else if(item.type === 'html'){
            push_html += tml_textarea({key:key, label:item.options.label, value: edit_data[key]});            
            editor_id_list.push('#edit_item_all_the_fields #'+key);
        }
        
    });
    

    $('#_id').val(edit_data._id);
    
    $('#edit_item_all_the_fields').html(push_html);

    _.each(editor_id_list, function(item){
       

     new Jodit(item, {

    // buttons: [
    //     'source', '|',
    //     'table',
    //     'bold',
    //     'italic', '|',
    //     'ul',
    //     'ol', '|',
    //     'font',
    //     'fontsize',
    //     'brush',
    //     'paragraph', '|',
    //     'image',
    //     'file',
    //     'video',
    //     'cut',
    //     'copy',
    //     'paste',
    //     'link', '|',
    //     'left',
    //     'center',
    //     'right',
    //     'justify', '|',
    //     'undo', 'redo', '|',
    //     'hr',
    //     'eraser',
    //     'fullsize',
    //     'about'
    // ],
    //         uploader: {
    //              insertImageAsBase64URI: true
    //         },

 enableDragAndDropFileToEditor: true,
    uploader: {
        url: 'http://localhost/cockpit/api/cockpit/addAssets?token=6faf5df9bad9ba9c64aecb14d3fcf1',
        format: 'json',
        pathVariableName: 'path',
        filesVariableName: 'images',
        prepareData: function (data) {                    
            return data;
        },
        isSuccess: function (resp) {
            this.jodit.selection.insertHTML('<img src="http://localhost/cockpit/storage/uploads/2020/03/06/5e62a2a31eeebapscl.gif"/>')                      
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


 //       new Jodit(item);
    });





    $('.container_main').hide();
    $('#edit_item_push').removeClass('hide').show();
}

$('#search').on('keyup', search_reports);

$d.on('hash-changed', function(e, hash){

    if (hash.substr(0,7) !== '#report'){
        return;
    }

    if(hash.length === '#report'.length){
        init_list_populate(tg.db['report']);
    }else if(hash === '#report/add'){
        report_add_init_view()
    }else if(hash.substr(0,13) === '#report/edit/'){
        var id = hash.split('/')[2];
        item = _.filter(tg.db['report'].entries, function(item){

            if(item._id === id){
                return item;
            }
        })[0];
        report_edit_init_view(item);
        

    }else{
  
        var id = hash.split('/')[1];
        item = _.filter(tg.db['report'].entries, function(item){

            if(item._id === id){
                return item;
            }
        })[0];
        init_detail_populate({entries:item, fields: tg.db['report'].fields});
        change_breadcum([{url:'#report', title:'Report'}, {url:'#report/'+item._id, title: item.name_of_trouble}]);
    }

});


$('#update_report').click(function(){

    var obj = {};
    $('#edit_item_push .tg-inputs').each(function(i, v){
        obj[v.id] = $(v).val();
    });

    api_post('report', obj , function(data){
        location.replace("report_list.php")
    });
});

$('#save_report').click(function(){

    var obj = {};
    $('#edit_push .tg-inputs').each(function(i, v){
        obj[v.id] = $(v).val();
    });

    api_post('report', obj , function(data){
        location.replace("report_list.php")
    });
});

