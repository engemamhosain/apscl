  <?php 
   include 'api.php';
 $message=new Api();
 $result=$message->message_get($_GET);

 echo json_encode($result);

?>  

