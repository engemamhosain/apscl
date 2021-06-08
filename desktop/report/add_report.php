<?php include '../includes/header-new.php';?>
<style>
	.page-title{

    margin-top: 15px;
    text-align: center;

	}
</style>

<main>
<div class="container" style="background-color:white">
	<h1 class="page-title">Create A Equipment Maintenance Report </h1>



	<div id="edit_item_push">
	<div class="card-panel">
			<div class="row">
			<div class="input-field col s12">

				<label for="first_name">Perform Date</label>
				<input type="text" class="datepicker">	<br>
			</div>
			</div>
  	  </div>

		<div id="edit_item_all_the_fields"></div>



		<!-- <label for="first_name">Assign Report</label>

		<div class="row">
			<div class="col s12">
			<div class="row">
				<div class="input-field col s12">
				<i class="material-icons prefix">search</i>
				<input type="text" id="autocomplete-input" class="autocomplete1">
				<label for="autocomplete-input">names</label>
				</div>
			</div>
			</div>
 		</div> -->


		<button id="add_report" class="waves-effect waves-light btn">
		 			<i class="material-icons left">save</i>Save
		</button>

	</div>


	<?php include 'partial_report_edit.php';?>
</div>


</main>



  <?php include '../includes/footer-new.php';?>
  <script src="../asset/js/app/pages/add_report.js"></script>

