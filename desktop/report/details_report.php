
<?php include '../includes/header-new.php';?>
<main>
<div class="container">
	<div class="scrollspy">

		<div class="row">
			<div class="col s12 m12 l12 xl12">




				<script type="text/template" id="tmp_report_details">

					<div class="">
						<div class="col s12 m8 x12 ">

							<span style="font-weight: bold;">
							Name of trouble
							</span>
							<br>

						<a><span class="title">
							<%=name_of_trouble %>
						</span></a>
						<br>
						</div>
						<div class="col s12 m4 x4 ">
						<span style="font-weight: bold;">
						Report creator
						</span>
						<br>

						<a href=# ><%= report_creator %>
						</a>

						<br>

						<span style="font-weight: bold;">
						Performed date
						</span>
						<br>

						<span><%= performed_date %></span>
						<br>
						</div>


						<span style="font-weight: bold;">
						Description of trouble
						</span>
						<br>
						<div>
							<%= trouble_description %>
						</div>
						<br>
						<span style="font-weight: bold;">
						Trouble analysis
						</span>
						<br>
						<div>
							<%= trouble_analysis %>
						</div>
						<br>
						<span style="font-weight: bold;">
						Description of work
						</span>
						<br>
						<div>
							<%= description_of_work %>
						</div>
						<br>
						<span style="font-weight: bold;">
						Used tools list
						</span>
						<br>
						<div>
							<%= used_tools_list %>
						</div>
						<br>

						<span style="font-weight: bold;">
						Root cause analysis
						</span>
						<br>

						<div>
							<%= root_cause_analysis %>
						</div>

						<br>
						<span style="font-weight:bold;">
						Referance manual
						</span>

						<br>

						<div>
							"<%= referance_manual %>"
						</div>

						<span style="font-weight:bold;">
						List of personel
						</span>

						<br>

						<div>
							<%=list_of_personel %>
						</div>


						<!-- <span style="font-weight:bold;">
						Approved by
						</span>
						<br>

						<div>
							<%= approved_by_name %>
						</div>

							<span style="font-weight:bold;">
							approved_date
						</span>
						<br>

						<div>
							<%= new Date(parseInt(updated_on)) %>
								
						</div> -->

						<br><br>
						</div>
					</div>
				</script>





			
				<div id="details_push" class="collection container_main"></div>
				<a class="waves-effect waves-light btn approve" onclick= "approve()">Approved</a>
			</div>
		</div>

		

	</div>
</div>



</main>


  <?php include '../includes/footer-new.php';?>
  <script src="../asset/js/app/pages/details_report.js"></script>	

