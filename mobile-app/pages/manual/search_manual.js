var page_offset=0;
function getSearch(keyword,id){

 
   search({keyword:keyword,plant_id:id,page_offset:page_offset},function (result){
    try {
      $(".progress").hide();
       var data = result.data;
       if(result.count==0){
        return
      }
       page_offset+=result.row_count;
    
      
       data.forEach(element => {
        $(".list").append(`
        
        <div class="card horizontal" onclick="goPdf('${element.file_url}',${1})">
        
          <div class="card-stacked">
            <div class="card-content">

              <br>
              <b>Date:</b><br>
              <div>${element.created_on}</div>
              <b>${element.title_of_document}</b><br>
              <b>Id:${element.id}</b><br>
              <b>Volumn no:</b>
              <div>${element.volumn_no}</div>
            </div>

            <div class="card-action">
              <a href="">${element.title_of_document}</a>
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

  get("gm_device_manual.php",{page_offset:1000},function(data){
    $(".progress").hide();


    try {
      data.data.forEach(element => {
       $(".list").append(`
       
       <div class="card horizontal" onclick="openPdf('${element.file_url}')">
       
         <div class="card-stacked">
           <div class="card-content">

            <b>Date:</b><br>
            <div>${element.created_on}</div>
             <b>Volumn No:</b>
             <div>${element.volumn_no}</div>

             <b>Plant Name:</b>
             <div>${element.plant_name}</div>

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
    page_offset=0;
    getSearch($("#search").val(),location.hash.substring(1,location.hash.length));
   
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