
<?php include 'includes/header-new.php';?>
 

<main>

<div class="container">
	
<div class="scrollspy">

	
<form onsubmit="return false" >

		        <div class="input-field">
		          <input id="search" type="search" required>
		          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
		          <i class="material-icons">close</i>
		        </div>
		      </form>


<!-- <div class="row">
<div class="col s12 m8 offset-m1 xl7 offset-xl1">
	<h5> Reports </h5>
</div>
</div> -->
<div class="row">
<div class="col s12 m12 l12 xl12">
	<script type="text/template" id="tmp_report_list">

	    <div class="collection-item avatar" style ="position:relative">
	      <i class="material-icons circle blue">dvr</i>
	      <div style ="position:absolute;right:16px; cursor:pointer;" onclick="deleteReport('<%= _id %>');"><i class="material-icons red-text">delete</i></div>
	      <a style ="position:absolute;right:45px;"
	      href="#report/edit/<%= _id %>"
	      ><i class="material-icons green-text">edit</i></a>

	      <span class="title"><a  style="padding-right:80px;" class="click_title" href=#report/<%= _id %> data-id=<%= _id %>  ><%= name_of_trouble %></a></span><br>
	      <small><%= report_creator %>  <%= performed_date %></small>
	      <p> <%= $('<p>' +description_of_trouble+'</p>').text().substring(0, 250) %>
	      </p>
	      <!-- <a href="#" class="secondary-content"><i class="material-icons">grade</i></a> -->
	    </div>


	</script>
	<script type="text/template" id="tmp_report_details">

		 <div class="">
		 	<div class="col s12 m8 x12 ">

			 	<span style="font-weight: bold;">
			 		<%= fields.name_of_trouble.options.label %>
			 	</span>
			 	<br>

		 	<a><span class="title">
		 		<%= entries.name_of_trouble %>
		 	</span></a>
		 	<br>
		 	</div>
		 	<div class="col s12 m4 x4 ">
		 	<span style="font-weight: bold;">
		 		<%= fields.report_creator.options.label %>
		 	</span>
		 	<br>

		 	<a href=# ><%= entries.report_creator %>
		 	</a>

		 	<br>

		 	<span style="font-weight: bold;">
		 	<%= fields.performed_date.options.label %>
			</span>
			<br>

		 	<span><%= entries.performed_date %></span>
		 	<br>
		 	</div>


		 	<span style="font-weight: bold;">
		 	<%= fields.description_of_trouble.options.label %>
			</span>
			<br>
		 	<div>
		 		<%= entries.description_of_trouble %>
	      	</div>
		 	<br>
	      	<span style="font-weight: bold;">
		 	<%= fields.trouble_analysis.options.label %>
			</span>
			<br>
		 	<div>
		 		<%= entries.trouble_analysis %>
	      	</div>
		 	<br>
	      	<span style="font-weight: bold;">
		 	<%= fields.description_of_work.options.label %>
			</span>
			<br>
		 	<div>
		 		<%= entries.description_of_work %>
	      	</div>
	      	<br>
	      	<span style="font-weight: bold;">
		 	<%= fields.used_tools_list.options.label %>
			</span>
			<br>
		 	<div>
		 		<%= entries.used_tools_list %>
	      	</div>
	      	<br>

	      	<span style="font-weight: bold;">
		 	<%= fields.root_cause_analysis.options.label %>
			</span>
			<br>
		 	<div>
		 		<%= entries.root_cause_analysis %>
	      	</div>

	      	<br>



	      	 <span style="font-weight:bold;">
		 	<%= fields.referance_manual.options.label %>
			</span>
			<br>
		 	<div>
		 		<%= entries.referance_manual %>
	      	</div>

 			<span style="font-weight:bold;">
		 	<%= fields.list_of_personel.options.label %>
			</span>
			<br>
		 	<div>
		 		<%= entries.list_of_personel %>
	      	</div>

		 		<textarea></textarea>
		 		<button class="waves-effect waves-light btn" >
		 			<i class="material-icons left">comment</i>
		 		Remarks / Suggestions</button>
	      	</div>
		</div>
	</script>
	<div id="edit_item_push" class="collection container_main hide">

		<div id="edit_item_all_the_fields">

		</div>
		<input type="hidden" id="_id" class="tg-inputs" />
		<button id="update_report" class="waves-effect waves-light btn">
		 			<i class="material-icons left">save</i>
		 	Update </button>
	</div>

	<div id="edit_push" class="container_main hide">
		<?php include 'partial_report_edit.php';?>
		<div id="all_the_fields">

		</div>
		<button id="save_report" class="waves-effect waves-light btn">
		 			<i class="material-icons left">save</i>
		 		Save </button>
	</div>

	  <div id="list_push" class="collection container_main">
	  </div>
	  <div onclick="pdf()">print</div>

	  <div id="details_push" class="collection container_main">
	  </div>
	<a class="btn-floating left btn-large waves-effect waves-light red" href="#report/add"><i class="material-icons">add</i></a>
</div>
</div>
</div>
</div>


</main>
  <?php include 'includes/footer-new.php';?>
	<script src="asset/js/app/pages/report_list.js"></script>

