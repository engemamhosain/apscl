$d.ready(function(){
    'use Static';
    var api = {};


    api.login= function(user, password){
       	// /api/collections/get/report?
   //    	var url = tg.config.apiurl + 'cockpit/listUsers?token=account-9c2b0d38d22d4e138e1d365a030ded'; //0f6da260fda8c87be078a646e5cc9b'; //+tg.config.token;
         var url = tg.config.apiurl + 'collections/get/report?token=bac038febd5cd9e663f2f731834db8'; //0f6da260fda8c87be078a646e5cc9b'; //+tg.config.token;
        $.post(url, {
            user: user,
            password: password
        }, function(data){
            console.log(data);
        });
        console.log(user, password);
    };

    api.check_login = function(){
       if (tg.config.logged_in){
           return true;
       };
       console.log('not logged in');
       return false;
    };

    api.get = function(collection_name, callback){
        api.check_login();
        console.log('api get:  ', collection_name);
        // return 'boom';

    };
    
    api.post = function(){

    };

    api.delete = function(){

    };


    window.api = api;
});



$d.ready(function(){

    // api.get('report', function(data){
    //     console.log(data);
    // });
   // api.login('fahad', 'fahad');
});


function image_post(url,data,fn){
    // data.jwt = localStorage.jwt;
        $.ajax({
            url: tg.config.k20api+"/file/"+url,
            type: 'POST',
            data: data,
            contentType: false,
            processData: false,
            success: fn,
            
        });
    
        return fn;
    }

function get(url,data,fn){
    data.jwt=localStorage.jwt;
    $.ajax({
        type: "POST",
        url: tg.config.k20api+"/desktop/"+url,
        data: data,
        success: fn,
        error: function (error) {
          reLogin();
         
        }
    });

    return fn;
}


function reLogin(){

        $.ajax({
            type: "POST",
            url: tg.config.k20api+"/desktop/"+"login_with_jwt.php",
            data: {jwt: localStorage.jwt},
            success: function(data){
                localStorage.jwt = data.user_data.jwt
               // location.reload();
            },
            error: function (error) {

               // localStorage.clear();
              //  location.href="../../";

            }
        });
    
     
}
    
if( localStorage.isLogin == "true"){
    get("go_notification_count.php",{},function(data){
        $(".new-badge").html(data.count)
    })
}
