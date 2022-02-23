<main>
    <h3>Daftar Pengarang</h3>
    <h3><a class="btn btn-success pull-left" style="margin-bottom: 20px" href="tambah.php">Tambah</a></h3>
    <table class="table table-striped">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($data['dataPengarang'] as $pengarang) :
        ?>
            <tr>
                <td><?= $pengarang['nama'] ?></td>
                <td><?= $pengarang['email'] ?></td>
                <td><a class="btn btn-default btn-sm" href="<?= BASE_URL; ?>/pengarang/detail/<?= $pengarang['id'] ?>">
                        Detail</a>
                    <a class="btn btn-warning btn-sm" href="<?= BASE_URL; ?>/pengarang/edit/<?= $pengarang['id'] ?>">
                        Edit</a>
                    <a class="btn btn-danger btn-sm" onclick="return confirm('akan menghapus data?')" href="<?= BASE_URL; ?>/pengarang/hapus/<?= $pengarang['id'] ?>">
                        Hapus</a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</main>