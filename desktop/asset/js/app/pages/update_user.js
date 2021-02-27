

// email	
// phone	
// account_active yes / no  
// Role ('USER_READ', 'USER_WRITE', 'GROUP', 'ADMIN')

function poplate_profile_info(u_data){
    
    $("#e_name").html(u_data.name);
    if(u_data.profile_picture!=null){
      $("#e_photo").attr('src', u_data.profile_picture+"?"+new Date(getTime()));
    }
    $("#e_designation").html('Designation '+u_data.designation);
    if(u_data.email === null){
      u_data.email = '-----';
    }
    if(u_data.phone === null){
      u_data.phone = '-----';
    }
    var bio = 'Role   '+u_data.role +' <br/>';
    bio += 'Division   '+u_data.DIVISION +' <br/>';
    bio += 'Employee id  '+u_data.employee_id +' <br/>';
    bio += 'Email   '+ u_data.email +' <br/>';
    bio += 'Phone   '+ u_data.phone +' <br/>';
    bio += 'Account Active   '+ u_data.account_active +' <br/>';
    $("#e_bio").html(bio);

}

var user;
    get('go_users.php',{employee_id:location.hash.substr(1,location.hash.length)}, function(data){

        poplate_profile_info(data.data[0]);
        try {
            user = data.data[0]
            data.data.forEach(element => {
              
             $(".list").html(`  
    
    
             <h1></h1>
        
             <fieldset>
               <legend><span class="number">1</span>Your basic info</legend>
              
               
               <label for="mail">Email:</label>
               <input type="email" id="mail" name="email" class="user" value="` + user.email +`" />

               <label for="phone">Phone:</label>
               <input type="number" id="phone" name="phone" class="user" value="` + user.phone +`" >

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
         var status_val = ["yes","no"];
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
		    })).val(user.account_active);
		}


  		for (var i = 0; i < role.length; i++)
		{ 
		     $('#Role').append($('<option>',
		     {
		        value: role[i],
		        text : role[i]
		    })).val(user.role);
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

// email, phone, role, account_active, id

function postUser(){		
			var obj = {};
			$('.user').each(function(i, v){
			    obj[v.name] =v.value;            
			});
			// obj.active ="active";
			obj.id =user.id;
            obj.jwt = localStorage.jwt; 
            
            console.log('check before go: ',obj);
            get('u_users.php',obj, function(data){
                location.reload();
            });
		
}