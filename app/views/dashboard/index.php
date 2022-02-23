<header>
    <h1>Sistem Informasi Perpustakaan</h1>
</header>

<main>
    <br>
    <h3>Cari Buku :</h3>
    <form method="POST">
        <input type="text" id="judul" name="judul" placeholder="Ketik Judul">
        <button type="submit" class="btn btn-primary">Cari</button>
    </form>
    <?php
    if (!empty($data['cari'])) {
        echo "<h3>Hasil pencarian : </h3>";
        foreach ($data['cari'] as $buku) :
            echo $data['judul'] . ' (pengarang : ' . $data['nama'] . ')' . "<hr>";
        endforeach;
    }
    ?>
</main>