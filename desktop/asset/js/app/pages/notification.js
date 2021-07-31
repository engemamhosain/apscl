    get('gm_notification.php',{}, function(data){
    var html_to_push="";
        try {
        
        _.each(data.data, function(item, key, arr){
            html_to_push+=`<div class="card blue-grey darken-1" style="color: white;width:100%">            
                <table class="striped" onclick="location.reload('tr_status.php#<%= message_id %>')">
                <thead>
                    <tr>
                        <th width="50%">id ${item.id }</th>
                        <th style="text-align:right">${new Date(item.created_on).toLocaleDateString()+""+
                        new Date(item.created_on).toLocaleTimeString() }</th>            
                    </tr>
                </thead>

                <tbody>
                    <tr>
                    <td>${item.message}</td>
                    <td></td>       
                    </tr>         
                </tbody>
                </table>             
            </div>`
            
        });         
    
    
        if(data.data.length==0){
            $("#notification_message").html("<h4>Sorry, No reports has been found in this list.</h4>");
        }else{
            $("#notification_message").html(html_to_push);
        }
    
        
        } catch (error) {
            console.log(error)
        }
    
    });
    
    
    