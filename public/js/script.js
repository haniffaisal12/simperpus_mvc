$(function() {

    // Buku
    $('.modalTambahBuku').on('click', function() {
        $('#judulModalBuku').html('Tambah Data Buku');
        $('#uploadedImage').html('<p></p>');
    });

    $('.modalEditBuku').on('click', function() {
        $('#judulModalBuku').html('Edit Data Buku');
        $('.modal-body form').attr('action', 'http://localhost/simperpus_mvc/public/buku/edit');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/simperpus_mvc/public/buku/getEdit',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#isbn').val(data.isbn);
                $('#judul').val(data.judul);
                $('#idpengarang').val(data.idpengarang);
                $('#stok').val(data.stok);
                $('#gambar_lama').val(data.gambar);

                var image = "<img src='http://localhost/simperpus_mvc/public/image/"+data.gambar+"' height='100' width='100'><p><i>"+data.gambar+"</i></p>"
                $('#uploadedImage').html(image);
            }
        });
    });

    // Cabang
    $('.modalTambahCabang').on('click', function() {
        $('#judulModalCabang').html('Tambah Data Cabang');
    });

    $('.modalEditCabang').on('click', function() {
        $('#judulModalCabang').html('Edit Data Cabang');
        $('.modal-body form').attr('action', 'http://localhost/simperpus_mvc/public/cabang/edit');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/simperpus_mvc/public/cabang/getEdit',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#kode_cabang').val(data.kode_cabang);
                $('#nama_cabang').val(data.nama_cabang);
                $('#alamat').val(data.alamat);
            }
        });
    });

    // Pengarang
        $('.modalTambahPengarang').on('click', function() {
        $('#judulModalPengarang').html('Tambah Data Pengarang');
    });

    $('.modalEditPengarang').on('click', function() {
        $('#judulModalPengarang').html('Edit Data Pengarang');
        $('.modal-body form').attr('action', 'http://localhost/simperpus_mvc/public/pengarang/edit');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/simperpus_mvc/public/pengarang/getEdit',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#email').val(data.email);
            }
        });
    });

});