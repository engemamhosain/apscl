
<?php include '../includes/header-new.php';?>
<main>
<div class="container">
	<style>
	.page-title{

    margin-top: 15px;
    text-align: center;

	}
</style>
<h1 class="page-title">Equipment Maintenance Report </h1>
<h3 class="count" style="color:#2196f3"></h3>
<div class="scrollspy">

	<div class="input-field col12">
          <i class="material-icons prefix">search</i>
           <input type="text" id="search" value="">
          <label for="search">Search</label>
        </div>
    </div>


<a class="waves-effect waves-light btn" onclick='location.href="approved_report_filter.php"
'><i class="material-icons left">filter_list</i>Filter</a>
<div class="row">
<div class="col s12 m12 l12 xl12">


	<script type="text/template" id="tmp_report_list">

	    <div class="collection-item avatar childSelector" style ="position:relative">
	      <i class="material-icons circle blue">dvr</i>


	      <span class="title"><a  style="padding-right:80px;" class="click_title" href=details_report.php#approved/<%= id %> data-id=<%= id %>  ><%= name_of_trouble %></a></span><br>
	      <small><%= report_creator %>  <%= performed_date %></small>
	      <p> <%= $('<p>' +trouble_description+'</p>').text().substring(0, 250) %>
	      </p>
	    </div>
	</script>


	<div id="edit_item_push" class="collection container_main hide">

		<div id="edit_item_all_the_fields"></div>

	</div>


	<div id="list_push" class="collection container_main"></div>

	<div id="dynapagin"></div>
  
	<div id="editor"></div>
	<div id="details_push" class="collection container_main"></div>
</div>
</div>
</div>
</div>


</main>

  <?php include '../includes/footer-new.php';?>
  <script src="../asset/vendor/Pagination/js/dynapagin.js"></script> 
  <script src="../asset/js/app/pages/approved_report.js"></script>
