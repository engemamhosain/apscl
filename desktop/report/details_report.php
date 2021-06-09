
<?php include '../includes/header-new.php';?>

<link rel="stylesheet" href="rating/jsRapStar.css" />
	<link rel="stylesheet" href="rating/rating.css" />
<style>
	.page-title{
    margin-top: 15px;
    text-align: center;
	}

	.container_main img{width:100%}
</style>
<h1 class="page-title">Equipment Maintenance Report </h1>

<main>
<div class="container">

<div class="card">
        <div class="card-content">


				<script type="text/template" id="tmp_report_details">

					<div class="row">
						<div class="col s12 m8 x12 ">

							<span style="font-weight: bold;">
							Plant Name
							</span>
							<br>

						<a><span class="title">
							<%=plant_name %>
						</span></a>
						<br>
						</div>
						<div class="col s12 m4 x4 ">
						<span style="font-weight: bold;">
						Print  <i class="material-icons small " onclick="print()">print</i><br>
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

					<div class="col s12">
					<hr>
						<span style="font-weight: bold;">
						Department
						</span>
						<br>
						<div>
							<%= department %>
						</div>
						<br>
						<span style="font-weight: bold;">
						KKS No
						</span>
						<br>
						<div>
							<%= kks_no %>
						</div>
						<br>
						<span style="font-weight: bold;">
						Name Of Trouble
						</span>
						<br>
						<div>
							<%= name_of_trouble %>
						</div>
						<br>


						<span style="font-weight: bold;">
						Trouble Analysis
						</span>
						<br>

						<div>
							<%= trouble_analysis %>
						</div>

						<br>
						<span style="font-weight:bold;">
						Description Of Work
						</span>

						<br>

						<div>
							<%= description_of_work %>
						</div>

						<span style="font-weight:bold;">
						Used Tools List
						</span>
						<div>
							<%=used_tools_list %>
						</div>
						<br>


						<span style="font-weight: bold;">
						<!-- Description Of Trouble -->
						Lessons Learned

						</span>
						<br>
						<div>
							<%= trouble_description %>
						</div>
						<br>





						<span style="font-weight:bold;">
							Root Cause Analysis
						</span>

						<br>

						<div>
							<%=root_cause_analysis %>
						</div>

						<span style="font-weight:bold;">
						Reference Manual
						</span>

						<br>

						<div>
							<%=referance_manual %>
						</div>


						<span style="font-weight:bold;">
						List of personel
						</span>

						<br>

						<div>
							<%=list_of_personel %>
						</div>


<!--
						<span style="font-weight:bold;">
						Plant name
						</span>

						<br>

						<div>
							<%=plant_name %>
						</div> -->
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

						<br><br></div>
						</div>
					</div>
				</script>






				<div id="details_push" class="container_main"></div>
				<a class="waves-effect waves-light btn approve" onclick= "approve()">Approved</a>
			</div>




			<div class="list"></div>

			<div class="card-panel review" style="display:none;">
				Rating:<div id="rating"></div>
				<b>Review</b>
				<textarea id="comment"  required></textarea>
				<a class="waves-effect waves-light btn review" onclick= "review()">Review</a>
	   		</div>

	</div>
</div>


</div>

</main>


<script>
	    function print(){
        var cssHead = `<head>
            <link rel="stylesheet" href="../asset/vendor/materialize/css/admin-materialize.min.css">
            </head>`

        var divContents =$(".container_main").html()+$(".list").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head>'+cssHead+'<title>APSCL</title>');
            printWindow.document.write(`</head><body> <div class="card">`);
            printWindow.document.write(divContents);
            printWindow.document.write('</div></body></html>');
            printWindow.document.close();
            setTimeout(function(){
                printWindow.print();
            },2000)
    }
</script>

  <?php include '../includes/footer-new.php';?>
  <script src="rating/jsRapStar.js"></script>
  <script src="../asset/js/app/pages/details_report.js"></script>
