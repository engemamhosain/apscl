
var base_url="http://localhost/apscl-fahad/curl_api/"
//var base_url="https://softlh.com/apscl/apscl-fahad/curl_api/"
function get(url,data,fn){

    $.ajax({
        type: "GET",
        url: base_url+url,
        data: data,
        success: fn
    });

    return fn;
}
