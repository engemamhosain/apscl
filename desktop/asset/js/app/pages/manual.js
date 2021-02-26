
var page_offset=0;
function getSearch(keyword,id){

 
    get("search_gm_device_manual.php",{keyword:keyword,plant_id:id,page_offset:page_offset},function (result){
    try {
      $(".progress").hide();
       var data = result.data;
       if(result.count==0){
        return
      }
       page_offset+=result.row_count;
    
      
       data.forEach(element => {
        $(".list").append(`
        
        <tr class="childSelector">
        <td><a href="${element.file_url}">${element.volumn_no}</a></td>
        <td><a href="${element.file_url}">${element.document_number}</a></td>
        <td>${element.plant_name}</td>
        <td>${element.title_of_document}</td>
        </tr>

    
      `);
           
       });
      

    } catch (error) {
      
    }
    
})

}
function load_default(){



    get('gm_device_manual.php',{}, function(data){

        try {

            data.data.forEach(element => {
            
            $(".list").append(`  
            
                <tr class="childSelector">
                <td><a href="${element.file_url}">${element.volumn_no}</a></td>
                <td><a href="${element.file_url}">${element.document_number}</a></td>
                <td>${element.plant_name}</td>
                <td>${element.title_of_document}</td>
                </tr>
        `);
                
            });
        } catch (error) {
            console.log(error)
        }

    });
}

load_default();


$(document).ready(function(){
    $(".input-field").on("keyup", function() {
    
          $(".list").html("");
  
          if($("#search").val().length==0){
            load_default()
            return
            }
      page_offset=0;
      getSearch($("#search").val(),1);
     
    });
  });



  $(window).scroll(function() {
    if($(window).scrollTop() == $(document).height() - $(window).height()) {
      if($("#search").val().length==0){
        //load_default()
        
        }else{
          getSearch($("#search").val(),1);
          $(".progress").show();
        }
  
    }
  });