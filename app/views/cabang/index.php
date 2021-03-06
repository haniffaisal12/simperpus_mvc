<main>
    <?php Flasher::flash() ?>
    <h3>Daftar Cabang</h3>
    <br>
    <form action="<?= BASE_URL ?>/cabang/cari" method="POST">
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ketik Nama Cabang" aria-label="Ketik Nama Cabang" aria-describedby="button-addon2" id="nama_cabang" name="nama_cabang">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </div>
        </div>
    </form>
    <button type="button" class="btn btn-success modalTambahCabang" data-bs-toggle="modal" data-bs-target="#insertModal">
        Tambah
    </button>
    <br><br>
    <table class="table table-success table-hover">
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
                <td>
                    <a class="btn btn-info btn-sm" href="<?= BASE_URL; ?>/cabang/detail/<?= $cabang['id'] ?>"> Detail </a>
                    <a class="btn btn-warning btn-sm modalEditCabang" data-bs-toggle="modal" data-bs-target="#insertModal" data-id="<?= $cabang['id']; ?>"> Edit </a>
                    <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini ?')" href="<?= BASE_URL; ?>/cabang/hapus/<?= $cabang['id'] ?>"> Hapus </a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</main>

<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="judulModalCabang" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalCabang">Tambah Data Cabang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASE_URL; ?>/cabang/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class=" row">
                        <div class="col">
                            <input type="text" class="form-control" id="kode_cabang" name="kode_cabang" placeholder="Kode Cabang" aria-label="Kode Cabang">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="nama_cabang" name="nama_cabang" placeholder="Nama Cabang" aria-label="Nama Cabang">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat Cabang</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
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