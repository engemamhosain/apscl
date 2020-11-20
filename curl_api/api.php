  <?php 


class Api {
  // Properties
  // public $name;
  // public $color;
  
  const BASE_Post_URL = "https://softlh.com/apscl/cockpit-master/api/collections/save/";
  const BASE_get_URL = "https://softlh.com/apscl/cockpit-master/api/collections/get/";

 

  const BASE_URL = "https://softlh.com/apscl/cockpit/api/cockpit/";
  const TOKEN = "?token=bac038febd5cd9e663f2f731834db8";

//  https://softlh.com/apscl/cockpit-master/api/collections/save/manual?token=bac038febd5cd9e663f2f731834db8

  // // Methods
  // function set_name($name) {
  //   $this->name = $name;https://softlh.com/apscl
  // }

  public function get_user($user,$password) {
  	
		$postRequest = array(
		    'user' => $user,
		    'password' => $password
		);

		$cURLConnection = curl_init(self::BASE_URL."authUser".self::TOKEN);
		curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
		curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

		$apiResponse = curl_exec($cURLConnection);
		curl_close($cURLConnection);
		$jsonArrayUser = json_decode($apiResponse);
		
        return $jsonArrayUser;
  }

  public function get_user_list() {

    $cURLConnection = curl_init(self::BASE_URL."listUsers".self::TOKEN);

    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    $jsonArrayUser = json_decode($apiResponse);
    
        return $jsonArrayUser;
  }



    public function post_device_manual($post,$ducument_name) {

  
      $data = array(
        'Volumn_No' => $post['volumn_no'],
        'Document_Number' => $post['document_number'],
        'Equipment_Name' => $post['equipment_name'],
        'Plant_Name' => $post['plant_name'],
        'Title_Of_Document' => $post['title_of_document'],
        'Ducument_Name' => $ducument_name,
    );

    $payload = json_encode( array( "data"=> $data ) );

    $cURLConnection = curl_init(self::BASE_Post_URL."manual".self::TOKEN);
    curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $payload);
    curl_setopt( $cURLConnection, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

    $apiResponse = curl_exec($cURLConnection);
    curl_close($cURLConnection);
    
    }


    public function get_manual() {

      $cURLConnection = curl_init(self::BASE_get_URL."manual".self::TOKEN);
      curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
  
      $apiResponse = curl_exec($cURLConnection);
      curl_close($cURLConnection);
      $jsonArrayUser = json_decode($apiResponse);
      
          return $jsonArrayUser;
    }
  
    public function get_tr() {

      $cURLConnection = curl_init(self::BASE_get_URL."TR".self::TOKEN);
      curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
  
      $apiResponse = curl_exec($cURLConnection);
      curl_close($cURLConnection);
      $jsonArrayUser = json_decode($apiResponse);
      
          return $jsonArrayUser;
    }
  
    public function message_post($post) {
      try {
        $data = array(
          'message_poster_id' => $post['employee_id'],
          'message' => $post['message'],
          'name' => $post['name'],
          'tr_no' => $post['tr_no'],
          'media_url' => $post['media_url'],
      
      );
  
      $payload = json_encode( array( "data"=> $data ) );
  
      $cURLConnection = curl_init(self::BASE_Post_URL."chat".self::TOKEN);
      curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $payload);
      curl_setopt( $cURLConnection, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
      curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
  
      $apiResponse = curl_exec($cURLConnection);
     
      curl_close($cURLConnection);
         $jsonArrayUser = json_decode($apiResponse);
      
          return $jsonArrayUser;
      } catch (Throwable $th) {
        throw $th;
      }

     
    }


    public function message_get($post) {
      try {

        $data = array(
            'tr_no' => $post['tr_no'],
            '_created' => array('$gt'=>$post['_created']),
      );
      $sort= array('_created'=>1);
      
  
      $payload = json_encode( array( "filter"=> $data ,"sort"=>$sort) );
  
      $cURLConnection = curl_init(self::BASE_get_URL."chat".self::TOKEN);
      curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $payload);
      curl_setopt( $cURLConnection, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
      curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
  
      $apiResponse = curl_exec($cURLConnection);
     
      curl_close($cURLConnection);
      $jsonArrayUser = json_decode($apiResponse);
      
      return $jsonArrayUser;
      } catch (Throwable $th) {
        throw $th;
      }

     
    }
  

 
}






