<?php

class Pengadaan extends Controller
{
    public function index()
    {
        $pengadaanBuku = $this->model('BukuModel')->getPengadaanBuku();

        $data = [
            'title' => "Daftar Pengadaan Buku",
            'halaman' => "pengadaan",
            'dataBuku' => $pengadaanBuku,
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('pengadaan/index', $data);
        $this->view('templates/footer');
    }

    public function getStok()
    {
        echo json_encode($this->model('BukuModel')->getDetailBuku($_POST['id']));
    }

    public function tambah()
    {
        if ($this->model('BukuModel')->tambahStokBuku($_POST) > 0) {
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
