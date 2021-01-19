
  
  
  var tml_textarea = _.template($("#tmp_textarea").html()),
  tml_textinput = _.template($("#tmp_input").html());


    var fields= [{option:"name_of_trouble",value:"Name of trouble"},{option:"trouble_analysis",value:"Trouble analysis"},{option:"description_of_work",value:"Description of work"},{option:"root_cause_analysis",value:"Root cause analysis"},{option:"trouble_description",value:"Trouble description"},{option:"used_tools_list",value:"Used tools list"},{option:"list_of_personel",value:"List of personel"},{option:"referance_manual",value:"Referance manual"},{option:"report_creator",value:"Report creator"}]
        

     var push_html = '', editor_id_list = [];
    _.each(fields, function(item, key, arr){
        if(key==0){

            push_html += tml_textinput({key:item.option, label:item.value, value: ""});  
        }else{
            push_html += tml_textarea({key:item.option, label:item.value, value: ""});  
            editor_id_list.push('#'+item.option);
        }
        
    });
    
    
    $('#edit_item_all_the_fields').html(push_html);


    _.each(editor_id_list, function(item){

     new Jodit(item, {
    enableDragAndDropFileToEditor: true,
    filebrowser: {
        ajax: {
            url: 'connector/index.php'
        }
    },
    uploader: {
        url: 'https://softlh.com/k20-apscl/k20-backend/api/file/upload_file.php',
        format: 'json',
        pathVariableName: 'path',
        filesVariableName: 'file',
        prepareData: function (data) {                    
            return data;
        },
        isSuccess: function (resp) {
           this.jodit.selection.insertHTML('<img src="'+resp.assets.file_uploader+'"/>') 
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



//name_of_trouble, performed_date, trouble_description, trouble_analysis, description_of_work, used_tools_list, root_cause_analysis, report_creator, approved, approved_by_uid, approved_by_name, referance_manual, list_of_personel) "

$('#add_report').click(function(){

    try {

        var obj = {};
        $('#edit_item_push .tg-inputs').each(function(i, v){
            obj[v.id] = $(v).val();
        });
        obj.id = location.hash.split("/")[1]
        obj.report_creator = localStorage.name
        obj.approved = 0

        // obj.approved_by_uid = search_data[0].id
        // obj.approved_by_name = search_data[0].name
        obj.approved_by_uid =0
        obj.approved_by_name = ""
        obj.performed_date = $(".datepicker").val()
        get('i_maintenance_report.php',obj, function(data){
            location.replace("my_report.php");
        });
        
    } catch (error) {
        console.log(error)
    }
   
  
});




$(document).ready(function(){
    $('.datepicker').datepicker({format: 'yyyy-mm-dd'});
  });


  










