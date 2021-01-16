<div id="dropdown1" class="dropdown-content notifications" style="height: 500px;">
  <div class="notifications-title">Messages</div>

  <div id ="notification_message" style="font-size: 12px;"> 

      
  </div>

</div>

<style>

  .GNVPVGB{

    padding: 5px;
    margin: auto;
    width: 80%;
    border-radius: 2px;
    box-shadow: 0 3px 1px -2px 
    rgba(0,0,0,.14),0 2px 2px 0 rgba(0,0,0,.098),0 1px 5px 0
    rgba(0,0,0,.084);
  }
</style>
  <script type="text/template" id="tmp_tr_notification_list">
       <div class="card blue-grey darken-1" style="color: white">            
          <table class="striped" onclick="location.reload('tr_status.php#<%= message_id %>')">
            <thead>
              <tr>
                  <th width="50%"><%= title %></th>
                  <th style="text-align:right"><%= new Date(_created).toLocaleDateString()+""+
                   new Date(_created).toLocaleTimeString() %></th>            
              </tr>
            </thead>

            <tbody>
              <tr>
                <td><%= message %></td>
                <td></td>       
              </tr>         
            </tbody>
          </table>             
       </div>
</script>
