
  
function init_production_config() {
	tg.config = {
    	    
	    logged_in: false,
	    user_token: false,  
        k20api: 'https://softlh.com/k20-apscl/k20-backend/api'
	};

}

function init_local_config() {
	tg.config = {	    
		
		get_user_url: 'https://softlh.com/apscl/cockpit/api/cockpit/listUsers/?token=bac038febd5cd9e663f2f731834db8',    
		user_url: 'https://softlh.com/apscl/cockpit/api/cockpit/saveUser/?token=bac038febd5cd9e663f2f731834db8',    
	    logged_in: false,
	    user_token: false,
	    cockpit_add_asset_url: 'http://localhost/cockpit/api/cockpit/addAssets?token=6faf5df9bad9ba9c64aecb14d3fcf1', 
	    cockpit_image_url: 'http://localhost/cockpit/storage/uploads',    
	    apiurl: 'https://softlh.com/apscl/cockpit-master/api/',    
	    token: '?token=account-9214b485376d6e2643747f5342301c',
        k20api: '/k20/api'      
	};

}	

if(location.host === "softlh.com"){
	init_production_config();
}else{
	// init_production_config();
	init_local_config();
}


