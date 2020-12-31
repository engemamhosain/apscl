
function getSearch(keyword,id){


   search({keyword:keyword,plant_id:id},function (result){
    try {
       var data = result.data;
       data.forEach(element => {
        $(".list").append(`
        
        <div class="card horizontal" onclick="goPdf('${element.pdf_name}',${element.page_no})">
        
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

}

getSearch( "Hard Drive board",1);
function goPdf(name,page){

  
    window.open(manual_pdf+name+"#"+page);

}

    $(document).ready(function(){
  $(".input-field").on("keyup", function() {
        $(".list").html("");
    getSearch($("#search").val(),location.hash.substring(1,location.hash.length));
   
  });
});

