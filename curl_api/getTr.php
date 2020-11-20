  <?php 
   include 'api.php';
 $tr=new Api();
 $result=$tr->get_tr();
 echo json_encode($result);

?>  

