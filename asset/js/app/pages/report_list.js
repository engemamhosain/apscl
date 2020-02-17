function init_list_populate(data){
    
     var template = $("#tmp_report_list").html(),
         tx = _.template(template), 
         html_to_push = '';
    
    _.each(data.entries, function(item, key, arr){
        html_to_push  += tx(item);
    });         

     $("#list_push").html(html_to_push);
     // $('.click_title').unbind('click');
     // $('.click_title').click(open_details);
     $('.container_main').hide();
     $('#list_push').show();
     change_breadcum([{url:'#report', title:'Report'}]);
     edit_report_init();
}

function init_detail_populate(data){

     var template = $("#tmp_report_details").html(),
         tx = _.template(template), 
         html_to_push = '';
    
        
        html_to_push  = tx(data);

     $('.container_main').hide();
     $('#details_push').show();

     $("#details_push").html(html_to_push);
     // $('.click_title').unbind('click');
     // $('.click_title').click(open_details);
}

function search_reports(e){
    var niddle = $(e.target).val().toLowerCase(),
        data_table = {
            entries:[],
            fields: tg.db['report'].fields
        };

        // data_table.fields = tg.db['report'].fields;
    _.each(tg.db['report'].entries, function(items){
        if(items._full_text.search(niddle)!== -1){
            data_table.entries.push(items);
        }
    });
    init_list_populate(data_table);
}



api_get('report', init_list_populate);
// var editor = new Jodit('#textarea1');
 var tml_textarea = _.template($("#tmp_textarea").html()), 
 tml_textinput = _.template($("#tmp_input").html());

function edit_report_init(){
    var push_html = '', editor_id_list = [];
    _.each(tg.db['report'].fields, function(item, key, arr){
        if(item.type === 'text'){
            push_html += tml_textinput({key:key, label:item.options.label, value:''});            
        }else if(item.type === 'html'){
            push_html += tml_textinput({key:key, label:item.options.label, value:''});            
            editor_id_list.push('#'+key);
        }
        // console.log('edit', {key, item});
    });
    $('#all_the_fields').html(push_html);
    _.each(editor_id_list, function(item){

     new Jodit(item, {
            buttons: ['image'],
            uploader: {
                 insertImageAsBase64URI: true
            },
        });


 //       new Jodit(item);
    });
    console.log('edit is ready');
}
// function open_details(e){
//     var id = $(e.target).data('id');
    
//     item = _.filter(tg.db['report'].entries, function(item){
//         if(item._id === id){
//             return item;
//         }
//     })[0];
//     init_detail_populate({entries:item, fields: tg.db['report'].fields});
//     // console.log({entries:item, fields: tg.db['report'].fields});
//     change_breadcum([{url:'#report', title:'Report'}, {url:'#report/'+item._id, title: item.name_of_trouble}]);
// }


$('#search').on('keyup', search_reports);

$d.on('hash-changed', function(e, hash){

    if (hash.substr(0,7) !== '#report'){
        return;
    }

    if(hash.length === '#report'.length){
        init_list_populate(tg.db['report']);
    }else if(hash === '#report/add'){
        $('.container_main').hide();
        $('#edit_push').removeClass('hide').show();
    }else{
        var id = hash.split('/')[1];
        item = _.filter(tg.db['report'].entries, function(item){
            if(item._id === id){
                return item;
            }
        })[0];
        init_detail_populate({entries:item, fields: tg.db['report'].fields});
        change_breadcum([{url:'#report', title:'Report'}, {url:'#report/'+item._id, title: item.name_of_trouble}]);
    }

});


$('#save_report').click(function(){
    // console.log('bammma bam,m', $('.tg-inputs'));
    var obj = {};
    $('.tg-inputs').each(function(i, v){
        obj[v.id] = $(v).val();
    });

    console.log(obj);
    api_post('report', obj , function(data){
        console.log('posted', data);
    });
});