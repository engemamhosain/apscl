<?php 

include 'curl_api/api.php' ;
$manual=new Api();
$result=$manual->get_manual();
?>


    <form class="search-manual">
      <div class="row">
        <div class="input-field col12">
          <i class="material-icons prefix">search</i>
           <input type="text" id="search" value="">
          <label for="search">Search All Manuals</label>
        </div>
      </div>
    </form>




               
 
       

    <div class="table-responsive">
        
            <table class="striped" id="table">
                <thead style="background-color:rgb(68, 169, 255);color: white">
                    <tr>
                        <th width="110">Volumn No</th>
                        <th width="160">Document Number</th>
                        <th>Equipment Name</th>
                        <th>Plant Name</th>
                        <th>Title of the documents</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php 
                    
                    foreach ($result->entries as $rows) :?>
                    <tr>
                    <td><a href="uploads/<?php echo $rows->Ducument_Name; ?>"><?php echo $rows->Volumn_No; ?></a></td> 
                    <td><a href="uploads/<?php echo $rows->Ducument_Name; ?>"><?php echo $rows->Document_Number; ?></a></td> 
                    <td><?php echo $rows->Equipment_Name; ?></td> 
                    <td><?php echo $rows->Plant_Name; ?></td> 
                    <td><?php echo $rows->Title_Of_Document; ?></td> 
                
                 
                    </tr>
                    
                    <?php endforeach;?>
                   
  
                </tbody>
            </table>
          
    </div>

<style>
    .search-manual{ padding: 10px 0 0 10px }
    .table-responsive{ overflow-x: auto; }
</style>