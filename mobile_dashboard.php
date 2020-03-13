<?php include 'mobile-header.php';?>

<div class="container"> 
  <div class="row">

    <div class="col s10 offset-s1">
      <input type="text" name="" class="searchbykeyword" value="search by keywords" onclick="value=''">      
    </div>
    <div class="col s10 offset-s1">
      <div class="col s9">
        <select>
          <option value="" disabled selected>TR/Report(s)</option>
          <option value="1">Report 1</option>
          <option value="2">Report 2</option>
          <option value="3">Report 3</option>
        </select>

      </div>
      <button class="btn waves-effect waves-light col s3">Search</button>      
    </div>
    <section id="round-links">
      <div class="col s6">
        <a href="">
          <div class="button card bg-color ds-card">          
            <br><i  style="" class="material-icons white-text center">info</i><br>
            <div>Send info</div>   
          </div>
        </a>
      </div>

      <div class="col s6">
        <a href="">
          <div class=" button card bg-color ds-card" style="text-align: center;">          
            <br><i  style="" class="material-icons white-text center">create</i><br>
            <div>Create TR</div>   
          </div>
        </a>
      </div>

      <div class="col s6">
        <a href="">
          <div class=" button card bg-color ds-card" style="text-align: center;">          
            <br><i  style="" class="material-icons white-text center">add_circle</i><br>
            <div>Add Report</div>   
          </div>
        </a>
      </div>

      <div class="col s6">
        <a href="">
          <div class=" button card bg-color ds-card" style="text-align: center;">          
            <br><i  style="" class="material-icons white-text center">assignment</i><br>
            <div>All Manual</div>   
          </div>
        </a>
      </div>
    </section>


  </div>
</div>

<?php include 'mobile-footer.php';?>
