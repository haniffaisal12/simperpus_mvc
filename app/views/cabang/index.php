<main>
    <h3>Daftar Cabang</h3>
    <h3><a class="btn btn-success pull-left" style="margin-bottom: 20px" href="tambah.php">Tambah</a></h3>
    <table class="table table-striped">
        <tr>
            <th>Kode Cabang</th>
            <th>Nama Cabang</th>
            <th>Alamat Cabang</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($data['dataCabang'] as $cabang) :
        ?>
            <tr>
                <td><?= $cabang['kode_cabang'] ?></td>
                <td><?= $cabang['nama_cabang'] ?></td>
                <td><?= $cabang['alamat'] ?></td>
                <td><a class="btn btn-default btn-sm" href="<?= BASE_URL; ?>/cabang/detail/<?= $cabang['id'] ?>">
                        Detail</a>
                    <a class="btn btn-warning btn-sm" href="<?= BASE_URL; ?>/cabang/edit/<?= $cabang['id'] ?>">
                        Edit</a>
                    <a class="btn btn-danger btn-sm" onclick="return confirm('akan menghapus data?')" href="<?= BASE_URL; ?>/cabang/hapus/<?= $cabang['id'] ?>">
                        Hapus</a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</main>