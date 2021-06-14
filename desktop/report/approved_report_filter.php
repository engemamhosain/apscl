
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




<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">date_range</i>
		  <input id="icon_prefix" type="text" class="datepicker start_date" >
          <label for="icon_prefix">Start Date</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">date_range</i>
          <input id="icon_telephone" type="text" class="datepicker end_date">
          <label for="icon_telephone">End Date </label>
        </div>
      </div>
    </form>
</div>
	
<!-- <div class="row">
      <div class="col s6">
	    Start Date <input type="text" class="datepicker">
	  </div>
      <div class="col s6">
	  	End Date <input type="text" class="datepicker">
	  </div>
</div> -->


<div class="row">
      <div class="col s12">
	 
			<div class="input-field col12">
				<i class="material-icons prefix">search</i>
				<input type="text" id="search" value="">
				<label for="search">Search KKS/Plant/Title</label>
				</div>
			</div>

	  </div>
</div>
<!-- <div style="margin:100px;" class="row">
	<a class="waves-effect waves-light btn" onclick="location.reload()" style="float:left;">Cancel</a>
	<a class="waves-effect waves-light btn"  onclick="Filter()" style="float:right;">Apply</a>
</div> -->


	<div class="scrollspy">

		<div class="row">
			<div class="col s12 m12 l12 xl12">
				<div id="list_push" class="collection container_main"></div>

			</div>
		</div>
	</div>
</div>
	<div class="row">
	<div class="list collection container_main" style="margin:100px"></div>
	</div>
</main>


  <?php include '../includes/footer-new.php';?>
  <script src="../asset/js/app/pages/approved_report_search.js"></script>
