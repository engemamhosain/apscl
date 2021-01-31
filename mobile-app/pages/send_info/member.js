get("chat_groups_members.php",{group_id:location.hash.split("/")[1]},function (result){
    try {
       var data = result.data
       data.forEach(element => {
        $(".list").append(`
      
          <li class="collection-item avatar">
          <i class="material-icons circle purple">people</i>
          <span class="title">${element.user_name}</span><br><br>
         <div></div>
       </li>
      `);
           
       });
       $(".progress").hide();
    } catch (error) {}
    
})
