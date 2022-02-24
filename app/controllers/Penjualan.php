<?php

class Penjualan extends Controller
{
    public function index()
    {
        $allPenjualan = $this->model('PenjualanModel')->getAllPenjualan();
        $allCabang = $this->model('CabangModel')->getAllCabang();
        $allBuku = $this->model('BukuModel')->getAllBuku();
        $data = [
            'title' => "Penjualan",
            'halaman' => "penjualan",
            'dataPenjualan' => $allPenjualan,
            'dataCabang' => $allCabang,
            'dataBuku' => $allBuku
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('penjualan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $detailPenjualan = $this->model('PenjualanModel')->getDetailPenjualan($id);
        $data = [
            'title' => "Penjualan",
            'halaman' => "penjualan",
            'dataPenjualan' => $detailPenjualan
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('penjualan/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('PenjualanModel')->insertDataPenjualan($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Penjualan');
            header('Location: ' . BASE_URL . '/penjualan');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger', 'Penjualan');
            header('Location: ' . BASE_URL . '/penjualan');
            exit;
        }
    }
}
