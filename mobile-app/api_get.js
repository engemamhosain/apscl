
//var base_url="http://localhost/apscl-fahad/curl_api/"
var base_url="https://softlh.com/k20-apscl/k20-backend/api/mobile/"

var search_base_url="https://softlh.com/k20-apscl/k20-backend/api/pdf-upload/search_in_pdf.php"
var manual_pdf="https://softlh.com/k20-apscl/k20-backend/upload/pdf/"
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


function search(data,fn){

    $.ajax({
        type: "POST",
        url: search_base_url,
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

function get_one(data,id){
   
    if(typeof data== "undefined" || data==null){
        return [];
    }
  

   return $.grep( data, function( obj, i ) {
     
        return obj.id==id;
    })
}

