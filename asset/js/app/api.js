$d.ready(function(){
    'use Static';
    var api = {};


    api.login= function(user, password){
        var url = tg.config.apiurl + 'cockpit/authUser?token=0f6da260fda8c87be078a646e5cc9b'; //+tg.config.token;
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
        console.log('aapi get:  ', collection_name);
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
    api.login('fahad', 'fahad');
});