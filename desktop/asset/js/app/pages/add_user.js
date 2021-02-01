
 var department = ["Mechanical Maintenance", "Electrical Maintenance", "Instrument and Control", "Operation (Shift)","Operation (General)"];
 var designation = ["Assistant Engineer","Sub-Assistant Engineer", "Exicutive Engineer"];
 var role = ['USER_READ', 'USER_WRITE', 'GROUP', 'ADMIN']; 

 get('gm_division.php',{}, function(data){
	department=data.data;
	load(department,"#DIVISION")
  })
 get('gm_designation.php',{}, function(data){
	designation=data.data 
	load(designation,"#designation")
  })


 
 
        load(role,"#Role")
      


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

     
		// name: 11
		// email: 11
		// user: 11
		// password: 11
		// designation: ASSISTANT ENGINEER
		// DIVISION: Software Testing Team
		// role: USER_READ
		// employee_id: 01750841137
		// jwt:

		// (name, email, phone, employee_id, designation, DIVISION


function postUser(){		
			var obj = {};
			$('.user').each(function(i, v){
				
			obj[v.name] =v.value;            
			});
      
            get('i_users.php',obj, function(data){
                location.replace("user_list.php")
            })
		
}