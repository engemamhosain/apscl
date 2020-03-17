<?php include 'includes/header-new.php';?>

    <!-- Title Page-->
    <title>TR Form</title>


    <link href="tr_form/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="tr_form/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="tr_form/css/main.css" rel="stylesheet" media="all">




    
            <div class="card card-1">
                <div class="card-heading"><h2 class="title">TROUBLE REPORT</h2></div>
                <div class="card-body">
                    
                       
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
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="<%= Designation.name %>" class="tr_field">
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
                            <div id="list_push">
                              
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



  <?php include 'includes/footer-new.php';?>
    <script src="asset/js/app/pages/tr_list.js"></script>

<script type="text/javascript">
       function postTr(){
    
        var obj = {};
          $('.tr_field').each(function(i, v){
             obj[v.name] =v.value;            
        });
          
         obj.Tr_creator = localStorage.username;          
        api_post('TR', obj , function(data){
        //    location.replace("dashboard.php")
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

