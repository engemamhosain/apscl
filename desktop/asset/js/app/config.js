
  
function init_production_config() {
	tg.config = {
    	    
	    logged_in: false,
		user_token: false,  
		
        k20api: 'https://softlh.com/k20-apscl/k20-backend/api'
	};

}

function init_local_config() {
	tg.config = {	    
		
		logged_in: false,
	    user_token: false,

        k20api: '/k20/api'      
	};

}	

if(location.host === "softlh.com"){
	init_production_config();
}else{
	 init_production_config();
//	init_local_config();
}


