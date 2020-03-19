<?php include 'includes/header-new.php';?>
    <!-- Title Page-->
    <title>TR Status</title>


    <script type="text/template" id="tmp_tr_list">
        
        <div class="col s6">
          <label><%= fields.Tr_No.options.label %>:</label> <%= entries[0].Tr_No %>
        </div>          
        <div class="col s6"><label><%= fields.Date.options.label %>:</label> <%= new Date(parseInt(entries[0].Date)).toDateString() +" "+ new Date(parseInt(entries[0].Date)).toLocaleTimeString()   %></div>  

        <div class="col s12"><hr class="h-r"></div>  

        <div class="col s12">
          <label><%= fields.Location.options.label %> & <%= fields.Equipment.options.label %> :</label> <%= entries[0].Location %>-<%= entries[0].Equipment %>          
        </div>


        <div class="col s12"><hr class="h-r"></div>

        <div class="col s12"><label><%= fields.Description_of_Trouble.options.label %>:</label> <%= entries[0].Description_of_Trouble %></div>    
           

       <div class="col s12"><hr class="h-r"></div>  
        <div class="col s6"><label><%= fields.Designation.options.label %>:</label> <%= entries[0].Designation %></div> 
        
            

       <div class="col s12"><hr class="h-r"></div>  

        <div class="col s6"><label><%= fields.Name_of_the_Reporting_Persion.options.label %>:</label> <%= entries[0].Name_of_the_Reporting_Persion %></div>    
        <div class="col s6"><label><%= fields.Referred_to.options.label %>:</label> <%= entries[0].Referred_to %></div>    

        <div class="col s12"><hr class="h-r"></div> 


        <div class="col s6"><label><%= fields.Tr_creator.options.label %>:</label> <%= entries[0].Tr_creator %></div>    
        
                                           
    </script>

    <script type="text/template" id="tmp_tr_status_list">
        
    <div class="col s12"><hr class="h-r-2"></div> 

            <div class="col s6"><label><%= fields.status.options.label %>:</label> <%= item.status %></div>    
            <div class="col s6"><label><%= fields.Date.options.label %>:</label> <%= new Date(parseInt(item.Date)).toDateString()+" "+new Date(parseInt(item.Date)).toLocaleTimeString() %></div>  
            <div class="col s12"><hr class="h-r"></div> 
            <div class="col s12"><label><%= fields.note.options.label %>:</label>  <%= item.note %></div>     
            <div class="col s12"><hr class="h-r"></div> 
            <div class="col s6"><label><%= fields.Assigner.options.label %>:</label> <%= item.Assigner %></div>    
            <div class="col s6"><label><%= fields.Assign_to.options.label %>:</label> <%= item.Assign_to %></div>         
                                           
    </script>
                           

<main>
<div class="container">
  <div class="card-panel">
  <div class="row">

    <h4 style="text-align: center; margin: 60px auto">CLEARANCE FOR WORK EXECUTION</h2>

    <div id="list_push"></div>
     <div id="status_list"></div> 
  </div>
</div>

<div  class="Assign_to_wrapper">    
    <div class="card-panel">   
        <h6 style="margin-bottom: 30px; font-weight: bold">Update Trouble infromation</h6> 
        <label>Reffer to</label>   
        <div class="input-field1" >
  
            <select id="department" class="tr_field" name="Assign_to"> </select >
            <label>Materialize Select</label>
        </div>

       
        <div class="input-field col s6">
              <i class="material-icons prefix">mode_edit</i>
              <textarea id="icon_prefix2" class="materialize-textarea tr_field" name="note"></textarea>
              <label for="icon_prefix2">Write Description</label>
              <a class="waves-effect waves-light btn" style="width: 100%;" onclick="TrAssign()">Assign</a>
        </div>        

    </div>
</div>

 </div>
</main>
  

        
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
<style>
  .h-r{ border:1px solid #eee; margin: 15px 0}
  .h-r-2{ border:2px solid #aaa; margin: 30px 0}
  label{ font-size: 14px }
</style>

<?php include 'includes/include_js.php';?>

 <script src="asset/js/app/pages/tr_list.js"></script>

