var page_offset=0;
var search_type="report";
var types= ["report","manual"];
var start = "2020-02-01";
var obj = {};
getObj = ()=>{
  
  if($("#start_date").val()==""){
    obj.performed_date_rage_start = start;
  }else{
    obj.performed_date_rage_start = new Date($("#start_date").val()).toShortFormat();
  }

  if($("#end_date").val()==""){
    obj.performed_date_rage_end = new Date().toShortFormat();
   // obj.performed_date_rage_end = "2020-02-06";
  }else{
    obj.performed_date_rage_end = new Date($("#end_date").val()).toShortFormat();
  }

  obj.plant_id = $('#plant_option').val();
  obj.keyword = $('#search').val()
  return obj;

}
function getSearch(){ 
   search({page_offset:0,...getObj()},function (result){
   
    try {

      $(".progress").hide();
       var data = result.data;
       if(result.count==0){
        return
      }

       page_offset+=result.row_count;
       $(".list").html("");
       $(".list").append(`<h4 style="color:green">Search Result ${result.count} </h4>`);
       data.forEach(element => {
        $(".list").append(`
        
        <div  onclick="goPdf('${element.file_url}',${1})">
          <a href="">${element.title_of_document}</a><br><br>
    
        </div>

    
      `);
           
       });
      

    } catch (error) {
      
    }
    
})

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
  location.href="../add_report/detail_report.html#approve,"+link+","+approve_status
}




function openPdf(pdf){

if(window.app){
      app.goPdf(pdf);
    }
 // location.href="device_manual_pdf_view.html#"+pdf;
 // window.open(pdf);

}

function goPdf(pdf,page){


    if(window.app){
      app.goPdf(pdf);
    }
//  location.href=pdf;
   //window.open(pdf+"#"+page);

}

$(document).ready(function(){
        $(".input-field").on("keyup", function() {
        
              $(".list").html("");

              // if($("#search").val().length==0){
              //   load_default()
              //   return
              //   }
          page_offset=0;

          if($('input[name="group1"]:checked').val()==types[0]){
            report_search();
          }else{
            getSearch();
          }
        
        });
});


$(window).scroll(function() {
  if($(window).scrollTop() == $(document).height() - $(window).height()) {
    if($("#search").val().length==0){
      //load_default()
      
      }else{
        getSearch($("#search").val(),location.hash.substring(1,location.hash.length),page_offset);
        $(".progress").show();
      }

  }
});




$('input[type=radio][name=group1]').change(function() {

    page_offset=0;
    if(this.value==types[0]){
      report_search();
    }else{
      getSearch();
    }

});



$('#plant_option').change(function() {

  if($('input[name="group1"]:checked').val()==types[0]){
    report_search();
  }else{
    getSearch();
  }

});


$('#end_date').change(function(){
    if($('input[name="group1"]:checked').val()==types[0]){
      report_search();
    }else{
      getSearch();
    }
});

$('#start_date').change(function(){
  if($('input[name="group1"]:checked').val()==types[0]){
    report_search();
  }else{
    getSearch();
  }
});





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


