<?php include 'mobile-header-secondary.php';?>

<div class="container"> 
  <div class="row">

   <h4>Create TR</h4>

 <!-- Icons font CSS-->
    <link href="tr_form/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="tr_form/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
   

    <!-- Vendor CSS-->
    <link href="tr_form/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="tr_form/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="tr_form/css/main.css" rel="stylesheet" media="all">	
<style type="text/css">
	.input-group1 {
    position: relative;
    margin-bottom: 30px;
  
}
    select,datalist{
         display: inline !important;            
    }

</style>    
<div class="page-wrapper" style="background: #2c3e50;"> 
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">TROUBLE REPORT</h2>
          
       
                 
                            <script type="text/template" id="tmp_tr_list">
                                
                                <div class="row row-space">
                                   <div class="col-2"> 
                                        <div class="input-group1">
                                            <input class="input--style-1" type="text" placeholder="<%= Tr_No.options.label %>" name="<%= Tr_No.name %>">                              
                                        </div>
                                    </div> 
                                     <div class="col-2"> 
                                        <div class="input-group1">                             
                                            <input class="input--style-1" type="text" placeholder="<%= Equipment.options.label %>" name="<%= Equipment.name %>">
                                        </div>
                                    </div>
                                  </div>

                                   <div class="row row-space">
                                   <div class="col-2"> 
                                        <div class="input-group1">
                                            <input class="input--style-1" type="text" placeholder="<%= Name_of_the_Reporting_Persion.options.label %>" name="<%= Name_of_the_Reporting_Persion.name %>">                              
                                        </div>
                                    </div> 
                                     <div class="col-2"> 
                                        <div class="input-group1">                             
                                            <input class="input--style-1" type="text" placeholder="<%= Location.options.label %>" name="<%= Location.name %>">
                                        </div>
                                    </div>
                                  </div>  
                                

                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group1">
                                            <input class="input--style-1 js-datepicker" type="Date" placeholder="<%= Date.options.label %>" name="<%= Date.options.label %>">
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group1">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="<%= Designation.name %>" class="input--style-1">
                                                    <option disabled="disabled" selected="selected"><%= Designation.options.label %>:</option>
                                                    <option>Sub-Assistant Engineer</option>
                                                    <option>Assistant Engineer</option>
                                                    <option>Other</option>
                                                </select>
                                                <div class="select-dropdown"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               

                                <label for="comment"><%= Description_of_Trouble.options.label %>:</label>
                                <div class="input-group1">
                                    <textarea class="input--style-1" style="width: 100%"  rows="5" id="comment" name="<%= Description_of_Trouble.name %>"></textarea>
                                </div>

                               
                           

                                  <select name="<%= Referred_to.name %>" id="department" class="input--style-1"></select>   

               
                                <div class="row row-space">
                                    <div class="col-6">
                                        <div class="p-t-20">
                                            <button class="btn btn--radius"  style="background-color: blue;opacity: .7" type="submit" onclick="location.replace('tr_list.php')">Back</button>
                                        </div>
                                    </div>  
                                      <div class="col-6">
                                        <div class="p-t-20">
                                            <button class="btn btn--radius btn--green" type="submit" onclick="postTr()">Submit</button>
                                        </div>
                                    </div>    
                                 </div> 
                                                                                

                            </script>
                            <div id="list_push">
                              
                            </div>
                 
                </div>
            </div>
        </div>
    </div>

   


  </div>
</div>


<!-- Jquery JS-->
    <script src="tr_form/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="tr_form/vendor/select2/select2.min.js"></script>
    <script src="tr_form/vendor/datepicker/moment.min.js"></script>
    <script src="tr_form/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="tr_form/js/global.js"></script>

  <?php include 'includes/include_js.php';?>
<?php include 'mobile-footer.php';?>

    <script src="asset/js/app/pages/tr_list.js"></script>
<script type="text/javascript">

    if( location.hostname =="localhost"){
        var url = "http://localhost/apscl/curl_api/push_notification.php"
    }else{
        var url = "https://softlh.com/apscl/app/curl_api/push_notification.php"
    }

    
       function postTr(){
    
        var obj = {};
          $('.input--style-1').each(function(i, v){
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

                $("#department").append(`<option value="${department[i]}">${department[i]}</option>`);                        

            }
        },3000)


  
        
</script>