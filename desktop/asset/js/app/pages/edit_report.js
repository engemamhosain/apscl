
get('waiting_for_approval_maintenance_report.php',{}, function(data){


    try {

      
    var fields= [
        {option:"plant_id",value:"Plant id"},{option:"plant_name",value:"Plant name"},{option:"equipment_name",value:"Equipment name"},{option:"department",value:"Department"},{option:"kks_no",value:"KKS no"},    
        {option:"name_of_trouble",value:"Name of trouble"},{option:"trouble_analysis",value:"Trouble analysis"},
        {option:"description_of_work",value:"Description of work"},{option:"root_cause_analysis",
        value:"Root cause analysis"},{option:"trouble_description",value:"Trouble description"},{option:"used_tools_list",value:"Used tools list"},
        {option:"list_of_personel",value:"List of personel"},{option:"referance_manual",value:"Referance manual"},{option:"report_creator",value:"Report creator"}
       
    ]
        tg.db["report"] = data;
        tg.db["report"].fields = fields

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

var performed_date;
function report_edit_init_view(edit_data){

    performed_date = edit_data.performed_date;
    plant_id = edit_data.plant_id;

     var push_html = '', editor_id_list = [];
    _.each(tg.db['report'].fields, function(item, key, arr){

        if(key==0){

            push_html += tml_textinput({key:item.option, label:item.value, value: edit_data[item.option]});  
        }else{
            push_html += tml_textarea({key:item.option, label:item.value, value: edit_data[item.option]});  
            editor_id_list.push('#'+item.option);
        }
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
    obj.approved = 0
    if(typeof search_data[0] =="undefined"){
        obj.approved_by_uid = 0
        obj.approved_by_name = ""

    }else{
        obj.approved_by_uid = search_data[0].id
        obj.approved_by_name = search_data[0].name
    }

  
   
    
    obj.performed_date = performed_date
    get('u_maintenance_report.php',obj, function(data){
        location.replace("my_report.php")
    });
  
});


var meta_data=[],search_data=[];
get('all_user_list.php',{}, function(data){
    meta_data=data.meta_data;
    $('input.autocomplete1').autocomplete({
        data: data.data,
        onAutocomplete:select,
      });


});

  
function select(select){
    search_data= _.where(meta_data, {name_deisgnation:select});
}



  










