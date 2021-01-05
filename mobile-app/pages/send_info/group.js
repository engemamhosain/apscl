get("chat_group.php",{},function (result){
    try {
       var data = result.data
       data.forEach(element => {
        $(".list").append(`
      
          <li class="collection-item avatar" onclick="goDetail('${element.id}/${element.group_name}')">
          <i class="material-icons circle purple">people</i>
          <span class="title">Plant Id ${element.group_name}</span>
          <p>${element.group_detail}</p>
          <a href="#!" class="secondary-content"><i class="material-icons" style="color:purple">chevron_right</i></a>
        </li>
      `);
           
       });
       $(".progress").hide();
    } catch (error) {}
    
})


function goDetail(url){
    location.href="group_chat.html#url/"+url;
}

function add(){
    location.href="add_group.html";
}