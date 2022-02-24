<main>
    <?php Flasher::flash() ?>
    <h3>Daftar Buku</h3>
    <br>
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
                    <a class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ini ?')" href="<?= BASE_URL; ?>/buku/hapus/<?= $buku['id']; ?>"> Hapus </a>
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
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" aria-label="ISBN">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Buku" aria-label="Judul Buku">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <select class="form-select" aria-label="Pilih Pengarang" id="idpengarang" name="idpengarang">
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
                            <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok" aria-label="Stok">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="mb-3">
                            <label for="gambar" class="form-label">Gambar Buku</label>
                            <input class="form-control" type="file" id="gambar" name="gambar" accept="image/png, image/jpeg">
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