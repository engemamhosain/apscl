  <?php 
   include 'api.php';
 $manual=new Api();
 $result=$manual->get_manual();
 echo json_encode($result);

?>  

