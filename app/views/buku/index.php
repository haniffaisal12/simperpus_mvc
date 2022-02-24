<main>
    <?php Flasher::flash() ?>
    <h3>Daftar Buku</h3>
    <br>
    <form action="<?= BASE_URL ?>/buku/cari" method="POST">
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ketik Judul Buku" aria-label="Ketik Judul Buku" aria-describedby="button-addon2" id="cariJudul" name="cariJudul" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </div>
        </div>
    </form>
    <button type="button" class="btn btn-success modalTambahBuku" data-bs-toggle="modal" data-bs-target="#insertModalBuku">
        Tambah
    </button>
    <br><br>
    <table class="table table-success table-hover">
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
                <td>
                    <a class="btn btn-info btn-sm" href="<?= BASE_URL; ?>/buku/detail/<?= $buku['id']; ?>"> Detail </a>
                    <a class="btn btn-warning btn-sm modalEditBuku" data-bs-toggle="modal" data-bs-target="#insertModalBuku" data-id="<?= $buku['id']; ?>"> Edit </a>
                    <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini ?')" href="<?= BASE_URL; ?>/buku/hapus/<?= $buku['id']; ?>/<?= $buku['gambar'] ?>"> Hapus </a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</main>

<div class="modal fade" id="insertModalBuku" tabindex="-1" aria-labelledby="judulModalBuku" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModalBuku">Tambah Data Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASE_URL; ?>/buku/tambah" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    <input type="hidden" name="gambar_lama" id="gambar_lama">
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" aria-label="ISBN" required>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku" aria-label="Judul Buku" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <select class="form-select" aria-label="Pilih Pengarang" id="idpengarang" name="idpengarang" required>
                                <option selected>Pilih Pengarang</option>
                                <?php
                                foreach ($data['dataPengarang'] as $pengarang) :
                                ?>
                                    <option value="<?= $pengarang['id'] ?>"><?= $pengarang['nama'] ?></option>
                                <?php
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok" aria-label="Stok" required>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="mb-3">
                            <label for="gambar" class="form-label"><strong> Gambar Buku </strong></label>
                            <input class="form-control" type="file" id="gambar" name="gambar" accept="image/png, image/jpeg">
                        </div>
                    </div>
                    <div class="row">
                        <p id="uploadedImage"></p>
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