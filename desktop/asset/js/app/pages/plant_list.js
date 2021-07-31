

get("plants.php",{},function (result){
    try {
       var data = result.meta_data
       
       data.forEach(element => {
        $(".list").append(`
          <li  onclick="goManual('${element.id}')">       
    
          <div class="collapsible-header" style="background: lightblue;"><i class="material-icons medium">format_line_spacing</i><a>${element.name}</a></div>

        </li>
      
    
      `);
           
       });
    } catch (error) {
        throw error;
    }
    
})

function goManual(id){

    location.href=`device_manual.php#${id}`;
}