
 //get("maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
// get("my_maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
 get("waiting_for_approval_maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
    try {
       var data = result.data
       data.forEach(element => {
        $(".list").append(`
      
          <li class="collection-item avatar" onclick="goSearch('${element.id}')">
          <i class="material-icons circle green">message</i>
          <span class="title">Report  ${element.name_of_trouble}</span>
          <p>${element.report_creator}</p>
          <a href="#!" class="secondary-content"><i class="material-icons">chevron_right</i></a>
        </li>
      `);
           
       });
    } catch (error) {}
    
})

function goSearch(link){
  location.href="approve_report.html#"+link
}

    $(document).ready(function(){
      $('select').formSelect();
       $('input#input_text, textarea#textarea2').characterCounter();
       $('.dropdown-trigger').dropdown();
    });



    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".list .card").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

