$d.ready(function(){
    window.onhashchange = function(){
        $d.trigger('hash-changed', window.location.hash);
    };
    
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
});