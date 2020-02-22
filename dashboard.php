<!DOCTYPE html>
<html>
<head>
	<title>
		Home page / Dashboad
	</title>
	

	<?php include 'includes/include_css.php';?>
  <link rel="stylesheet" href="asset/css/app.css">

<style type="text/css">
  body {
  font-size: 12px;
  font-family: sans-serif;
  background: #2c3e50;
}
</style>
</head>
<body>


<?php include 'includes/html_open.php';?>

<?php include 'includes/nav_bar.php';?>

	<div class="animation start-home"></div>
	
</nav>




  <br>
  <iframe src="includes/slider.php"   scrolling="no" style="width:100%;height: 400px;"></iframe>

     
  <?php include 'includes/html_close.php';?>

	<?php include 'includes/include_js.php';?>

	   <script type="text/javascript">
  $(".username").html(localStorage.username+" ( "+localStorage.role+" )");
  $(".userid").html( "ID: " + localStorage.id );
</script>

        
        <script type="text/javascript">
           document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.carousel');
         // var instances = M.Carousel.init(elems, options);
          var instances = M.Carousel.init(elems);
        });

  // Or with jQuery

      $(document).ready(function(){
        $('.carousel').carousel();
      });
      
      
       
        </script>



</body>
</html>
