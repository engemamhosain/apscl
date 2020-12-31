
//var base_url="http://localhost/apscl-fahad/curl_api/"
var base_url="https://softlh.com/k20-apscl/k20-backend/api/mobile/"

var image_url="http://localhost/apscl-fahad/"
var image_show_url="http://localhost/apscl-fahad/uploads/media/"
//var base_url="https://softlh.com/apscl/apscl-fahad/curl_api/"
function get(url,data,fn){

    $.ajax({
        type: "POST",
        url: base_url+url,
        data: data,
        success: fn
    });

    return fn;
}


function image_post(url,data,fn){

    $.ajax({
        url: image_url+url,
        type: 'post',
        data: data,
        contentType: false,
        processData: false,
        success: fn
    });

    return fn;
}

