<?php include 'includes/header-new.php';?>
    <!-- Title Page-->
    <title>TR Status</title>


    <script type="text/template" id="tmp_tr_list">
        
        <div><%= fields.Tr_No.options.label %>: <%= entries[0].Tr_No %></div>    
        <div><%= fields.Date.options.label %>: <%= new Date(parseInt(entries[0].Date)) %></div>    
        <div><%= fields.Description_of_Trouble.options.label %>: <%= entries[0].Description_of_Trouble %></div>    
        <div><%= fields.Designation.options.label %>: <%= entries[0].Designation %></div>    
        <div><%= fields.Equipment.options.label %>: <%= entries[0].Equipment %></div>    
        <div><%= fields.Location.options.label %>: <%= entries[0].Location %></div>    
        <div><%= fields.Name_of_the_Reporting_Persion.options.label %>: <%= entries[0].Name_of_the_Reporting_Persion %></div>    
        <div><%= fields.Referred_to.options.label %>: <%= entries[0].Referred_to %></div>    
        <div><%= fields.Tr_creator.options.label %>: <%= entries[0].Tr_creator %></div>    
        
                                           
    </script>

    <script type="text/template" id="tmp_tr_status_list">
        
    <div style="width: 80%;margin: auto;">    
        <div class="card"style="padding:16px;">   
            <div><%= fields.status.options.label %>: <%= item.status %></div>    
            <div><%= fields.Date.options.label %>: <%= new Date(parseInt(item.Date)) %></div>    
            <div><%= fields.note.options.label %>: <%= item.note %></div>    
            <div><%= fields.Assigner.options.label %>: <%= item.Assigner %></div>    
            <div><%= fields.Assign_to.options.label %>: <%= item.Assign_to %></div>                
        </div>
    </div>
                                           
    </script>
                           

<div style="width: 80%;margin: auto;">    
    <div class="card blue-grey darken-1"style="padding:16px;color:white" id="list_push"></div>
</div>

<div style="width: 80%;margin: auto;" class="Assign_to_wrapper">    
    <div class="card-panel"style="padding:16px;">   
        <h3>Update Trouble infromation</h3> 
        <label>Reffer to</label>   
        <div class="input-field1" >
  
            <select id="department" class="tr_field" name="Assign_to"> </select >
            <label>Materialize Select</label>
        </div>

       
        <div class="input-field col s6">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="icon_prefix2" class="materialize-textarea tr_field" name="note"></textarea>
              <label for="icon_prefix2">Write note</label>
              <a class="waves-effect waves-light btn" style="width: 100%;" onclick="TrAssign()">Assign</a>
        </div>        

    </div>
</div>

  <div id="status_list"></div>  
  

        
  <?php include 'includes/footer-new.php';?>
<script type="text/javascript">
  
    

var department = ["Mechanical Maintenance", "Electrical Maintenance", "Instrument and Control", "Operation (Shift)","Operation (General)"];
        
        for (var i = 0; i < department.length; i++)
        { 
             $('#department').append($('<option>',
             {
                value: department[i],
                text : department[i]
            }));
        }

function TrAssign(){
    
        var obj = {};
          $('.tr_field').each(function(i, v){
             obj[v.name] =v.value;            
        });
            
         obj.Assigner = localStorage.username;          
         obj.Date = parseInt(new Date().getTime());          
         obj.tr_id = ""+location.hash.substr(1);
         obj.status = "Active";
        api_post('TR_Status', obj , function(data){

           api_post('TR', {_id:location.hash.substr(1),Referred_to:$("#department").val()}, function(data){

                location.reload("tr_status.php"+location.hash)                
            });   
            
        });
}


</script>


<?php include 'includes/include_js.php';?>

 <script src="asset/js/app/pages/tr_list.js"></script>

