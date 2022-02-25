<body>
    <header>
        <h1>Detail Penjualan</h1>
    </header>

    <main>
        <h3></h3>
        <?php
        $penjualan = $data['dataPenjualan'];
        ?>
        <table>
            <tr height="50">
                <th width="75">Buku</th>
                <td width="25">:</td>
                <td><?= $penjualan['judul'] ?></td>
            </tr>
            <tr height="50">
                <th>Cabang</th>
                <td>:</td>
                <td><?= $penjualan['nama_cabang'] ?></td>
            </tr>
            <tr height="50">
                <th>Jumlah</th>
                <td>:</td>
                <td><?= $penjualan['jumlah'] ?> Buku</td>
            </tr>
        </table>
    </main>