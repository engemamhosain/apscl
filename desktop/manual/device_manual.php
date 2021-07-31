<?php include '../includes/header-new.php';?>
<main>
    <div class="container">
    <!-- <a class="waves-effect waves-light btn" onclick='location.href="approved_report_filter.php"
'><i class="material-icons left">filter_list</i>Filter</a> -->
        <div class="card"><?php include '../includes/manual_search_list.php';?></div>
    </div>
</main> 


<script type="text/javascript">
    $(".username").html(localStorage.name+" ("+localStorage.role+")");
    $(".userid").html( "ID: " + localStorage.id );
</script>


<script src="../asset/js/app/pages/manual.js"></script>

<?php include '../includes/footer-new.php';?>
<script src="../asset/vendor/Pagination/js/dynapagin.js"></script> 