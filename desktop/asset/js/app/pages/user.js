
get('gm_users.php',{}, function(data){

    try {

        data.data.forEach(element => {
          
         $(".list").append(`  


         <tr class="childSelector">
         <td> 
             <img src="https://bootdey.com/img/Content/avatar/avatar1.png"  alt="">
             <a href="#" class="user-link">${element.name}</a>
             <span class="user-subhead">${element.DIVISION}</span>
         </td>
         <td class="text-center">
             <span class="label label-default">${element.employee_id}</span>
         </td>
     
         <td class="text-center">
             <span class="label label-default">${element.account_active}</span>
         </td>
         <td>
             <a href="#">${element.email}</a>
         </td>
         <td>
         ${element.created_on}
             
         </td>	
         <td>
                 
             <a href="update_user.php#${element.employee_id}" > <i class="material-icons green-text">create</i></a>
         </td>							
     </tr>
       `);
            
        });
     } catch (error) {
         console.log(error)
     }

});
