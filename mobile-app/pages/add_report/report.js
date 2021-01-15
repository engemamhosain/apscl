


if(location.hash=="#my"){
  get("my_maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
    try {
       var data = result.data
       data.forEach(element => {
        $(".list").append(`
      
          <li class="collection-item avatar" onclick="goApproveDetail('${element.id}')">
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
       data.forEach(element => {
        $(".list").append(`
      
          <li class="collection-item avatar" onclick="goWaitingDetail('${element.id}')">
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
       data.forEach(element => {
        $(".list").append(`
      
          <li class="collection-item avatar" onclick="goApproveDetail('${element.id}')">
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

 





function goMyDetail(link){
  location.href="detail_report.html#my,"+link
}

function goWaitingDetail(link){
  location.href="detail_report.html#waiting,"+link
}
function goApproveDetail(link){
  location.href="detail_report.html#approve,"+link
}

