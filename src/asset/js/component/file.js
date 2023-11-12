jQuery(document).ready(($) => {



    const Upload_File = (id) => {

        $(`#${id}`).on('change', (e) => {

            const file = e.target.files[0];
            const file_id = e.target.id
            const file_name = e.target.name
            const load_file = $(`#${file_id}`).attr('load_file')
            const load_spiner = $(`#${file_id}`).attr('load_spiner')

            $(`#${load_file}`).html(' ')
            if (file) {

                const data = new FormData();
                data.append('name', file_name)
                data.append(file_name, file)

                $(`#${load_spiner}`).show()
                $.ajax({
                    xhr: function () {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function (evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = (evt.loaded / evt.total) * 100;
                                // Place upload progress bar visibility code here
                                $(`.progress-bar-${file_id}`).css('width', `${percentComplete}%`)
                                $(`.text-load-${file_id}`).html(`${percentComplete.toFixed()}%`)
                            }
                        }, false);
                        return xhr;
                    },
                    url: `${window.location.protocol}//${window.location.hostname}/wp-admin/admin-ajax.php?action=SET_UPLOAD_FILE`,
                    type: 'POST',
                    data: data,
                    contentType: false,
                    enctype: 'multipart/form-data',
                    processData: false,
                    success: function (resp) {
                        $(`#${load_spiner}`).hide()
                        $(`#${file_id}`).attr('attachment-id', resp.id)


                    }
                });
            }

        })
    }

    // 
    Upload_File("stz-cpw-image-item-gende")
})