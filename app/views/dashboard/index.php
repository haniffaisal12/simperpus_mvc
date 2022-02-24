<header>
    <h1>Sistem Informasi Perpustakaan</h1>
</header>

<main>
    <br>
    <h3>Cari Buku :</h3>
    <form action="<?= BASE_URL ?>/dashboard/cari" method="POST">
        <div class="row">
            <div class="col-lg-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ketik Judul Buku" aria-label="Ketik Judul Buku" aria-describedby="button-addon2" id="judul" name="judul">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari</button>
                </div>
            </div>
        </div>
    </form>
    <?php
    if (!empty($data['dataBuku'])) {
        echo "<h3>Hasil pencarian : </h3>";
        echo "<ul>";
        foreach ($data['dataBuku'] as $buku) :
            echo "<li>" . $buku['judul'] . ' (Pengarang : ' . $buku['nama'] . ')' . "</li>";
        endforeach;
        echo "</ul>";
    }
    ?>
</main>