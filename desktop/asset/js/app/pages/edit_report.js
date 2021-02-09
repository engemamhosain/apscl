
//get('waiting_for_approval_maintenance_report.php',{}, function(data){





    <!-- department: null
    description_of_work: "psychology refers to the process of finding solutions to problems encountered in life.[2] Solutions to these problems are usually situation or context-specific. The process starts with problem finding and problem shaping, where the problem is discovered and simplified. The next step is to generate possible solutions and evaluate them. Finally a solution is selected to be implemented and verified. Problems have an end goal to be reached and how you get there depends upon problem orientation (problem-solving coping style and skills) and systematic analysis.[3] Mental health professionals study the human problem solving processes using methods such as introspection, behaviorism, simulation, computer modeling, and experiment. Social psychologists look into the person-environment relationship aspect of the problem and independent and interdependent problem-solving methods.[4] Problem solving has been defined as a higher-order cognitive process and intellectual function that requires the modulation and control of more routine or fundamental skills.[5]  Problem solving has two major domains: mathematical problem solving and personal problem solving. Both are seen in terms of some difficulty or barrier that is encountered.[6] Empirical research shows many different strategies and factors influence everyday problem solving.[7][8][9] Rehabilitation psychologists studying individuals with frontal lobe injuries have found that deficits in emotional control and reasoning can be re-mediated with effective rehabilitation and could improve the capacity of injured persons to resolve everyday problems.[10] Interpersonal everyday problem solving is dependent upon the individual personal motivational and contextual components. One such component is the emotional valence of "real-world" problems and it can either impede or aid problem-solving performance. Researchers have focused on the role of emotions in problem solving, [11][12] demonstrating that poor emotional control can disrupt focus on the target task and impede problem resolution and likely lead to negative outcomes such as fatigue, depression, and inertia.[13] In conceptualization, "
    equipment_name: null
    id: 1
    kks_no: null
    list_of_personel: "- Engineering Problem solvinf↵- Problems have an end goal ↵- Depend↵"
    name_of_trouble: "Test trouble 1 test 9 "
    performed_date: "2020-02-03"
    plant_id: 0
    plant_name: null
    referance_manual: "- Engineering Problem solvinf↵- Problems have an end goal ↵- Depend↵-"
    report_creator: "Julfikar"
    root_cause_analysis: "Engineering Problem solving is used when products or processes fail, so corrective action can be taken to prevent further failures. It can also be applied to a product or process prior to an actual failure event—when a potential problem can be predicted and analyzed, and mitigation applied so the problem never occurs. Techniques such as failure mode and effects analysis can be used to proactively reduce the likelihood of problems occurring.  Forensic engineering is an important technique of failure analysis that involves tracing product defects and flaws. Corrective action can then be taken to prevent further failures.  Reverse engineering attempts to discover the original problem-solving logic used in developing a product by taking it apart"
    trouble_analysis: "Problem solving in psychology refers to the process of finding solutions to problems encountered in life.[2] Solutions to these problems are usually situation or context-specific. The process starts with problem finding and problem shaping, where the problem is discovered and simplified. The next step is to generate possible solutions and evaluate them. Finally a solution is selected to be implemented and verified. Problems have an end goal to be reached and how you get there depends upon problem orientation (problem-solving coping style and skills) and systematic analysis.[3] Mental health professionals study the human problem solving processes using methods such as introspection, behaviorism, simulation, computer modeling, and experiment. Social psychologists look into the person-environment relationship aspect of the problem and independent and interdependent problem-solving methods.[4] Problem solving has been defined as a higher-order cognitive process and intellectual function that requires the modulation and control of more routine or fundamental skills.[5]  Problem solving has two major domains: mathematical problem solving and personal problem solving. Both are seen in terms of some difficulty or barrier that is encountered.[6] Empirical research shows many different strategies and factors influence everyday problem solving.[7][8][9] Rehabilitation psychologists studying individuals with frontal lobe injuries have found that deficits in emotional control and reasoning can be re-mediated with effective rehabilitation and could improve the capacity of injured persons to resolve everyday problems.[10] Interpersonal everyday problem solving is dependent upon the individual personal motivational and contextual components. One such component is the emotional valence of "real-world" problems and it can either impede or aid problem-solving performance. Researchers have focused on the role of emotions in problem solving, [11][12] demonstrating that poor emotional control can disrupt focus on the target task and impede problem resolution and likely lead to negative outcomes such as fatigue, depression, and inertia.[13] In conceptualization, "
    trouble_description: "Problem solving in psychology refers to the process of finding solutions to problems encountered in life.[2] Solutions to these problems are usually situation or context-specific. The process starts with problem finding and problem shaping, where the problem is discovered and simplified. The next step is to generate possible solutions and evaluate them. Finally a solution is selected to be implemented and verified. Problems have an end goal to be reached and how you get there depends upon problem orientation (problem-solving coping style and skills) and systematic analysis.[3] Mental health professionals study the human problem solving processes using methods such as introspection, behaviorism, simulation, computer modeling, and experiment. Social psychologists look into the person-environment relationship aspect of the problem and independent and interdependent problem-solving methods.[4] Problem solving has been defined as a higher-order cognitive process and intellectual function that requires the modulation and control of more routine or fundamental skills.[5]  Problem solving has two major domains: mathematical problem solving and personal problem solving. Both are seen in terms of some difficulty or barrier that is encountered.[6] Empirical research shows many different strategies and factors influence everyday problem solving.[7][8][9] Rehabilitation psychologists studying individuals with frontal lobe injuries have found that deficits in emotional control and reasoning can be re-mediated with effective rehabilitation and could improve the capacity of injured persons to resolve everyday problems.[10] Interpersonal everyday problem solving is dependent upon the individual personal motivational and contextual components. One such component is the emotional valence of "real-world" problems and it can either impede or aid problem-solving performance. Researchers have focused on the role of emotions in problem solving, [11][12] demonstrating that poor emotional control can disrupt focus on the target task and impede problem resolution and likely lead to negative outcomes such as fatigue, depression, and inertia.[13] In conceptualization, "
    updated_by_uid: 713
    updated_on: "2021-02-02 18:33:09"
    used_tools_list: "Used -->

    
get('my_maintenance_report.php',{}, function(data){


    try {

      
    var fields= [
      //  {option:"plant_id",value:"Plant id"},{option:"plant_name",value:"Plant name"},{option:"equipment_name",value:"Equipment name"},{option:"department",value:"Department"},{option:"kks_no",value:"KKS no"},    
        {option:"plant_name",value:"Plant name"},{option:"equipment_name",value:"Equipment name"},{option:"department",value:"Department"},{option:"kks_no",value:"KKS no"},    
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

var performed_date,plant_id;
function report_edit_init_view(edit_data){

    performed_date = edit_data.performed_date;
    plant_id = edit_data.plant_id;

     var push_html = '', editor_id_list = [];
    _.each(tg.db['report'].fields, function(item, key, arr){

        if(key>=0 && key<=4){

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
    obj.plant_id = plant_id
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



  










