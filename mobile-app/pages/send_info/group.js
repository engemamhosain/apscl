get("chat_group.php",{},function (result){
    try {
       var data = result.data
       data.forEach(element => {
        $(".list").append(`
          <li class="collection-item avatar" onclick="goDetail('${element.id}--${element.group_name}--${element.group_detail}')">
          <i class="material-icons circle purple">people</i>
          <span class="title">${element.group_name}</span><br><br>
          <a href="#!" class="secondary-content"><i class="material-icons" style="color:purple">chevron_right</i></a>
        </li>
      `);
           
       });
       $(".progress").hide();
    } catch (error) {}
    
})


function goDetail(url){
    location.href="group_chat.html#url--"+url;
}

function add(){
    location.href="add_group.html";
}