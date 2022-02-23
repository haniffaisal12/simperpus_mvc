<main>
    <?php Flasher::flash() ?>
    <h3>Daftar Pengarang</h3>
    <br>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insertModal">
        Tambah
    </button>
    <br><br>
    <table class="table table-success table-hover">
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
                <td>
                    <a class="btn btn-info btn-sm" href="<?= BASE_URL; ?>/pengarang/detail/<?= $pengarang['id'] ?>"> Detail </a>
                    <a class="btn btn-warning btn-sm" href="<?= BASE_URL; ?>/pengarang/edit/<?= $pengarang['id'] ?>"> Edit </a>
                    <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini ?')" href="<?= BASE_URL; ?>/pengarang/hapus/<?= $pengarang['id'] ?>"> Hapus </a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</main>

<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Data Pengarang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASE_URL; ?>/pengarang/tambah" method="POST">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pengarang" aria-label="Nama Pengarang">
                        </div>
                        <div class="col">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Pengarang" aria-label="Email Pengarang">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>