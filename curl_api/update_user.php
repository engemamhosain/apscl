  <?php 
  include "api.php";

  $api = new Api();

class Api {
  // Properties
  // public $name;
  // public $color;
  
  const BASE_URL = "https://softlh.com/apscl/cockpit/api/cockpit/";
  const TOKEN = "?token=bac038febd5cd9e663f2f731834db8";

  //   const BASE_URL = "http://localhost/cockpit/api/cockpit/";
  // const TOKEN = "?token=6faf5df9bad9ba9c64aecb14d3fcf1";
  

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

}


