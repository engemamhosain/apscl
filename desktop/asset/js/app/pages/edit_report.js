
get('waiting_for_approval_maintenance_report.php',{}, function(data){

    try {
        tg.db["report"] = data;
        tg.db["report"].fields= [{option:"name_of_trouble",value:"name of trouble"},{option:"description_of_work",value:"description of work"},{option:"root_cause_analysis",value:"root cause analysis"},{option:"trouble_description",value:"trouble description"},{option:"used_tools_list",value:"used tools list"},{option:"list_of_personel",value:"list_of_personel"},{option:"referance_manual",value:"referance_manual"},{option:"report_creator",value:"report creator"}]
        

      _.each(data.data, function(item, key, arr){
        
          if(item.id==location.hash.split("/")[1]){
           
            report_edit_init_view(item)
            
          }

      });         
    
   
  
     } catch (error) {
         console.log(error)
     }
  
  });
  
  
  var tml_textarea = _.template($("#tmp_textarea").html()), 
  tml_textinput = _.template($("#tmp_input").html());


function report_edit_init_view(edit_data){

   

     var push_html = '', editor_id_list = [];
    _.each(tg.db['report'].fields, function(item, key, arr){

        push_html += tml_textarea({key:item.option, label:item.value, value: edit_data[item.option]});  
        editor_id_list.push('#'+item.option);
    });
    

    $('#_id').val(edit_data.id);
    
    $('#edit_item_all_the_fields').html(push_html);


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

    });


    $('.container_main').hide();
    $('#edit_item_push').removeClass('hide').show();
}


$('#update_report').click(function(){

    var obj = {};
    $('#edit_item_push .tg-inputs').each(function(i, v){
        obj[v.id] = $(v).val();
    });
    obj.id = location.hash.split("/")[1]
    get('u_maintenance_report.php',obj, function(data){

    });
  
});




  










