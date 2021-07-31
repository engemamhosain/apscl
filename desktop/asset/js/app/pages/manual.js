
var page_offset=0;

function getSearch(keyword,id){

 
    get("search_gm_device_manual.php",{keyword:keyword,plant_id:id,page_offset:page_offset},function (result){
    try {
      $(".count").html(`<h4>Search Count ${result.count}</h4>`);
      LoadPagination(result.count)
      $(".progress").hide();
       var data = result.data;
       if(result.count==0){
        return
      }
       page_offset+=result.row_count;
    
      
       data.forEach(element => {
        $(".list").append(`
        
        <tr class="childSelector">
        <td><a href="device_manual_pdf_view.php#${element.file_url}" target="_blank">${element.volumn_no}</a></td>
        <td><a href="device_manual_pdf_view.php#${element.file_url}" target="_blank">${element.document_number}</a></td>
        <td>${element.plant_name}</td>
        <td>${element.title_of_document}</td>
        </tr>

    
      `);
           
       });
      

    } catch (error) {
      
    }
    
})

}
function load_default(id){



    get('gm_device_manual.php',{plant_id:id}, function(data){

        try {
          $(".count").html(`<h4>Total Count ${data.count}</h4>`);
          LoadPagination(data.count)
            data.data.forEach(element => {
            
            $(".list").append(`  
            
                <tr class="childSelector">
                <td><a href="device_manual_pdf_view.php#${element.file_url}" target="_blank">${element.volumn_no}</a></td>
                <td><a href="device_manual_pdf_view.php#${element.file_url}" target="_blank">${element.document_number}</a></td>
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

load_default(location.hash.split("#")[1]);


$(document).ready(function(){
    $(".input-field").on("keyup", function() {
    
          $(".list").html("");
  
          if($("#search").val().length==0){
            load_default()
            return
            }
      page_offset=0;
      getSearch($("#search").val(),location.hash.split("#")[1]);
     
    });
  });



 





function LoadList(page_offset){

  get('gm_device_manual.php',{page_offset:page_offset}, function(data){

    try {
      $(".list").html("");
    
        data.data.forEach(element => {
        
        $(".list").append(`  
        
            <tr class="childSelector">
            <td><a href="device_manual_pdf_view.php#${element.file_url}" target="_blank">${element.volumn_no}</a></td>
            <td><a href="device_manual_pdf_view.php#${element.file_url}" target="_blank">${element.document_number}</a></td>
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





function LoadListSearch(){
  get("search_gm_device_manual.php",{keyword:$("#search").val(),plant_id:1,page_offset:page_offset},function (result){
    try {
      $(".list").html("");
      $(".progress").hide();
       var data = result.data;
       if(result.count==0){
        return
      }
      
          data.forEach(element => {
            $(".list").append(`
            
            <tr class="childSelector">
            <td><a href="device_manual_pdf_view.php#${element.file_url}" target="_blank">${element.volumn_no}</a></td>
            <td><a href="device_manual_pdf_view.php#${element.file_url}" target="_blank">${element.document_number}</a></td>
            <td>${element.plant_name}</td>
            <td>${element.title_of_document}</td>
            </tr>
            `);
              
          });
        

    } catch (error) {
      
    }
              
  });
}
  
  





function LoadPagination(count){

  $(function () { 
    $('#pagination').html("")
    $('#pagination').dynapagin({
      total:Math.ceil(count/25),
    }, function (page) {
      $('#content').html('<em>jQuery Plugins Page '+page+'</em>!');
    }).on('page', function (event, page) {
      console.log(page)
      // LoadList(0)
      var count =page-1;
      page_offset=count*25;
      if($("#search").val().length==0){
        LoadList(count*25)
      }else{
        LoadListSearch();
      }

    });
  });
}