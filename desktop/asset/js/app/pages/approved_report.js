
get('gm_maintenance_report.php	',{page_offset:0}, function(data){

  try {
    LoadPagination(data.count)
    var template = $("#tmp_report_list").html(),tx = _.template(template), html_to_push = ''; 

    _.each(data.data, function(item, key, arr){
        html_to_push  += tx(item);
    });

    if(data.data.length==0){
      $("#list_push").html("<h4>Sorry, No reports has been found in this page.</h4>");
    }else{
      $("#list_push").html(html_to_push);
    }
    
   } catch (error) {
       console.log(error)
   }

});



function LoadList(page_offset){
  get('gm_maintenance_report.php	',{page_offset:page_offset}, function(data){

    try {
      var template = $("#tmp_report_list").html(),tx = _.template(template), html_to_push = '';
      _.each(data.data, function(item, key, arr){
          html_to_push  += tx(item);
      });
  
      if(data.data.length==0){
        $("#list_push").html("<h4>Sorry, No reports has been found in this list.</h4>");
      }else{
        $("#list_push").html(html_to_push);
      }
      
     } catch (error) {
         console.log(error)
     }
  
  });
}

function LoadPagination(count){
  $(".count").html("Total Approved Report "+count);
  $(function () { 
    $('#dynapagin').dynapagin({
      total:Math.ceil(count/25),
    }, function (page) {
      $('#content').html('<em>jQuery Plugins Page '+page+'</em>!');
    }).on('page', function (event, page) {
      console.log(page)
      // LoadList(0)
      var count =page-1;
      LoadList(count*25)
    });
  });
}


