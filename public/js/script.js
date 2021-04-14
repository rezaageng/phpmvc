$(function () {
    $('.tambahData').on('click', function () {
        $('.modal-title').html('Tambah Waifu');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nis').val('');
        $('#email').val('');
        $('#jurusan').val('');

    })

    $('.editData').on('click', function () {
        $('.modal-title').html('Edit Waifu');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/php/phpmvc/public/waifu/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/php/phpmvc/public/waifu/getUbah',
            data: {
                id: id
            },
            method: 'post',
            dataType: 'json',

            success: function (data) {
                $('#nama').val(data.nama);
                $('#nis').val(data.nis);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        })
    })
})