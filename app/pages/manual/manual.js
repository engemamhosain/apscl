

   get("getManual.php",{api_key:localStorage.api_key},function (result){
    try {
       var data = JSON.parse(result).entries;
       data.forEach(element => {
        $(".list").append(`
        
        <div class="card horizontal" onclick="goPdf('${element.Ducument_Name}')">
        
          <div class="card-stacked">
            <div class="card-content">

              <br><b>Volumn No:</b>
              <div>${element.Volumn_No}</div>

              <b>Plant Name:</b>
              <div>${element.Plant_Name}</div>

              Equipment Name:</b>
              <div>${element.Equipment_Name}</div>

              <p>${element.Title_Of_Document}</p>
            </div>

            <div class="card-action">
              <a href="">${element.Document_Number}</a>
            </div>
          </div>
        </div>

    
      `);
           
       });
      

    } catch (error) {
      
    }
    
})

function goPdf(link){
  //  console.log(link);
    window.open("../../../uploads/"+link);

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

