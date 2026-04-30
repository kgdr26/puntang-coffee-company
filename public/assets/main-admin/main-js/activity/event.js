$(function () {
    $('#listdata').DataTable();


});

document.addEventListener("DOMContentLoaded", function () {
    ClassicEditor
        .create(document.querySelector('#editor'), {
            toolbar: [
                'heading',
                '|',
                'bold',
                'italic',
                'bulletedList',
                'numberedList',
                '|',
                'undo',
                'redo'
            ]
        })
        .catch(error => console.error(error));
});