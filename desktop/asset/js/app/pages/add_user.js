



 var department = ["Mechanical Maintenance", "Electrical Maintenance", "Instrument and Control", "Operation (Shift)","Operation (General)"];
 var designation = ["Assistant Engineer","Sub-Assistant Engineer", "Exicutive Engineer"];
 var role = ['USER_READ', 'USER_WRITE', 'GROUP', 'ADMIN'];  
 
        load(role,"#Role")
        load(designation,"#designation")
        load(department,"#division")

function  load(data,id){
    for (var i = 0; i < data.length; i++)
		{ 
		     $(id).append($('<option>',
		     {
		        value: data[i],
		        text : data[i]
		    }));
        }
        
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

     
  


function postUser(){		
			var obj = {};
			$('.user').each(function(i, v){
				
			obj[v.name] =v.value;            
			});
            
            get('i_users.php',obj, function(data){
              //  location.replace("user_list.php")
            })
		
}