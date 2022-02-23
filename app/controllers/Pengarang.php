<?php

class Pengarang extends Controller
{
    public function index()
    {
        $allPengarang = $this->model('PengarangModel')->getAllPengarang();
        $data = [
            'title' => "Daftar Pengarang",
            'halaman' => "pengarang",
            'dataPengarang' => $allPengarang
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('pengarang/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $detailPengarang = $this->model('PengarangModel')->getDetailPengarang($id);
        $data = [
            'title' => "Detail Pengarang",
            'halaman' => "pengarang",
            'dataPengarang' => $detailPengarang
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('pengarang/detail', $data);
        $this->view('templates/footer');
    }
}
