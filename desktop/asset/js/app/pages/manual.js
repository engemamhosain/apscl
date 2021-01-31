
get('gm_device_manual.php',{}, function(data){

    try {

        data.data.forEach(element => {
          
         $(".list").append(`  
         
            <tr class="childSelector">
            <td><a href="${element.file_url}">${element.volumn_no}</a></td>
            <td><a href="${element.volumn_no}">${element.document_number}</a></td>
            <td>${element.equipment_name}</td>
            <td>${element.plant_name}</td>
            <td>${element.title_of_document}</td>
            </tr>
       `);
            
        });
     } catch (error) {
         console.log(error)
     }

});
