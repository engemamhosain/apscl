<!DOCTYPE html>
<html>
<head>
	<title>
		Home page / Dashboad
	</title>
	<script type="text/javascript">
			if(localStorage.isLogin == "false"){
				location.replace("error-404/")
			}
	</script>


	<?php include 'includes/include_css.php';?>


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
