
    <br>
   
   <style>
    .search-manual{ padding: 10px 0 0 10px }
    .table-responsive{ overflow-x: auto; }
</style>

    <form class="search-manual">
    <div class="btn-large waves-effect waves-light green"  onclick="location.replace('tr_form.php')">Add New TR</div>
      <div class="row">
        <div class="input-field col12">
          <i class="material-icons prefix">search</i>
           <input type="text" id="myInput" value="" onkeyup="myFunction()" >
          <label for="myInput">Search Trouble Equipment</label>
        </div>
      </div>
    </form>
  

                <script type="text/template" id="tmp_tr_list">
                    <tr>
                        <td style="font-weight:bold"> <a href="tr_status.php#<%= _id %> "><%= Tr_No %> </a> <br> <span style="color:gray;font-size:12px"> <%= Date %> </span> </td>
                        <td><%= Equipment %> <br> <span style="color:gray;font-size:12px"><%= Location %> </span></td>
                        <td><%= Referred_to %></td>
                        <% if(localStorage.designation == "Exicutive Engineer" && department== localStorage.department) { %>
                        <td><a class="waves-effect waves-light btn" onclick="approve('<%= _id %>')">Approve</a></td>
                         <% } else { %>
                        <td><%= status %></td>
                          <% } %>
                                                                                              
                    </tr>
 
                </script>
        <div class="table-responsive">             
            <table class="striped" id="table">
                <thead style="background-color:rgb(68, 169, 255);color: white">
                    <tr class="header"> 
                        <th >TR No & Date</th>
                        <th >Equipment & Locaion</th>
                        <th>Assign to</th>                        
                        <th>Status</th>                        
                        
                    </tr>
                </thead>
                <tbody id="list_push">
                   
                </tbody>
            </table>
         </div>   
<br>

<script>



   if( location.hostname =="localhost"){
        var url = "http://localhost/apscl/curl_api/push_notification.php"
    }else{
        var url = "https://softlh.com/apscl/app/curl_api/push_notification.php"
    }

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

  function approve(id){
    api_filter_get("TR",{_id:id},function(data){
        api_post('TR', {_id:id,department:data.entries[0].Referred_to}, function(data){
        
           api_filter_get("PushNotificaion",{department:localStorage.department},function(fcm_token){  
                         var array = [];
                          for(token of fcm_token.entries){
                              array.push(token.fcm_token)

                          }

                        $.get(url,{title:"tr",message:"Description_of_Trouble","data[]":token}, function(array  ){         
                              location.reload("tr_list.php")                      
                        });
                   })              
        });   
    })
  }

</script>
