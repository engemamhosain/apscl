
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
                                                                                              
                    </tr>
 
                </script>
        <div class="table-responsive">             
            <table class="striped" id="table">
                <thead style="background-color:rgb(68, 169, 255);color: white">
                    <tr class="header"> 
                        <th >TR No & Date</th>
                        <th >Equipment & Locaion</th>
                        <th>Assign to</th>                        
                        
                    </tr>
                </thead>
                <tbody id="list_push">
                   
                </tbody>
            </table>
         </div>   
<br>

<script>
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
</script>
