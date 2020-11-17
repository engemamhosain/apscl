function athenticate(name,password){
    get("login.php",{name:name,password:password},function (data){
        if(typeof JSON.parse(data).user!="undefined"){
            console.log(data.user);
            localStorage.isLogin="true";
            location.href="mobile_dashboard.html"
        }else{
        }
    })
}   