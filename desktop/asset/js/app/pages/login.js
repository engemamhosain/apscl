



function login(){
  get('login.php',{email:$(".email").val(),password:$(".pass").val()},function(data){
    if(data.empty){
      alert(data.error)
    }

  
        localStorage.id = data.user_data.id;
        localStorage.jwt = data.user_data.jwt;
        localStorage.name = data.user_data.name;
        localStorage.role = data.user_data.role;
  
        // localStorage.department = get_user.department;	
        // localStorage.designation = get_user.designation;	
        // localStorage.email = get_user.email;	
        localStorage.isLogin = "true"
         location.replace("../dashboard/dashboard.php");
    
  
  });
}


