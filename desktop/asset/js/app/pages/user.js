
// get('gm_users.php',{}, function(data){

//     try {

//         data.data.forEach(element => {
          
//          $(".list").append(`  


//          <tr class="childSelector">
//          <td> 
//              <img src="https://bootdey.com/img/Content/avatar/avatar1.png"  alt="">
//              <a href="#" class="user-link">${element.name}</a>
//              <span class="user-subhead">${element.DIVISION}</span>
//          </td>
//          <td class="text-center">
//              <span class="label label-default">${element.employee_id}</span>
//          </td>
     
//          <td class="text-center">
//              <span class="label label-default">${element.account_active}</span>
//          </td>
//          <td>
//              <a href="#">${element.email}</a>
//          </td>
//          <td>
//          ${element.created_on}
             
//          </td>	
//          <td>
                 
//              <a href="update_user.php#${element.employee_id}" > <i class="material-icons green-text">create</i></a>
//          </td>							
//      </tr>
//        `);
            
//         });
//      } catch (error) {
//          console.log(error)
//      }

// });






var meta_data,search_data;
get("all_user_list.php",{},function (data){
    meta_data=data.meta_data;
    $('input.autocomplete1').autocomplete({
        data: data.data,
        onAutocomplete:select,
      });

})

function select(select){
    search_data= _.where(meta_data, {name_deisgnation:select});
    location.href="update_user.php#"+search_data[0].employee_id;
}

function getResult(keyToFilter, valueStartsWith){
    search_data =  _.filter(results, function(d){ return d[keyToFilter].startsWith(valueStartsWith); })
}