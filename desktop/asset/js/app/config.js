


function init_production_config() {

	tg.config = {
    	    
	    logged_in: false,
		user_token: false, 


		
	//	k20api: 'https://softlh.com/k20-beta/k20-backend/api',

	    k20api: 'https://softlh.com/k20-apscl/k20-backend/api',
        home_url: 'https://softlh.com/k20-apscl/web/',
        logout_url:'https://softlh.com/k20-apscl/web/',
	};

}
// tg.config.home_url

function init_local_config() {
	tg.config = {	    
		
		logged_in: false,
	    user_token: false,

        k20api: '/k20/api',
        home_url: '/apscl-fahad/desktop/',
        logout_url:'/apscl-fahad/desktop/login/login.php',
	};

}	

if(location.host === "softlh.com"){
	init_production_config();
}else{
	 init_production_config();
	// init_local_config();
}


