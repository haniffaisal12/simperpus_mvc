<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= BASE_URL ?>">SIMPERPUS</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?= $data['halaman'] == 'dashboard' ? 'class="active"' : '' ?>><a href="<?= BASE_URL ?>/dashboard">Dashboard <span class="sr-only">(current)</span></a></li>
                <li <?= $data['halaman'] == 'pengarang' ? 'class="active"' : '' ?>><a href="<?= BASE_URL ?>/pengarang">Pengarang</a></li>
                <li <?= $data['halaman'] == 'buku' ? 'class="active"' : '' ?>><a href="<?= BASE_URL ?>/buku">Buku</a></li>
                <li <?= $data['halaman'] == 'cabang' ? 'class="active"' : '' ?>><a href="<?= BASE_URL ?>/cabang">Cabang</a></li>
            </ul>
        </div>
    </div>
</nav>