
function getSearch(keyword,id){


   search({keyword:keyword,plant_id:id},function (result){
    try {
       var data = result.data;
       data.forEach(element => {
        $(".list").append(`
        
        <div class="card horizontal" onclick="goPdf('${element.file_url}',${element.page_no})">
        
          <div class="card-stacked">
            <div class="card-content">

              <br>

              <b>${element.pdf_name}</b><br>
              <b>Page no:${element.page_no}</b><br>
              <b>Search Line</b>
              <div>${element.page_text}</div>
            </div>

            <div class="card-action">
              <a href="">${element.pdf_name}</a>
            </div>
          </div>
        </div>

    
      `);
           
       });
      

    } catch (error) {
      
    }
    
})

}

function load_default(){

  get("gm_device_manual.php",{},function(data){



    try {
      data.data.forEach(element => {
       $(".list").append(`
       
       <div class="card horizontal" onclick="openPdf('${element.file_url}')">
       
         <div class="card-stacked">
           <div class="card-content">

             <br><b>Volumn No:</b>
             <div>${element.volumn_no}</div>

             <b>Plant Name:</b>
             <div>${element.plant_name}</div>

             Equipment Name:</b>
             <div>${element.equipment_name}</div>

             <p>${element.title_of_document}</p>
           </div>

           <div class="card-action">
             <a href="">${element.document_number}</a>
           </div>
         </div>
       </div>

   
     `);
          
      });
     

   } catch (error) {
     
   }

  })
  
}

load_default()
//getSearch( "Hard Drive board",1);

function openPdf(pdf){

  
  window.open(pdf);

}

function goPdf(pdf,page){

  
    window.open(pdf+"#"+page);

}

    $(document).ready(function(){
  $(".input-field").on("keyup", function() {
  
        $(".list").html("");

        if($("#search").val().length==0){
          load_default()
          return
          }
    getSearch($("#search").val(),location.hash.substring(1,location.hash.length));
   
  });
});

