<body>
    <header>
        <h1>Detail Cabang</h1>
    </header>

    <main>
        <h3></h3>
        <?php
        $cabang = $data['dataCabang'];
        ?>
        <table>
            <tr height="50">
                <th width="200">Kode Cabang</th>
                <td width="50">:</td>
                <td><?= $cabang['kode_cabang'] ?></td>
            </tr>
            <tr height="50">
                <th>Nama Cabang</th>
                <td>:</td>
                <td><?= $cabang['nama_cabang'] ?></td>
            </tr>
            <tr height="50">
                <th>Alamat Cabang</th>
                <td>:</td>
                <td><?= $cabang['alamat'] ?></td>
            </tr>
        </table>
    </main>