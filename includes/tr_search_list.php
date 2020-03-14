
    <br>
      <div class="container">
        <!-- Page Content goes here -->
            <div class="row">
                <div class="col s12">
                    <input type="search" id="search" value="" class="form-control" placeholder="Search Trouble">
                </div>
            </div>
      </div>
                <script type="text/template" id="tmp_tr_list">
                    <tr>
                        <td><%= Tr_No %></td>
                        <td><%= Equipment %></td>
                        <td><%= Referred_to %></td>
                        <td><%= Location %></td>
                        <td><%= Date %></td>
                                                
                    </tr>
 
                </script>
                    
            <table class="striped" id="table">
                <thead style="background-color: #6c7ae0;">
                    <tr>
                        <th width="100px">TR No</th>
                        <th>Equipment</th>
                        <th>Reffer to</th>
                        <th>Locaion</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody id="list_push">
                    
                </tbody>
            </table>
<br>
