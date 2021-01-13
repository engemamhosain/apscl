$(document).ready(function(){

        var file_upload_location = tg.config.k20api +'file/upload_file.php',
            $file =$('#file-x');
        console.log('pa ma ga sa',  tg.config.k20api,  tg.config);
        function upload_file(success_fn){
            var files = $file[0].files;
            var form_data = new FormData();
            
            form_data.append('file', files[0]);

             $.ajax({
                url: file_upload_location,
                type: 'POST',
                // files: $file.prop('files')[0],
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
        });