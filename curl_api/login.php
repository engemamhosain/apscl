  <?php 
   include 'api.php';
 $login=new Api();

 $result=$login->get_user($_GET["name"],$_GET["password"]);
if(isset($result->name)){
  echo json_encode($result);
}else{
echo "login fail";
} 

?>  

