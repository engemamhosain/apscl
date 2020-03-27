<?php include 'includes/header-new.php';?>
    <!-- Title Page-->
    <title>TR Form</title>
    <!-- Main CSS-->
    <link href="tr_form/css/main.css" rel="stylesheet" media="all">


    <div class="card card-1">
        <div class="card-heading"><h2 class="title">TROUBLE REPORT</h2></div>
        <div class="card-body">
                                   
            <div id="list_push"></div>
         
        </div>
    </div>
<style type="text/css">
    select {
         display: inline !important;            
    }
</style>       
<script type="text/template" id="tmp_tr_list">
    
    <div class="row row-space">
       <div class="col-2"> 

            <div class="input-field">
                <span><%= Tr_No.options.label %></span>                          
                <input type="text" name="<%= Tr_No.name %>" class="tr_field">   
            </div>
        </div> 
         <div class="col-2"> 
            <div class="input-field">                             
                <span class="active" for="<%= Equipment.name %>"><%= Equipment.options.label %></span>
                <input type="text" name="<%= Equipment.name %>" class="tr_field">
            </div>
        </div>
      </div>

       <div class="row row-space">
       <div class="col-2"> 
            <div class="input-field">
                <span for="<%= Name_of_the_Reporting_Persion.name %>"><%= Name_of_the_Reporting_Persion.options.label %></span>                             
                <input type="text" name="<%= Name_of_the_Reporting_Persion.name %>" class="tr_field"> 
            </div>
        </div> 
         <div class="col-2"> 
            <div class="input-field">
                <span for="<%= Location.name %>"><%= Location.options.label %></span>
                <input type="text" name="<%= Location.name %>" class="tr_field">
            </div>
        </div>
      </div>  
    
    <div class="row row-space">

        <div class="col-2">
            <div class="input-field">
                <span for="<%= Date.options.label %>"><%= Date.options.label %></span>
                <input js-datepicker" type="Date" name="<%= Date.options.label %>" class="tr_field">
                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
            </div>
        </div>

        <div class="col-2">
            <div class="input-field">
                <span for="<%= Designation.options.label %>"><%= Designation.options.label %></span>
                <select name="<%= Designation.name %>" class="tr_field">                         
                    <option  selected="selected">Sub-Assistant Engineer</option>
                    <option>Assistant Engineer</option>
                    <option>Exicutive Engineer</option>
                </select>                                
            </div>
        </div>

    </div>
   

   
    <div class="input-field">
         <span for="<%= Description_of_Trouble.name %>"><%= Description_of_Trouble.options.label %>:</span>
        <textarea rows="5" id="comment" name="<%= Description_of_Trouble.name %>" class="tr_field"></textarea>
    </div>

     <div class="input-field">
        <span for="<%= Referred_to.name %>"><%= Referred_to.options.label %>:</span>
        <input list="department" type="text" name="<%= Referred_to.name %>" class="tr_field">
          <datalist id="department"></datalist>
    </div>
      
    
    <div class="row row-space">                
                <button  class="btn waves-effect waves-light" type="submit" onclick="postTr()">Submit</button>                     
     </div> 
                                                    

</script>
    <!-- Jquery JS-->
    <script src="tr_form/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="tr_form/vendor/select2/select2.min.js"></script>
    <script src="tr_form/vendor/datepicker/moment.min.js"></script>
    <script src="tr_form/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="tr_form/js/global.js"></script>



  <?php include 'includes/footer-new.php';?>
    <script src="asset/js/app/pages/tr_list.js"></script>

<script type="text/javascript">

    if( location.hostname =="localhost"){
        var url = "http://localhost/apscl/curl_api/push_notification.php"
    }else{
        var url = "https://softlh.com/apscl/app/curl_api/push_notification.php"
    }
       function postTr(){
    
        var obj = {};
          $('.tr_field').each(function(i, v){
             obj[v.name] =v.value;            
        });
          
         obj.Tr_creator = localStorage.username;          
         obj.status = "Waiting For Approval";          
         obj.department = localStorage.department          
        api_post('TR', obj , function(data){          
               
             var obj={
                 title:"Trouble Report",
                 message:data.Equipment,
                 type:"TR",
                 message_id:data._id,
                 department:localStorage.department,
                 is_read:true
             }  

             api_post('Notification',obj, function(data){       
                   api_filter_get("PushNotificaion",{department:localStorage.department},function(fcm_token){                   
                         var array = [];
                          for(token of fcm_token.entries){
                              array.push(token.fcm_token)

                          }
                        $.get(url,{title:"tr",message:"Description_of_Trouble","data[]":array}, function(data){         
                             location.replace("tr_list.php#my_tr")
                    
                        });
                   })
             }); 


           

        });
}

              
     var department = ["Mechanical Maintenance", "Electrical Maintenance", "Instrument and Control", "Operation (Shift)","Operation (General)"];
         $("#department").empty(); 
		setTimeout(function(){
			for (var i = 0; i < department.length; i++)
			{ 

			    $("#department").append("<option value='" + department[i] + "'></option>");                        

			}
		},3000)


</script>