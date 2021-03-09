

 
//   {
//     "group_name": "Simple Test Group",
//     "group_detail": "Test 1 Group",
//     "group_level": "0",
//     "active": 0,
//     "id": 1,
//     "created_on": "2021-01-02 09:13:25",
//     "created_by_uid": null,
//     "created_by_name": null,
//     "updated_on": "0000-00-00 00:00:00",
//     "updated_by_uid": null
// },

function create_group(){
  get("new_chat_group.php",{"group_name": $("#name").val(),"group_detail":$("#desc").val(), "group_level": "1"},function (result){
    window.history.back();
  })


  
}