
var env="production"
if(env=="production"){
    var base_url="https://softlh.com/k20-apscl/k20-backend/api/mobile/"
    var user_url="https://softlh.com/k20-apscl/k20-backend/api/desktop/all_user_list.php"

    var search_base_url="https://softlh.com/k20-apscl/k20-backend/api/pdf-upload/search_in_pdf.php"
    var manual_pdf="https://softlh.com/k20-apscl/k20-backend/upload/pdf/"
    var image_url="https://softlh.com/k20-apscl/k20-backend/api/file/"

    var image_show_url="http://localhost/apscl-fahad/uploads/media/"
}else{
    var base_url="https://softlh.com/k20-beta/k20-backend/api/mobile/"
    var user_url="https://softlh.com/k20-beta/k20-backend/api/desktop/all_user_list.php"
    
    var search_base_url="https://softlh.com/k20-beta/k20-backend/api/pdf-upload/search_in_pdf.php"
    var manual_pdf="https://softlh.com/k20-beta/k20-backend/upload/pdf/"
    var image_url="https://softlh.com/k20-beta/k20-backend/api/file/"
    
    var image_show_url="http://localhost/beta-fahad/uploads/media/"
}


function get(url,data,fn){
    data.jwt = localStorage.jwt;
    $.ajax({
        type: "POST",
        url: base_url+url,
        data: data,
        success: fn,
        error: function (error) {
            localStorage.clear();
            location.href="../../";
        }
    });

    return fn;
}



function get_user(fn){
//data.jwt = localStorage.jwt;
    $.ajax({
        type: "POST",
        url: user_url,
        data: {jwt: localStorage.jwt},
        success: fn
    });

    return fn;
}


function search(data,fn){
data.jwt = localStorage.jwt;
    $.ajax({
        type: "POST",
        url: search_base_url,
        data: data,
        success: fn
    });

    return fn;
}


function image_post(url,data,fn){
// data.jwt = localStorage.jwt;
    $.ajax({
        url: image_url+url,
        type: 'POST',
        data: data,
        contentType: false,
        processData: false,
        success: fn
    });

    return fn;
}

function get_one(data,id){
   
    if(typeof data== "undefined" || data==null){
        return [];
    }
  

   return $.grep( data, function( obj, i ) {
     
        return obj.id==id;
    })
}



function getNotificationCount(url,data,fn){
data.jwt = localStorage.jwt;
    $.ajax({
        type: "POST",
        url: base_url+url,
        data: data,
        success: fn
    });

    return fn;
}


getNotificationCount("go_notification_count.php",{},function(data){
$(".notif-num").html(data.count)
})

