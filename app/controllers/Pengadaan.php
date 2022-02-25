<?php

class Pengadaan extends Controller
{
    public function index()
    {
        $pengadaanBuku = $this->model('BukuModel')->getPengadaanBuku();

        $data = [
            'title' => "Daftar Buku",
            'halaman' => "buku",
            'dataBuku' => $pengadaanBuku,
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('pengadaan/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('BukuModel')->insertDataBuku($_POST, $_FILES) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Stok Buku');
            header('Location: ' . BASE_URL . '/pengadaan');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger', 'Stok Buku');
            header('Location: ' . BASE_URL . '/pengadaan');
            exit;
        }
    }
}
