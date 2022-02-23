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
            header('Location: ' . BASE_URL . '/buku');
            exit;
        }
    }
}
