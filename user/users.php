<?php 
$user_list='[{"username":"Md. Fahad Hossain","password":"Md. Fahad Hossain","role":"Admin","department":"Electrical","designation":"Executive Engineer","id":"1603060045"},
{"username":"Md. Khairul Bashar","password":"Md. Khairul Bashar","role":"Report Creator","department":"Mechanical","designation":"Sub-Divisional Engineer","id":"1410070103"},
{"username":"admin","password":"admin","role":"Admin","department":"Mechanical","designation":"Sub-Divisional Engineer","id":"1410070103"},
{"username":"Prodip Chandra Saha","password":"Prodip Chandra Saha","role":"Report Creator","department":"Electrical","designation":"Assistant Engineer","id":"1705070147"},
{"username":"Mahmud hasan khan","password":"Mahmud hasan khan","role":"Report Creator","department":"Operation","designation":"Assistant Engineer","id":"1609070124"},
{"username":"Pankaj Kumar Sutradhar","password":"Pankaj Kumar Sutradhar","role":"Report Creator","department":"Mechanical","designation":"Assistant Engineer","id":"1709070149"},
{"username":"Mohammed Akram Hossain","password":"Mohammed Akram Hossain","role":"Report Viewer","department":"Instrumentation & Control (I&C)","designation":"Assistant Engineer","id":"1705070146"},
{"username":"Palash Chandra Das","password":"Palash Chandra Das","role":"Report Viewer","department":"Civil","designation":"Assistant Engineer","id":"1611070132"},
{"username":"Md. Kowser Alam","password":"Md. Kowser Alam","role":"Report Viewer","department":"Operation","designation":"Assistant Engineer","id":"1609070122"},
{"username":"A.H.M. Kamal","password":"A.H.M. Kamal","role":"Report Viewer","department":"Instrumentation & Control (I&C)","designation":"Assistant Engineer","id":"1611070133"}]';

 
$users = json_decode($user_list);


function select_user($username,$password){
	global $users;
	foreach ($users as $key => $value) {
		if (strcmp($username, $value->username) == 0 && strcmp($password, $value->password) == 0) {     		
    	//	var_dump($value);
    		return $value;
		}			
	}
	
	return false;
}



?>