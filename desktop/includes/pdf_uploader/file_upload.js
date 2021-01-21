$(document).ready(function(){

        var file_upload_location = tg.config.k20api +'/file/upload_file.php',
            $file =$('#file-x');

        function upload_file(success_fn){
            var files = $file[0].files;
            var form_data = new FormData();
            
            form_data.append('file', files[0]);

             $.ajax({
                url: file_upload_location,
                type: 'POST',
                data: form_data,
                contentType: false,
                processData: false,
                success: success_fn
            });
        }

        $file.on('change', function(evt){
            console.log('file-changed!! what???');

            upload_file(function(data) {
                    console.log('check change', data, data['file_uploader']);
                    $('#file_url').val(data['file_uploader']);

            });
        });

        $('form#form_add_manual').on('submit',function(evt){
            evt.preventDefault();;
            var form = evt.target, data = {};

            $(form).children('input.go').each(function(key, item){
                data[item.id] = $(item).val();

            });

            

            $.post(tg.config.k20api +'desktop/i_device_manual.php',data, function(post_data){
            

                 load_pdf({
                     pdf_id: post_data.id,
                     file_url: data.file_url,  
                 })

            });

            
            return false;

        });








});
