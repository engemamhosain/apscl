<?php
session_start();

if (strcmp($_SESSION["role"], "admin") != 0) {

}

include '../includes/header-new.php';
include '../includes/pdf_uploader/pdf_upload_all.php';
init_pdfProcess();


?>

<style type="text/css">
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}


input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
 {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}
select {
    -webkit-appearance: none;
    -moz-appearance: none;
    text-indent: 1px;
    text-overflow: '';
}
.select-wrapper input.select-dropdown{
	display: none;
}
select{
  display: inline;
}

select1 {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #4bc970;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}

.add-user-form-card {
  margin: 20px auto;
  width: 50%;

  -webkit-border-radius: 8px/7px;
  -moz-border-radius: 8px/7px;
  border-radius: 8px/7px;
  background-color: #ebebeb;
  -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31);
  -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31);
  box-shadow: 1px 2px 5px rgba(0,0,0,.31);
  border: solid 1px #cbc9c9;
}


</style>



        <h1>Device Manual</h1>



        <form id="form_add_manual" method="post" >
          Upload Deviece manual pdf file:
        <input type="file" id="file-x" />
        <input type="hidden" name="file_url" id="file_url" class="go" required />

          <br><br>
          <label for="volumn_no">Volumn No:</label>
          <input type="text" id="volumn_no" name="volumn_no" class="user go" required />

          <label for="document_number">Document Number:</label>
          <input type="text" id="document_number" name="document_number" class="user go" required />

          <label for="equipment_name">Equipment Name:</label>
          <input  type="text" id="equipment_name" name="equipment_name" class="user go" required>

           <label for="plant_name">Plant Name:</label>
          <input  type="text" id="plant_name" name="plant_name" class="user go" required>

        <label for="title_of_document">Title of the documents:</label>
        <input  name="title_of_document" id="title_of_document" class="user go" required></input><br>
          <button class="userBtn" type="submit">Add Manual</button>

        </form>

        <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
	<?php include '../includes/footer-new.php';?>
	<?php include '../includes/include_js.php';?>

	 <script src="asset/js/app/pages/add_user.js"></script>
	 <script type="text/javascript">

	 </script>



