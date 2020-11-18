<?php 
session_start();

if(strcmp($_SESSION ["role"], "admin") != 0){
//	header('Location: dashboard.php');
}

?>
<?php //include 'curl_api/api.php';?>
<?php include 'includes/header-new.php';?>
<?php
 // $api = new Api();
 // $deparment=$api->get_user_list();

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

        <form action="upload.php" method="post" enctype="multipart/form-data">
        Upload Deviece manual pdf file:<input type="file" name="fileToUpload" id="fileToUpload" required>

          <br><br>  
          <label for="volumn_no">Volumn No:</label>
          <input type="text" id="name" name="volumn_no"  required>
          
          <label for="document_number">Document Number:</label>
          <input type="text" id="mail" name="document_number" class="user" required>
          
          <label for="equipment_name">Equipment Name:</label>
          <input type="text" id="password" name="equipment_name" class="user" required>

           <label for="plant_name">Plant Name:</label>
          <input type="text" id="employee_id" name="plant_name" class="user" required>
          
        <label for="title_of_document">Title of the documents:</label>
        <input name="title_of_document" id="add_user_push" class="user" required></input><br>
          <button class="userBtn" type="submit">Add Manual</button>

        </form>
                                         
	<?php include 'includes/footer-new.php';?>
	<?php include 'includes/include_js.php';?>
	 
	 <script src="asset/js/app/pages/add_user.js"></script>
	 <script type="text/javascript">

	 </script>
		

	
