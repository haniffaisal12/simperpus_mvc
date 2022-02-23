<body>
    <header>
        <h1>Detail Buku</h1>
    </header>

    <main>
        <h3></h3>
        <?php
        $buku = $data['dataBuku'];
        ?>
        <table>
            <tr height="50">
                <th width="200">ISBN</th>
                <td width="50">:</td>
                <td><?= $buku['isbn'] ?></td>
            </tr>
            <tr height="50">
                <th>Judul</th>
                <td>:</td>
                <td><?= $buku['judul'] ?></td>
            </tr>
            <tr height="50">
                <th>Gambar</th>
                <td>:</td>
                <td><img src="<?= BASE_URL; ?>/image/<?= $buku['gambar'] ?>"" width=" 100" height="100"></td>
            </tr>
            <tr height="50">
                <th>Pengarang</th>
                <td>:</td>
                <td><?= $buku['nama'] ?></td>
            </tr>
            <tr height="50">
                <th>Stok</th>
                <td>:</td>
                <td><?= $buku['stok'] ?></td>
            </tr>
        </table>
    </main>