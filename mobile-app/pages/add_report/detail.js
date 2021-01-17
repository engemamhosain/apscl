
 //get("maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
// get("my_maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
  var test;
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