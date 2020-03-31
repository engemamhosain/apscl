<?php include 'mobile-header-secondary.php';?>

<div class="container"> 
  <div class="row">

   <h4>Send Info</h4>
   <form>
   	<div class="input-field">
            <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
            <label for="textarea2">Descrive Trouble:</label>
    </div>

    <div class="file-field input-field">
      <div class="btn">
        <span>Add Video/Image</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>


    <div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Select Plant</label>
  </div>



   </form>


  </div>
</div>

<?php include 'mobile-footer.php';?>