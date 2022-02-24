<main>
    <?php Flasher::flash() ?>
    <h3>Daftar Penjualan</h3>
    <br>
    <form action="<?= BASE_URL ?>/penjualan/cari" method="POST">
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ketik Judul Buku / Nama Cabang" aria-label="Ketik Judul Buku / Nama Cabang" aria-describedby="button-addon2" id="cari" name="cari" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </div>
        </div>
    </form>
    <button type="button" class="btn btn-success modalTambahPenjualan" data-bs-toggle="modal" data-bs-target="#insertModalPenjualan">
        Tambah
    </button>
    <br><br>
    <table class="table table-success table-hover">
        <tr>
            <th>Nama Cabang</th>
            <th>Judul Buku</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($data['dataPenjualan'] as $penjualan) :
        ?>
            <tr>
                <td><?= $penjualan['nama_cabang'] ?></td>
                <td><?= $penjualan['judul'] ?></td>
                <td><?= $penjualan['jumlah'] ?></td>
                <td>
                    <a class="btn btn-info btn-sm" href="<?= BASE_URL; ?>/penjualan/detail/<?= $penjualan['id']; ?>"> Detail </a>
                    <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini ?')" href="<?= BASE_URL; ?>/penjualan/hapus/<?= $penjualan['id']; ?>"> Hapus </a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</main>

<div class="modal fade" id="insertModalPenjualan" tabindex="-1" aria-labelledby="judulModalPenjualan" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalPenjualan">Tambah Data Penjualan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASE_URL; ?>/penjualan/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col">
                            <select class="form-select" aria-label="Pilih Cabang" id="idcabang" name="idcabang" required>
                                <option selected>Pilih Cabang</option>
                                <?php
                                foreach ($data['dataCabang'] as $cabang) :
                                ?>
                                    <option value="<?= $cabang['id'] ?>"><?= $cabang['nama_cabang'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Pilih Judul Buku" id="idbuku" name="idbuku" required>
                                <option selected>Pilih Judul Buku</option>
                                <?php
                                foreach ($data['dataBuku'] as $buku) :
                                ?>
                                    <option value="<?= $buku['id'] ?>"><?= $buku['judul'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" aria-label="Jumlah" required>
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