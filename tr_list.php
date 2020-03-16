<?php include 'includes/header-new.php';?>


<main>
    <div class="container">
        <div class="card"><?php include 'includes/tr_search_list.php';?></div>
    </div>
</main>

                            
<a class="btn-floating left btn-large waves-effect waves-light red" href="tr_form.php"><i class="material-icons">add</i></a>
	

  <?php //include 'includes/html_close.php';?>


<?php include 'includes/include_js.php';?>

<!-- <script src="asset/vendor/query_search/jquery.searchable-1.0.0.min.js"></script>
 -->
	   <script type="text/javascript">
  $(".username").html(localStorage.username+" ( "+localStorage.role+" )");
  $(".userid").html( "ID: " + localStorage.id );
</script>
<!-- 
<script type="text/javascript">



                    $(function () {
                    $( '#table' ).searchable({
                        striped: true,
                        oddRow: { 'background-color': '#f5f5f5' },
                        evenRow: { 'background-color': '#fff' },
                        searchType: 'fuzzy'
                    });
                    
                    $( '#searchable-container').searchable({
                        searchField: '#container-search',
                        selector: '.row',
                        childSelector: '.col-xs-4',
                        show: function( elem ) {
                            console.log(elem);
                            elem.slideDown(100);
                        },
                        hide: function( elem ) {
                            elem.slideUp( 100 );
                        }
                    })
                });
            

</script> -->

 <script src="asset/js/app/pages/tr_list.js"></script>

<?php //include 'includes/footer-new.php';?>



<!-- <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script> -->