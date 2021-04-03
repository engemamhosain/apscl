

var start = "2000-11-11";
var obj = {};
getObj = ()=>{
  
  if($(".start_date").val()==""){
    obj.performed_date_rage_start = start;

  }else{
    obj.performed_date_rage_start = new Date($(".start_date").val()).toShortFormat()
  }
  if($(".end_date").val()==""){
    obj.performed_date_rage_end = new Date().toShortFormat();
  }else{
    obj.performed_date_rage_end = new Date($(".end_date").val()).toShortFormat();
  }
  obj.keyword = $('#search').val()
  return obj;

}


report_search = ()=>{
  get("search_gm_all_reports.php",{page_row_count:100,page_offset:0,...getObj()},function (result){
    try { 
       var data = result.data
       $(".list").html("");
       $(".list").append(`<h4 style="color:green">Search Result ${result.count} </h4>`);
            data.forEach(element => {
          
              $(".list").append(`
              
              <a  onclick="goApproveDetail('${element.id}','${element.approved}')">${element.name_of_trouble}</a><br><br>
          
            `);  
       });
    } catch (error) {}
    
})

}
function goApproveDetail(link,approve_status){
 
  location.href="details_report.php#approved/"+link
}







Date.prototype.toShortFormat = function() {

  let monthNames =["Jan","Feb","Mar","Apr",
                    "May","Jun","Jul","Aug",
                    "Sep", "Oct","Nov","Dec"];
  
  let day = this.getDate();
  
  let monthIndex = this.getMonth();
  //let monthName = monthNames[monthIndex];
  let monthName = monthIndex+1;
  
  let year = this.getFullYear();
  
  return `${year}-${monthName}-${day}`;  
}


$('.start_date').change(function(){
  report_search();
});

$('.end_date').change(function(){
  report_search();
});


$(document).ready(function(){
  $(".input-field").on("keyup", function() {
  
        $(".list").html("");

    page_offset=0;
    report_search();

  
  });
});
