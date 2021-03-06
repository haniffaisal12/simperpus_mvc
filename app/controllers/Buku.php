<?php

class Buku extends Controller
{
    public function index()
    {
        $allBuku = $this->model('BukuModel')->getAllBuku();
        $allPengarang = $this->model('PengarangModel')->getAllPengarang();
        $data = [
            'title' => "Daftar Buku",
            'halaman' => "buku",
            'dataBuku' => $allBuku,
            'dataPengarang' => $allPengarang
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $detailBuku = $this->model('BukuModel')->getDetailBuku($id);
        $data = [
            'title' => "Detail Buku",
            'halaman' => "buku",
            'dataBuku' => $detailBuku
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('buku/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('BukuModel')->insertDataBuku($_POST, $_FILES) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Buku');
            header('Location: ' . BASE_URL . '/buku');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger', 'Buku');
            header('Location: ' . BASE_URL . '/buku');
            exit;
        }
    }

    public function hapus($id, $gambar)
    {
        if ($this->model('BukuModel')->deleteDataBuku($id, $gambar) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Buku');
            header('Location: ' . BASE_URL . '/buku');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger', 'Buku');
            header('Location: ' . BASE_URL . '/buku');
            exit;
        }
    }

    public function getEdit()
    {
        echo json_encode($this->model('BukuModel')->getDetailBuku($_POST['id']));
    }

    public function edit()
    {
        if ($this->model('BukuModel')->editDataBuku($_POST, $_FILES) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success', 'Buku');
            header('Location: ' . BASE_URL . '/buku');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'danger', 'Buku');
            header('Location: ' . BASE_URL . '/buku');
            exit;
        }
    }

    public function cari()
    {
        $cariBuku = $this->model('BukuModel')->cariDataBuku();
        $data = [
            'title' => "Buku",
            'halaman' => "buku",
            'dataBuku' => $cariBuku,
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('buku/index', $data);
        $this->view('templates/footer');
    }
}
