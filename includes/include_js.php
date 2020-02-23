<script src="asset/vendor/jquery/jquery-3.4.1.min.js"></script>
<script src="asset/vendor/underscore/underscore-min.js"></script>
<script src="asset/vendor/materialize/materialize.min.js"></script>
<script src="asset/vendor/jodit/jodit.min.js"></script>
<script src="asset/js/lib/tg_core.js"></script>
<script src="asset/js/app/config.js"></script>
<!-- <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script> -->
<script src="asset/js/app/nav.js"></script>

<script src="asset/js/app/main.js"></script>

<script type="text/javascript">
   var url = tg.config.apiurl + 'collections/get/report'+ tg.config.token;
    $.get(url, function(data){   
        var template = $("#test").html(),
         tx = _.template(template), 
         html_to_push = '';
    
    _.each(data.entries, function(item, key, arr){
        item.id=key;
        html_to_push  += tx(item);
    });         
    
     $("#notification_message").html(html_to_push);
    });

   
</script>