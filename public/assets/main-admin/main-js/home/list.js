$(function () {
    $('#listdata').DataTable();

    $('#listheader').DataTable();


    $('[data-name="deleteheader"').on('click', function () {

        let id = $(this).data('id');

        if (!id) {
            alert('Data tidak ditemukan');
            return;
        }

        if (!confirm('Yakin mau hapus data ini?')) return;

        let formData = new FormData();
        formData.append('ths_id', id);
        formData.append('action', 'delete');

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
            },

            error: function () {
                alert('Gagal hapus data');
            }
        });

    });


});