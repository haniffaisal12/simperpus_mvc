<?php

class Cabang extends Controller
{
    public function index()
    {
        $allCabang = $this->model('CabangModel')->getAllCabang();
        $data = [
            'title' => "Daftar Cabang",
            'halaman' => "cabang",
            'dataCabang' => $allCabang
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('cabang/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $detailCabang = $this->model('CabangModel')->getDetailCabang($id);
        $data = [
            'title' => "Detail Cabang",
            'halaman' => "cabang",
            'dataCabang' => $detailCabang
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('cabang/detail', $data);
        $this->view('templates/footer');
    }
}
