<?php

class Buku extends Controller
{
    public function index()
    {
        $allBuku = $this->model('BukuModel')->getAllBuku();
        $data = [
            'title' => "Daftar Buku",
            'halaman' => "buku",
            'dataBuku' => $allBuku
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
}
