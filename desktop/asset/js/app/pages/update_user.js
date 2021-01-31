

// email	
// phone	
// account_active yes / no  
// Role ('USER_READ', 'USER_WRITE', 'GROUP', 'ADMIN')

var user;
    get('go_users.php',{employee_id:location.hash.substr(1,location.hash.length)}, function(data){

    
        try {
            user = data.data[0]
            data.data.forEach(element => {
              
             $(".list").html(`  
    
    
             <h1>Update user</h1>
        
             <fieldset>
               <legend><span class="number">1</span>Your basic info</legend>
              
               
               <label for="mail">Email:</label>
               <input type="email" id="mail" name="email" class="user">

               <label for="phone">Phone:</label>
               <input type="number" id="phone" name="user" class="user">

               <label for="status">Account Status:</label>
               <select name="account_active" id="status" class="user"></select>
               </fieldset>
               
     
             <label for="Role">Role:</label>
             <select name="role" id="Role" class="user"></select>
             </fieldset>
                                              
             <button class="userBtn" type="submit" onclick="postUser()">Update</button>
           `);
                
            });






// var department = ["Mechanical Maintenance", "Electrical Maintenance", "Instrument and Control", "Operation (Shift)","Operation (General)"];
// var designation = ["Assistant Engineer","Sub-Assistant Engineer", "Exicutive Engineer"];
         var status = ["yes","no"];
         var status_val = ["Active","Not Active"];
		 var role = ['USER_READ', 'USER_WRITE', 'GROUP', 'ADMIN'];  
	 	 
  		// for (var i = 0; i < designation.length; i++)
		// { 
		//      $('#designation').append($('<option>',
		//      {
		//         value: designation[i],
		//         text : designation[i]
		//     }));
		// }


		for (var i = 0; i < status.length; i++)
		{ 
		     $('#status').append($('<option>',
		     {
		        value: status[i],
		        text : status_val[i]
		    }));
		}


  		for (var i = 0; i < role.length; i++)
		{ 
		     $('#Role').append($('<option>',
		     {
		        value: role[i],
		        text : role[i]
		    }));
		}


		

		// if(location.hash != ""){
		// 	$(".userBtn").html("Update user")
				
		// 	api_get_user({_id:location.hash.substring(1)},function(data){			
		// 	var data=data[0]
		// 	$("#name").val(data.user)		
		// 	$("#mail").val(data.email)		
		// 	$("#employee_id").val(data.employee_id)		
		// 	$("#designation").val(data.designation)		
		// 	$("#add_user_push").val(data.department)		
		// 	$("#Role").val(data.group)		
		// 	})

		// }

         } catch (error) {
             console.log(error)
         }
    
    });



function postUser(){		
			var obj = {};
			$('.user').each(function(i, v){
				
			obj[v.name] =v.value;            
			});
			obj.active ="active";
			obj.id =user.id;
            
            get('u_users.php',obj, function(data){
              //  location.replace("user_list.php")
            })
		
}