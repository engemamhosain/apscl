


    //   {
    //     "notification_message": "test notification 111",
    //     "action_url": null,
    //     "seen": 0,
    //     "user_id": 9995,
    //     "id": 1,
    //     "created_on": "2021-01-05 15:22:17",
    //     "created_by_uid": null,
    //     "created_by_name": null,
    //     "updated_on": "2021-01-05 15:25:57",
    //     "updated_by_uid": null
    // },

 get("gm_notification.php",{},function (result){
    try {
       var data = result.data
       data.forEach(element => {
        $(".list").append(`
      
          <li class="collection-item avatar" onclick="goDetails('${element.action_url}')">
          <i class="material-icons circle green">notifications_active</i>
          <span class="title">${element.notification_message}</span>
          <p>${element.created_on}</p>
        </li>
      `);
           
       });

       $(".progress").hide();
    } catch (error) {}
    
})

function goDetails(link){
  if(action_url!=null){
    location.href=link
  }
 
}

