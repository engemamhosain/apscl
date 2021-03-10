
 //get("maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
// get("my_maintenance_report.php",{page_row_count:100,page_offset:0},function (result){
  var store;
  var rating=5;
  function load(url){
    get(url,{page_row_count:100,page_offset:0},function (result){
      try {
         var data = get_one(result.data,location.hash.split(",")[1]);
         store=data;
         if(data.lenght<1){
            return
         }
         if(location.hash.split(",")[0]=="#my"){
          $(".detail").html(`
        
          <div class="col s12 m6">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">


              <span class="card-title">Created By</span> 
              <div><span class="created_by_name">${data[0].created_by_name}</span> </div><br>

              <span class="card-title">Department</span>
              <div><span class="department">${data[0].department}</span> <i onclick="edit('department')" style="display:inline; float: right;" class="Small material-icons">create</i> </div><br>


              <span class="card-title">Name Of Trouble</span>
              <div ><span class="name_of_trouble">${data[0].name_of_trouble} </span><i onclick="edit('name_of_trouble')" style="display:inline; float: right;" class="Small material-icons">create</i> </div><br>

              <span class="card-title">Description Of Work</span>
              <div > <span class="description_of_work">${data[0].description_of_work} </span><i onclick="edit('description_of_work')" style="display:inline; float: right;" class="Small material-icons">create</i> </div><br>
        
              <span class="card-title">Root Cause Analysis</span>
              <div><span class="root_cause_analysis">${data[0].root_cause_analysis} </span><i onclick="edit('root_cause_analysis')" style="display:inline; float: right;" class="Small material-icons">create</i> </div><br>
      
              <span class="card-title">Trouble Analysis</span>
              <div><span class="trouble_analysis">${data[0].trouble_analysis} </span><i onclick="edit('trouble_analysis')" style="display:inline; float: right;" class="Small material-icons">create</i> </div><br>

              <span class="card-title">Trouble Description</span>
              <div ><span class="trouble_description">${data[0].trouble_description} </span><i onclick="edit('trouble_description')" style="display:inline; float: right;" class="Small material-icons">create</i> </div><br>
              

              <span class="card-title">Equipment Name</span>
              <div><span class="equipment_name">${data[0].equipment_name}</span> <i onclick="edit('equipment_name')" style="display:inline; float: right;" class="Small material-icons">create</i> </div><br>
              

              <span class="card-title">KKS No</span>
              <div ><span class="kks_no">${data[0].kks_no} </span><i onclick="edit('kks_no')" style="display:inline; float: right;" class="Small material-icons">create</i> </div><br>
            
              <span class="card-title">List Of Personel</span>
              <div ><span class="list_of_personel">${data[0].list_of_personel}</span>  <i onclick="edit('list_of_personel')" style="display:inline; float: right;" class="Small material-icons">create</i> </div><br>
              </div>
          
            </div>
        </div>
    `);
         }else{
          $(".detail").html(`
        
          <div class="col s12 m6">
            <div class="card blue-grey darken-1">
              <div class="card-content white-text">


              <span class="card-title">Created By</span> 
              <div class="created_by_name">${data[0].created_by_name}</div><br>

              <span class="card-title">Department</span>
              <div>${data[0].department}</div><br>


              <span class="card-title">Name Of Trouble</span>
              <div>${data[0].name_of_trouble}</div><br>

              <span class="card-title">Description Of Work</span>
              <div>${data[0].description_of_work}</div><br>
        
              <span class="card-title">Root Cause Analysis</span>
              <div>${data[0].root_cause_analysis}</div><br>
      
              <span class="card-title">Trouble Analysis</span>
              <div>${data[0].trouble_analysis}</div><br>

              <span class="card-title">Trouble Description</span>
              <div>${data[0].trouble_description}</div><br>
              

              <span class="card-title">Equipment Name</span>
              <div>${data[0].equipment_name}</div><br>
              

              <span class="card-title">KKS No</span>
              <div>${data[0].kks_no}</div><br>
            
              <span class="card-title">List Of Personel</span>
              <div>${data[0].list_of_personel}</div><br>
              </div>
          
            </div>
        </div>
    `);
         }
         
             
    
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

//var editor = new Jodit('#editor');

new Jodit('#editor', {
  enableDragAndDropFileToEditor: true,
  filebrowser: {
      ajax: {
          url: 'connector/index.php'
      }
  },
  uploader: {
      url: base_k20api + '/file/jedit_upload_file.php?jwt='+localStorage.jwt,
      data:{jwt:localStorage.jwt},
      format: 'json',
      pathVariableName: 'path',
      filesVariableName: 'file',

      prepareData: function (data) {                 
          return data;
      },
      isSuccess: function (resp) {
         console.log('files:: ', resp);
         var str = '';
         for(var i=0, ilen = resp.length; i < ilen; i+=1){
             str += '<img src="'+resp[i]+'" />'
         }
         this.jodit.selection.insertHTML(str);

         return !resp.error;
      },
      getMsg: function (resp) {
          return resp.msg.join !== undefined ? resp.msg.join('') : resp.msg;
      },
      process: function (resp) {  
          
             console.log(resp)
          return {
              files: resp[this.options.filesVariableName] || [],
              path: resp.assets.path,
              baseurl: resp.baseurl,
              error: resp.error,
              msg: resp.msg
          };
      },
      error: function (e) {           
          console.log("error");
          this.events.fire('errorPopap', [e.getMessage(), 'error', 4000]);
      },
      defaultHandlerSuccess: function (data, resp) {
          console.log("defaultHandlerSuccess");
       
          
          var i, field = this.options.filesVariableName;
          if (data[field] && data[field].length) {
              for (i = 0; i < data[field].length; i += 1) {
                  this.selection.insertImage(data.baseurl + data[field][i]);
              }
          }
      },
      defaultHandlerError: function (resp) {
           console.log("defaultHandlerError");
          this.events.fire('errorPopap', [this.options.uploader.getMsg(resp)]);
      }
  }


      });

var store_class_name;
function edit(class_name){
  store_class_name = class_name;

  $(".wrapper-non-edit").hide();
  $(".wrapper-editor").show();
  editor.value = store[0][class_name]
  console.log(class_name)

}
function Cancel(){
  $(".wrapper-non-edit").show();
  $(".wrapper-editor").hide();
}

function Save(){

  $(".wrapper-non-edit").show();
  $(".wrapper-editor").hide();

  $("."+store_class_name).html(editor.value)
  store[0][store_class_name] = editor.value


    get("u_maintenance_report.php",{...store[0],id:location.hash.split(",")[1]},function (result){   
    //  window.history.back();
    })
  
}