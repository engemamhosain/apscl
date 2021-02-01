



function login(){
  get('login.php',{email:$(".email").val(),password:$(".pass").val()},function(data){
    if(data.empty){
      alert(data.error)
    }
  
        localStorage.id = data.user_data.id;
        localStorage.jwt = data.user_data.jwt;
        localStorage.name = data.user_data.name;
        localStorage.role = data.user_data.role;

        localStorage.DIVISION = data.user_data.DIVISION;
        localStorage.designation = data.user_data.designation;
        localStorage.employee_id = data.user_data.employee_id;
        localStorage.profile_picture = data.user_data.profile_picture;
        localStorage.uuid = data.user_data.uuid;
  
        localStorage.isLogin = "true"
         location.replace("../dashboard/dashboard.php");
    
  
  });
}


