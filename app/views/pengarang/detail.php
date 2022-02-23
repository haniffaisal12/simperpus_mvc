<body>
    <header>
        <h1>Detail Pengarang</h1>
    </header>

    <main>
        <h3></h3>
        <?php
        $pengarang = $data['dataPengarang'];
        ?>
        <table>
            <tr height="50">
                <th width="200">Nama Pengarang</th>
                <td width="50">:</td>
                <td><?= $pengarang['nama'] ?></td>
            </tr>
            <tr height="50">
                <th>Email</th>
                <td>:</td>
                <td><?= $pengarang['email'] ?></td>
            </tr>
        </table>
    </main>