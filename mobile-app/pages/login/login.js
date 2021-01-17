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
    

                    localStorage.email=data.email;
                    localStorage.name=data.name;
                    localStorage.group=data.group;  
                    localStorage.api_key=data.api_key;
                    setTimeout(() => {
                     location.href="../dashboard/mobile_dashboard.html"
                    }, 1000);
            
         
            
        } catch (error) {
            alert("Please check your internet")
        }
        
    })
}   