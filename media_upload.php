<?php
/* Getting file name */
include 'curl_api/api.php';

var_dump($_POST);
$filename = $_FILES['file']['name'];
/* Location */
$location = "uploads/media/".$filename;
$uploadOk = 1;
$imageFileType = pathinfo($location,PATHINFO_EXTENSION);
/* Valid Extensions */
$valid_extensions = array("jpg","jpeg","png");
/* Check file extension */
if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
   $uploadOk = 0;
}
if($uploadOk == 0){
   echo 0;
}else{
   /* Upload file */
   if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
      echo $location;
      $message=new Api();
      $message->message_post($_POST);

   }else{
      echo 0;
   }
}