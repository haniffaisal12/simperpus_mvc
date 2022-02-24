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

    public function tambah()
    {
        if ($this->model('PengarangModel')->insertDataPengarang($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Pengarang');
            header('Location: ' . BASE_URL . '/pengarang');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger', 'Pengarang');
            header('Location: ' . BASE_URL . '/pengarang');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('PengarangModel')->deleteDataPengarang($id) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Pengarang');
            header('Location: ' . BASE_URL . '/pengarang');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger', 'Pengarang');
            header('Location: ' . BASE_URL . '/pengarang');
            exit;
        }
    }

    public function getEdit()
    {
        echo json_encode($this->model('PengarangModel')->getDetailPengarang($_POST['id']));
    }

    public function edit()
    {
        if ($this->model('PengarangModel')->editDataPengarang($_POST, $_FILES) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success', 'Pengarang');
            header('Location: ' . BASE_URL . '/pengarang');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'danger', 'Pengarang');
            header('Location: ' . BASE_URL . '/pengarang');
            exit;
        }
    }
}
