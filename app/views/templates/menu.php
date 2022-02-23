<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASE_URL ?>">SIMPERPUS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a <?= $data['halaman'] == 'dashboard' ? 'class="nav-link active"' : 'class="nav-link"' ?> aria-current="page" href="<?= BASE_URL ?>/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a <?= $data['halaman'] == 'pengarang' ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= BASE_URL ?>/pengarang">Pengarang</a>
                </li>
                <li class="nav-item">
                    <a <?= $data['halaman'] == 'buku' ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= BASE_URL ?>/buku">Buku</a>
                </li>
                <li class="nav-item">
                    <a <?= $data['halaman'] == 'cabang' ? 'class="nav-link active"' : 'class="nav-link"' ?> href="<?= BASE_URL ?>/cabang">Cabang</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>