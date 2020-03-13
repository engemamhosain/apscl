
function init_production_config() {
	tg.config = {
	    // apiurl: '/cockpit/cockpit-master/api/',    
	    // token: '?token=account-ee50a431e88f46e60b4a0c27e405ad',
	    logged_in: false,
	    user_token: false,
	    cockpit_add_asset_url: 'https://softlh.com/apscl/cockpit/api/cockpit/addAssets?token=bac038febd5cd9e663f2f731834db8',    
	    cockpit_image_url: 'https://softlh.com/apscl/cockpit/storage/uploads',    
	    apiurl: 'https://softlh.com/apscl/cockpit-master/api/',    
	    token: '?token=account-9214b485376d6e2643747f5342301c'
	};

}

function init_local_config() {
	tg.config = {	    
	    logged_in: false,
	    user_token: false,
	    cockpit_add_asset_url: 'http://localhost/cockpit/api/cockpit/addAssets?token=6faf5df9bad9ba9c64aecb14d3fcf1', 
	    cockpit_image_url: 'http://localhost/cockpit/storage/uploads',    
	    // apiurl: 'http://localhost/cockpit/api/',    
	    // token: '?token=5243abfc5f3d22676093877d9fd80f'
	      apiurl: 'https://softlh.com/apscl/cockpit-master/api/',    
	    token: '?token=account-9214b485376d6e2643747f5342301c'
	};

}

if(location.host=="softlh.com"){
	init_production_config();
}else{
//	init_production_config();
	init_local_config();
}

