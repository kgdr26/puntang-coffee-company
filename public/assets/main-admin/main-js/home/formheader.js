$(function () {

    const input = document.getElementById('files');
    const fileUrl = input.dataset.file;
    const ext = fileUrl.split('.').pop().toLowerCase();

    let mimeType = "image/jpeg"; // default

    if (ext === "png") mimeType = "image/png";
    if (ext === "jpg" || ext === "jpeg") mimeType = "image/jpeg";
    if (ext === "gif") mimeType = "image/gif";

    let files = [];

    if (fileUrl) {
        files.push({
            name: fileUrl.split('/').pop(),
            size: 123456,
            type: mimeType,
            file: fileUrl,
            data: {
                url: fileUrl
            },
            customUrl: fileUrl
        });
    }

    // console.log(files);

    $('#files').filer({
        extensions: ['jpg', 'jpeg', 'png', 'gif', 'psd'],
        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag & Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn btn btn-primary waves-effect waves-light">Browse Files</a></div></div>',
        showThumbs: true,
        addMore: false,
        files: files,
        dragDrop: {
            dragEnter: null,
            dragLeave: null,
            drop: null,
        },
        theme: "dragdropbox",
        templates: {
            box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
            item: '<li class="jFiler-item">\
                <div class="custom-card">\
                    <div class="custom-thumb">\
                        {{fi-image}}\
                    </div>\
                    <div class="custom-info">\
                        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                        <a class="icon-jfi-trash jFiler-item-trash-action"></a>\
                    </div>\
                </div>\
            </li>',
            itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                            <span class="jFiler-item-others">{{fi-size2}}</span>\
                                        </div>\
                                        <img src="{{fi-url}}" style="max-width:100%;">\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
            progressBar: '<div class="bar"></div>',
            itemAppendToEnd: false,
            removeConfirmation: true,
            _selectors: {
                list: '.jFiler-items-list',
                item: '.jFiler-item',
                progressBar: '.bar',
                remove: '.jFiler-item-trash-action'
            }
        },
        afterShow: function() {
            $('.jFiler-item').each(function() {
                const imgEl = $(this).find('img');

                if (imgEl.length) {
                    // kalau sudah ada image, biarin
                    return;
                }

                const bg = $(this).find('.jFiler-item-thumb-image').css('background-image');

                if (bg && bg !== 'none') {
                    const url = bg.replace(/^url\(["']?/, '').replace(/["']?\)$/, '');

                    $(this).find('.jFiler-item-thumb').html(
                        '<img src="'+url+'" style="width:100%;height:100%;object-fit:cover;">'
                    );
                }
            });
        }
    });

    const editors = {};

    const ids = ['ths_text_1', 'ths_text_2', 'ths_text_3'];

    ids.forEach(id => {
        const el = document.querySelector('#' + id);
        if (el) {
            ClassicEditor.create(el, {
                toolbar: [
                    'heading','|',
                    'bold','italic',
                    'fontColor',              // tambah ini
                    'fontBackgroundColor',    // tambah ini
                    'bulletedList','numberedList','|',
                    'undo','redo'
                ]
            }).then(editor => {
                editors[id] = editor; //  simpan instance
            });
        }
    });

    $('#btnSave').on('click', function () {

        $('#ths_text_1').val(editors['ths_text_1']?.getData());
        $('#ths_text_2').val(editors['ths_text_2']?.getData());
        $('#ths_text_3').val(editors['ths_text_3']?.getData());

        let form = document.getElementById('formdata');
        let formData = new FormData(form);

        let fileInput = $('#files')[0].files[0];

        if (fileInput) {
            formData.append('files', fileInput);
        }

        // console.log(fileInput);

        $.ajax({
            url: "/administrator/actionhomeheader",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            beforeSend: function() {
                $('.theme-loader').show(); // tampilkan loader
            },

            success: function (res) {
                $('.theme-loader').hide(); // penting

                alert(res.message);
                initUI();
                location.reload();
                let url = "/administrator/formhomeheader?id=" + res.id;

                window.location.href = url;
            },
            error: function (err) {
                console.log(err);
                alert('Error saving data');
                $('.theme-loader').hide(); // penting
                initUI();
            }
        });

    });

});



// document.addEventListener("DOMContentLoaded", function () {
//     const ids = ['#ths_text_1', '#ths_text_2', '#ths_text_3'];

//     ids.forEach(id => {
//         const el = document.querySelector(id);
//         if (el) {
//             ClassicEditor.create(el, {
//                 toolbar: [
//                     'heading',
//                     '|',
//                     'bold',
//                     'italic',
//                     'bulletedList',
//                     'numberedList',
//                     '|',
//                     'undo',
//                     'redo'
//                 ]
//             }).catch(error => console.error(error));
//         }
//     });
// });