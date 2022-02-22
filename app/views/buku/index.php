<main>
    <h3>Daftar Buku</h3>
    <h3><a class="btn btn-success pull-left" style="margin-bottom: 20px" href="tambah.php">Tambah</a></h3>
    <table class="table table-striped">
        <tr>
            <th>ISBN</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Stok</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($data['dataBuku'] as $buku) :
        ?>
            <tr>
                <td><?= $buku['isbn'] ?></td>
                <td><?= $buku['judul'] ?></td>
                <td><?= $buku['nama'] ?></td>
                <td><?= $buku['stok'] ?></td>
                <td><img src="<?= BASE_URL; ?>/image/<?= $buku['gambar'] ?>"" width=" 100" height="100"></td>
                <td><a class="btn btn-default btn-sm" href="<?= BASE_URL; ?>/buku/detail/<?= $buku['id'] ?>">
                        Detail</a>
                    <a class="btn btn-warning btn-sm" href="<?= BASE_URL; ?>/buku/edit/<?= $buku['id'] ?>">
                        Edit</a>
                    <a class="btn btn-danger btn-sm" onclick="return confirm('akan menghapus data?')" href="<?= BASE_URL; ?>/buku/hapus/<?= $data['id'] ?>">
                        Hapus</a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</main>