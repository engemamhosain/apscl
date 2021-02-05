
<?php include '../includes/header-new.php';?>
<main>
<div class="container">
	<style>
	.page-title{

    margin-top: 15px;
    text-align: center;

	}
</style>
<h1 class="page-title">Report list Waiting for Approval  </h1>


<div class="scrollspy">
	<div class="input-field col12">
          <i class="material-icons prefix">search</i>
           <input type="text" id="search" value="">
          <label for="search">Search</label>
        </div>
    </div>

<div class="row">
<div class="col s12 m12 l12 xl12">


	<script type="text/template" id="tmp_report_list">

	    <div class="collection-item avatar childSelector" >
	      <i class="material-icons circle blue">dvr</i>

	      <span class="title"><a  style="padding-right:80px;" class="click_title" href=details_report.php#waiting/<%= id %> data-id=<%= id %>  ><%= name_of_trouble %></a></span><br>
	      <small><%= report_creator %>  <%= performed_date %></small>
	      <p> <%= $('<p>' +trouble_description+'</p>').text().substring(0, 250) %>
	      </p>
	    </div>
	</script>


	<div id="edit_item_push" class="collection container_main hide">

		<div id="edit_item_all_the_fields">

		</div>

	</div>


	<div id="list_push" class="collection container_main"></div>
	<div id="editor"></div>
	<div id="details_push" class="collection container_main"></div>
</div>
</div>
</div>
</div>


</main>

  <?php include '../includes/footer-new.php';?>
  <script src="../asset/js/app/pages/waiting_for_approve.js"></script>

