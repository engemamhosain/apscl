<?php include 'includes/header-new.php';?>

    <!-- Title Page-->
    <title>TR Form</title>

    <!-- Icons font CSS-->
    <link href="tr_form/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="tr_form/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="tr_form/https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
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
                                            <input type="text" name="<%= Tr_No.name %>">   
                                            <label for="<%= Tr_No.name %>"><%= Tr_No.options.label %></label>                          
                                        </div>
                                    </div> 
                                     <div class="col-2"> 
                                        <div class="input-field">                             
                                            <input type="text" name="<%= Equipment.name %>">
                                            <label for="<%= Equipment.name %>"><%= Equipment.options.label %></label>
                                        </div>
                                    </div>
                                  </div>

                                   <div class="row row-space">
                                   <div class="col-2"> 
                                        <div class="input-field">
                                            <input type="text" name="<%= Name_of_the_Reporting_Persion.name %>"> 
                                            <label for="<%= Name_of_the_Reporting_Persion.name %>"><%= Name_of_the_Reporting_Persion.options.label %></label>                             
                                        </div>
                                    </div> 
                                     <div class="col-2"> 
                                        <div class="input-field">                             
                                            <input type="text" name="<%= Location.name %>">
                                            <label for="<%= Location.name %>"><%= Location.options.label %></label>
                                        </div>
                                    </div>
                                  </div>  
                                

                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-field">
                                            <input js-datepicker" type="Date" name="<%= Date.options.label %>">
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                            <label for="<%= Date.options.label %>"><%= Date.options.label %></label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-field">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <select name="<%= Designation.name %>">
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
                                    <textarea rows="5" id="comment" name="<%= Description_of_Trouble.name %>"></textarea>
                                     <label for="<%= Description_of_Trouble.name %>"><%= Description_of_Trouble.options.label %>:</label>
                                </div>

                                 <div class="input-field">
                                    <input list="department" type="text" name="<%= Referred_to.name %>">
                                    <label for="<%= Referred_to.name %>"><%= Referred_to.options.label %>:</label>
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
    console.log("tr post");
        var obj = {};
          $('.input--style-1').each(function(i, v){
             obj[v.name] =v.value;            
        });
        api_post('TR', obj , function(data){
            location.replace("dashboard.php")
        });
}

     var department = ["Electrical","Mechanical","Accounts"]; 
         $("#department").empty(); 
               setTimeout(function(){
                    for (var i = 0; i < department.length; i++)
                    { 
                       
                           $("#department").append("<option value='" + department[i] + "'></option>");                        
                         
                    }
               },3000)
</script>

