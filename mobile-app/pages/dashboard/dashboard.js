if(window.app){
  get("u_users_fiebase_token.php",{fire_base_token:app.getToken(),id:localStorage.id},function (result){
  })
  if(app.redirect()!=""){
    location.href=app.redirect();
  }
}


$('.profileImage').attr('src',localStorage.profile_picture+"?"+new Date().getTime());
 
