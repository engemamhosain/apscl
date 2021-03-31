
 

//  get("new_chat_group.php",{  "group_name": "Simple Test Group",
//  "group_detail": "Test 1 Group",
//  "group_level": 1,},function (result){
  
// })

 get("plants.php",{},function (result){
    try {
       var data = result.data
       
       data.forEach(element => {
        $(".list").append(`
      
          <li class="collection-item avatar" onclick="goSearch('${element.id}')">
          <i class="material-icons circle green">list</i>

          <p>${element.name}</p>
          <br>
          <a href="#!" class="secondary-content"><i class="material-icons">chevron_right</i></a>
        </li>
      `);
           
       });
    } catch (error) {}
    
})

function goSearch(link){
  location.href="search_manual.html#"+link
}

    $(document).ready(function(){
      $('select').formSelect();
       $('input#input_text, textarea#textarea2').characterCounter();
       $('.dropdown-trigger').dropdown();
    });



    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".list .card").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

