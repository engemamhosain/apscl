<!DOCTYPE html>
<html>
<head>
	<title>
		Report
	</title>
	<?php include 'includes/include_css.php';?>
<script src="asset/vendor/jquery/jquery-3.4.1.min.js"></script>
<style type="text/css">
	.breadcrumb::after {
    display: none;
    clear: both;
    content: "";
}
</style>
</head>
<body>
<?php include 'includes/html_open.php';?>



<div class="container1">
<div class="section scrollspy">

	<div class="row">
		<div class="col s12 m8 offset-m1 xl7 offset-xl1">
			<nav>
		    <div class="nav-wrapper blue">
			<form onsubmit="return false" >
		        <div class="input-field">
		          <input id="search" type="search" required>
		          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
		          <i class="material-icons">close</i>
		        </div>
		      </form>
		      </div>
		  </nav>
		</div>
	</div>


	<div class="row">
		<div class="col s12 m8 offset-m1 xl7 offset-xl1">
			<nav>
		    <div class="nav-wrapper light-blue darken-4">
		      <div class="col s12" id="px-breadcrumb">
		      	<script type="text/template" id="tmp_breadcrumbs">
		        	<a href="<%= url %>" class="breadcrumb"> <%= title %></a>
		      	</script>


		      </div>
		    </div>
		  </nav>
		</div>
	</div>

<!-- <div class="row">
<div class="col s12 m8 offset-m1 xl7 offset-xl1">
	<h5> Reports </h5>
</div>
</div> -->
<div class="row">
<div class="col s12 m8 offset-m1 xl7 offset-xl1">
	<script type="text/template" id="tmp_report_list">

	    <div class="collection-item avatar" style ="position:relative">
	      <i class="material-icons circle blue">dvr</i>
	      <div style ="position:absolute;right:16px; cursor:pointer;" onclick="deleteReport('<%= _id %>');"><i class="material-icons red-text">delete</i></div>
	      <span class="title"><a class="click_title" href=#report/<%= _id %> data-id=<%= _id %>  ><%= name_of_trouble %></a></span><br>
	      <small><%= report_creator %> on <%= performed_date %></small>
	      <p> <%= $('<p>' +description_of_trouble+'</p>').text().substring(0, 250) %>
	      </p>
	      <!-- <a href="#" class="secondary-content"><i class="material-icons">grade</i></a> -->
	    </div>


	</script>
	<script type="text/template" id="tmp_report_details">

		 <div class="">
		 	<div class="col s12 m8 x12 ">

			 	<small class>
			 		<%= fields.name_of_trouble.options.label %>
			 	</small>
			 	<br>

		 	<a><span class="title">
		 		<%= entries.name_of_trouble %>
		 	</span></a>
		 	<br>
		 	</div>
		 	<div class="col s12 m4 x4 ">
		 	<small class>
		 		<%= fields.report_creator.options.label %>
		 	</small>
		 	<br>

		 	<a href=# ><%= entries.report_creator %>
		 	</a>

		 	<br>

		 	<small>
		 	<%= fields.performed_date.options.label %>
			</small>
			<br>

		 	<span><%= entries.performed_date %></span>
		 	<br>
		 	</div>


		 	<small>
		 	<%= fields.description_of_trouble.options.label %>
			</small>
			<br>
		 	<div>
		 		<%= entries.description_of_trouble %>
	      	</div>
		 	<br>
	      	<small>
		 	<%= fields.trouble_analysis.options.label %>
			</small>
			<br>
		 	<div>
		 		<%= entries.trouble_analysis %>
	      	</div>
		 	<br>
	      	<small>
		 	<%= fields.description_of_work.options.label %>
			</small>
			<br>
		 	<div>
		 		<%= entries.description_of_work %>
	      	</div>
	      	<br>
	      	<small>
		 	<%= fields.used_tools_list.options.label %>
			</small>
			<br>
		 	<div>
		 		<%= entries.used_tools_list %>
	      	</div>
	      	<br>

	      	<small>
		 	<%= fields.root_cause_analysis.options.label %>
			</small>
			<br>
		 	<div>
		 		<%= entries.root_cause_analysis %>
	      	</div>

	      	<br>

	      	  	<small>
		 	<%= fields.referance_manual.options.label %>
			</small>
			<br>
		 	<div>
		 		<%= entries.referance_manual_description %>
	      	</div>

	      	<br>


		 		<textarea></textarea>
		 		<button class="waves-effect waves-light btn" >
		 			<i class="material-icons left">comment</i>
		 		Remarks / Suggestions</button>
	      	</div>
		</div>
	</script>

	<div id="edit_push" class="collection container_main hide">
		<?php include 'partial_report_edit.php';?>
		<div id="all_the_fields">

		</div>
		<button id="save_report" class="waves-effect waves-light btn">
		 			<i class="material-icons left">save</i>
		 		Save </button>
	</div>

	  <div id="list_push" class="collection container_main">
	  </div>

	  <div id="details_push" class="collection container_main">
	  </div>
	<a class="btn-floating left btn-large waves-effect waves-light red" href="#report/add"><i class="material-icons">add</i></a>
</div>
</div>
</div>
</div>


  <?php include 'includes/html_close.php';?>
	<?php include 'includes/include_js.php';?>
	<script src="asset/js/app/pages/report_list.js"></script>

</body>
</html>
