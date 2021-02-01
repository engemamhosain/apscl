
 //get("maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
// get("my_maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
  var test;
  var rating=5;
  function load(url){
    get(url,{page_row_count:100,page_offset:0},function (result){
      try {
         var data = get_one(result.data,location.hash.split(",")[1]);
         test=data;
         if(data.lenght<1){
            return
         }
          $(".detail").html(`
        
              <div class="col s12 m6">
                <div class="card blue-grey darken-1">
                  <div class="card-content white-text">


                  <span class="card-title">Name Of Trouble</span>
                  <div>${data[0].name_of_trouble}</div><br>

                  <span class="card-title">Description Of Work</span>
                  <div>${data[0].description_of_work}</div><br>
            
                  <span class="card-title">Root Cause Analysis</span>
                  <div>${data[0].root_cause_analysis}</div><br>
          
                  <span class="card-title">Trouble Analysis</span>
                  <div>${data[0].trouble_analysis}</div><br>

                  <span class="card-title">Trouble Description</span>
                  <div>${data[0].trouble_description}</div>
                  </div>
              
                </div>
            </div>
        `);
             
    
      } catch (error) {}
      
  })
  }


if(location.hash.split(",")[0]=="#my"){
  load("my_maintenance_report.php");

  $(".apporove").hide();
}

if(location.hash.split(",")[0]=="#waiting"){
  load("waiting_for_approval_maintenance_report.php");
 
}

if(location.hash.split(",")[0]=="#approve"){
  load("maintenance_report.php");
  $(".apporove").hide();
}

function approve(){
  get("update_approved_maintenance_report.php",{approved:1,id:location.hash.split(",")[1]},function (result){   
    window.history.back();
  })
}

$('#rating').jsRapStar({
  step: false,
  value: 5,
  length: 5,
  starHeight: 20,
  colorFront: '#0f0',
  onClick: function (score) {
      rating = score
  },
  onMousemove: function (score) {
      $(this).attr('title', 'Rate ' + score);
  }
});


function review(){
  get("i_comment.php",{"page_id":location.hash,rating:rating,comment:$("#comment").val()}, function(data){ 
      location.reload()
  });
}




function loadApprove(){




  get('gm_comment.php',{"page_id":location.hash}, function(data){
  
      try {
  
          data.data.forEach((element,index) => {
              console.log(index)
            
           $(".list").append(`  
           <ul class="collection">
         
  
           <li class="collection-item avatar">
             <i class="material-icons circle green">comment</i>
             <span class="title">${element.created_by_name}</span>
             <p>
             ${element.comment}
             </p>
             <a href="#!" class="secondary-content"><div class="${index}"></div></a>
           </li>
         
         </ul>
               
         `);
  
         $('.'+index).jsRapStar({
             enabled:false,
             value: element.rating,
        length: 5,
        starHeight: 15
      });
              
          });
       } catch (error) {
           console.log(error)
       }
  
  });

} 
loadApprove()