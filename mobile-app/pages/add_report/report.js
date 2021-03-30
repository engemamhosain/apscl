


if(location.hash=="#my"){
  get("my_maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
    try {
       var data = result.data
       $(".list").append(`<h4 style="color:green">Total ${result.count} </h4>`);
       data.forEach(element => {
        $(".list").append(`
      
          <li class="collection-item avatar" onclick="goMyDetail('${element.id}','${element.approved}')">
          <i class="material-icons circle green">message</i>
          <span class="title">Report  ${element.name_of_trouble}</span>
          <p>${element.report_creator}</p>
          <a href="#!" class="secondary-content"><i class="material-icons">chevron_right</i></a>
        </li>
      `);
           
       });
    } catch (error) {}
    
})

}

if(location.hash=="#waiting"){
  get("waiting_for_approval_maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
    try {
       var data = result.data
       $(".list").append(`<h4 style="color:green">Total ${result.count} </h4>`);
       data.forEach(element => {
        $(".list").append(`
      
          <li class="collection-item avatar" onclick="goWaitingDetail('${element.id}','${element.approved}')">
          <i class="material-icons circle green">message</i>
          <span class="title" style="color:green">Report  ${element.name_of_trouble}</span>
          <p>${element.report_creator}</p>
          <a href="#!" class="secondary-content"><i class="material-icons">chevron_right</i></a>
        </li>
      `);
           
       });
    } catch (error) {}
    
  })
}


if(location.hash=="#approved"){


  get("maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
    try {
       var data = result.data
       $(".list").append(`<h4 style="color:green">Total ${result.count} </h4>`);
       data.forEach(element => {
        $(".list").append(`
      
          <li class="collection-item avatar" onclick="goApproveDetail('${element.id}','${element.approved}')">
          <i class="material-icons circle green">message</i>
          <span class="title">Report  ${element.name_of_trouble}</span>
          <p>${element.report_creator}</p>
          <a href="#!" class="secondary-content"><i class="material-icons">chevron_right</i></a>
        </li>
      `);
           
       });
    } catch (error) {}
    
})

}

 





function goMyDetail(link,approve_status){
  location.href="detail_report.html#my,"+link+","+approve_status
}

function goWaitingDetail(link,approve_status){
  location.href="detail_report.html#waiting,"+link+","+approve_status
}
function goApproveDetail(link,approve_status){
  location.href="detail_report.html#approve,"+link+","+approve_status
}

