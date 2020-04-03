<?php include 'mobile-header.php';?>

  <header>
   
    <ul id="sidenav-left" class="sidenav sidenav-fixed">
      <?php include 'includes/side-nav.php';?>
    </ul>
    <?php //include 'includes/top-dropdown.php';?>
  </header>

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
        <a href="mobile-send-info.php">
          <div class="button card bg-color ds-card">          
            <br><i  style="" class="material-icons white-text center">info</i><br>
            <div>Send info</div>   
          </div>
        </a>
      </div>

      <div class="col s6">
        <a href="mobile-create-tr.php">
          <div class=" button card bg-color ds-card" style="text-align: center;">          
            <br><i  style="" class="material-icons white-text center">create</i><br>
            <div>Create TR</div>   
          </div>
        </a>
      </div>

      <div class="col s6">
        <a href="mobile-add-report.php">
          <div class=" button card bg-color ds-card" style="text-align: center;">          
            <br><i  style="" class="material-icons white-text center">add_circle</i><br>
            <div>Add Report</div>   
          </div>
        </a>
      </div>

      <div class="col s6">
        <a href="mobile-all-manual.php">
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
<?php include 'includes/include_js.php';?>
<script type="text/javascript">
  if(window.app){
    api_push_remove("PushNotificaion",localStorage.id)
    app.fcm(localStorage.id,localStorage.department)    
  }
</script>