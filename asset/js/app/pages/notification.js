	
// var id_list={};
// 		id_list[localStorage.id]=localStorage.id;
// 		var obj={
// 			title:"title",
// 			message:"message",
// 			type:"type",
// 			employee_id:id_list,
// 			message_id:"message_id",
// 			department:"department",
// 			is_read:true,
// 			_id:"5e74898c3734615cbd0003b7"
// 		}

// 		api_post('Notification',obj, function(data){
// 			console.log(data);

// 		}); 
// 	}

init_notification_count_populate = (data) =>{
	var notificaionCount=0;
	for (var i=0;i < data.entries.length; i++) {
		if(typeof(data.entries[i].employee_id[localStorage.id])=="undefined"){

			++notificaionCount;

		}
	
	
	}
	$("a .new-badge").html(notificaionCount);
}
  api_get_notificaion('Notification', init_notification_count_populate);

init_notification_list_populate = (data) =>{


	  var template = $("#tmp_tr_notification_list").html(),
        tx = _.template(template), 
        html_to_push = '';

         _.each(data.entries, function(item, key, arr){    
                html_to_push  += tx(item);              
        });

        $("#notification_message").html(html_to_push);

		for (var i=0;i < data.entries.length; i++) {
		if(typeof(data.entries[i].employee_id[localStorage.id])=="undefined"){

			
			if(data.entries[i].employee_id.length != 0){

				var id_list=data.entries[i].employee_id;
			}else{
				var id_list={}
			}
			id_list[localStorage.id]=localStorage.id;
			var obj={				
				employee_id:id_list,
				_id:data.entries[i]._id
			}
			api_post('Notification',obj, function(data){}); 	

		}		
	}
}

$("#nav-mobile").click(function(){
	api_get_notificaion('Notification', init_notification_list_populate);		
	api_get_notificaion('Notification', init_notification_count_populate);
})
