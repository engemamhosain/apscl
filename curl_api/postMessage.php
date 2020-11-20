  <?php 
   include 'api.php';
 $message=new Api();
 $result=$message->message_post($_GET);

 echo json_encode($result);

?>  

