function athenticate(email,password){
    


    get("login.php",{email:email,password:password},function (result){
        try {


            if(result.empty){
                alert(result.error)
                return
            }
       
                    var data = result.user_data;
                  localStorage.user=data.user;
                  localStorage.department=data.department;
                  localStorage.designation=data.designation;
                  localStorage.employee_id=data.employee_id;
    

                    localStorage.uuid=data.uuid;
                    localStorage.jwt=data.jwt;
                    localStorage.id=data.id;
                    localStorage.name=data.name;
                    localStorage.role=data.role;  
                    localStorage.api_key=data.api_key;
                    localStorage.profile_picture=data.profile_picture;
                    localStorage.isLogin="true"
                    setTimeout(() => {
                     location.href="../dashboard/mobile_dashboard.html"
                    }, 1000);
            
         
            
        } catch (error) {
            alert("Please check your internet")
        }
        
    })
}   