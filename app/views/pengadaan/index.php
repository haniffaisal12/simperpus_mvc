<main>
    <?php Flasher::flash() ?>
    <h3>Daftar Pengadaan Buku</h3>
    <br>
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
                <td><img src="<?= BASE_URL; ?>/image/<?= $buku['gambar'] ?>" width=" 100" height="100"></td>
                <td>
                    <a class="btn btn-success btn-sm modalTambahStok" data-bs-toggle="modal" data-bs-target="#insertModalBuku" data-id="<?= $buku['id']; ?>"> Tambah Stok </a>
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
                <h5 class="modal-title" id="judulModalBuku">Tambah Stok Buku</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASE_URL; ?>/pengadaan/tambah" method="POST">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col">
                            <label for="stok">Stok Sebelumnya :</label>
                            <input type="number" class="form-control" id="stok" name="stok" placeholder="Stok Sebelumnya" aria-label="Stok Sebelumnya" readonly>
                        </div>
                        <div class="col">
                            <label for="stok">Stok Ditambahkan :</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Stok Yang Ditambahkan" aria-label="Stok Yang Ditambahkan" required>
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