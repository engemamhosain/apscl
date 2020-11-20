function athenticate(name,password){
    


    get("login.php",{name:name,password:password},function (result){
        try {

            if(typeof JSON.parse(result).user!="undefined"){
                    var data=JSON.parse(result);
                  localStorage.user=data.user;
                  localStorage.department=data.department;
                  localStorage.designation=data.designation;
                  localStorage.employee_id=data.employee_id;
    

                    localStorage.email=data.email;
                    localStorage.name=data.name;
                    localStorage.group=data.group;  
                    localStorage.api_key=data.api_key;
                    setTimeout(() => {
                     location.href="mobile_dashboard.html"
                    }, 1000);
            
            }else{
            }
            
        } catch (error) {
            alert("Please enter correct informa tion")
        }
        
    })
}   