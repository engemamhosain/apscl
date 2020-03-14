<?php include 'includes/header-new.php';?>


<main>
<div class="container">


<?php include 'includes/tr_search_list.php';?>

<script type="text/template" id="tmp_tr_list">
                                
                                <div class="row row-space">
                                   <div class="col-2"> 
                                        <div class="input-group">
                                            <input class="input--style-1" type="text" placeholder="<%= Tr_No.options.label %>" name="<%= Tr_No.name %>">                              
                                        </div>
                                    </div> 
                                     <div class="col-2"> 
                                        <div class="input-group">                             
                                            <input class="input--style-1" type="text" placeholder="<%= Equipment.options.label %>" name="<%= Equipment.name %>">
                                        </div>
                                    </div>
                                  </div>

                                   <div class="row row-space">
                                   <div class="col-2"> 
                                        <div class="input-group">
                                            <input class="input--style-1" type="text" placeholder="<%= Name_of_the_Reporting_Persion.options.label %>" name="<%= Name_of_the_Reporting_Persion.name %>">                              
                                        </div>
                                    </div> 
                                     <div class="col-2"> 
                                        <div class="input-group">                             
                                            <input class="input--style-1" type="text" placeholder="<%= Location.options.label %>" name="<%= Location.name %>">
                                        </div>
                                    </div>
                                  </div>  
                                

                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <input class="input--style-1 js-datepicker" type="Date" placeholder="<%= Date.options.label %>" name="<%= Date.options.label %>">
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
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
                               

                                <label for="comment"><%= Description_of_Trouble.options.label %>:</label>
                                <div class="input-group">
                                    <textarea class="input--style-1" style="width: 100%"  rows="5" id="comment" name="<%= Description_of_Trouble.name %>"></textarea>
                                </div>

                                 <div class="input-group">
                                    <input class="input--style-1" type="text" placeholder="<%= Referred_to.options.label %>:" name="<%= Referred_to.name %>">
                                </div>
                                  
                                
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
                            
<a class="btn-floating left btn-large waves-effect waves-light red" href="tr_form.php"><i class="material-icons">add</i></a>
	

  <?php include 'includes/html_close.php';?>


<?php include 'includes/include_js.php';?>

<script src="asset/vendor/query_search/jquery.searchable-1.0.0.min.js"></script>

	   <script type="text/javascript">
  $(".username").html(localStorage.username+" ( "+localStorage.role+" )");
  $(".userid").html( "ID: " + localStorage.id );
</script>

<script type="text/javascript">



                    $(function () {
                    $( '#table' ).searchable({
                        striped: true,
                        oddRow: { 'background-color': '#f5f5f5' },
                        evenRow: { 'background-color': '#fff' },
                        searchType: 'fuzzy'
                    });
                    
                    $( '#searchable-container' ).searchable({
                        searchField: '#container-search',
                        selector: '.row',
                        childSelector: '.col-xs-4',
                        show: function( elem ) {
                            elem.slideDown(100);
                        },
                        hide: function( elem ) {
                            elem.slideUp( 100 );
                        }
                    })
                });
            

</script>
</div>
</main>
 <script src="asset/js/app/pages/tr_list.js"></script>
 <script type="text/javascript">
     
 </script>
<?php //include 'includes/footer-new.php';?>



