<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

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
</head>

<body>
    <div class="page-wrapper" style="background: #2c3e50;"> 
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">TROUBLE REPORT</h2>
                        <form method="POST" action="tr_list.php">
                        
                        <div class="row row-space">
                           <div class="col-2"> 
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="T.R. No." name="name">                              
                                </div>
                            </div> 
                             <div class="col-2"> 
                                <div class="input-group">                             
                                    <input class="input--style-1" type="text" placeholder="Equipment:" name="name">
                                </div>
                            </div>
                          </div>

                           <div class="row row-space">
                           <div class="col-2"> 
                                <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="Name of the Reporting Person:" name="name">                              
                                </div>
                            </div> 
                             <div class="col-2"> 
                                <div class="input-group">                             
                                    <input class="input--style-1" type="text" placeholder="Location:" name="name">
                                </div>
                            </div>
                          </div>  
                        

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="Date" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Designation:</option>
                                            <option>Sub-Assistant Engineer</option>
                                            <option>Assistant Engineer</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                        <label for="comment">Description of Trouble:</label>
                        <div class="input-group">
                            <textarea class="input--style-1" style="width: 100%"  rows="5" id="comment"></textarea>
                        </div>

                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Referred to" name="res_code">
                        </div>
                          
                        
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="p-t-20">
                                    <button class="btn btn--radius"  style="background-color: blue;opacity: .7" type="submit">Back</button>
                                </div>
                            </div>  
                              <div class="col-6">
                                <div class="p-t-20">
                                    <button class="btn btn--radius btn--green" type="submit">Submit</button>
                                </div>
                            </div>    
                         </div>     
                    </form>
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

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
