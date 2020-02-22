<!DOCTYPE html>
<html>
<head>
	<title>
		All Manulas
	</title>
	
	<?php include 'includes/include_css.php';?>
    <link rel="stylesheet" href="asset/css/app.css">
</head>
<body>


<?php include 'includes/html_open.php';?>

<?php include 'includes/header.php';?>

<?php include 'includes/nav_bar.php';?>

	<div class="animation start-manual"></div>
</nav>

<?php include 'includes/manual_search_list.php';?>


  <?php include 'includes/html_close.php';?>


<?php include 'includes/include_js.php';?>

<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>

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

</body>
</html>
