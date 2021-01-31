


var meta_data,search_data;
  get_user(function (data){
    meta_data=data.meta_data;
    $('input.autocomplete1').autocomplete({
        data: data.data,
        onAutocomplete:select,
      });

  })


  
  function select(select){
    search_data= _.where(meta_data, {name_deisgnation:select});
}

function addMember(){

  try {

    get("i_chat_groups_members.php",{group_id:location.hash.split("/")[1],user_id:search_data[0].id,user_name:search_data[0].name},function (result){ 
      location.reload()
    })
  } catch (error) {}
 
}