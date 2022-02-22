<body>
    <header>
        <h1>Detail Buku</h1>
    </header>

    <main>
        <h3></h3>
        <?php
        $buku = $data['dataBuku']
        ?>
        <table>
            <tr>
                <th>ISBN</th>
                <td><?= $buku['isbn'] ?></td>
            </tr>
            <tr>
                <th>Judul</th>
                <td><?= $buku['judul'] ?></td>
            </tr>
            <tr>
                <th>Gambar</th>
                <td><img src="<?= BASE_URL; ?>/image/<?= $buku['gambar'] ?>"" width=" 100" height="100"></td>
            </tr>
            <tr>
                <th>Pengarang</th>
                <td><?= $buku['nama'] ?></td>
            </tr>
            <tr>
                <th>Stok</th>
                <td><?= $buku['stok'] ?></td>
            </tr>
        </table>
    </main>