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

    public function tambah()
    {
        if ($this->model('CabangModel')->insertDataCabang($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success', 'Cabang');
            header('Location: ' . BASE_URL . '/cabang');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger', 'Cabang');
            header('Location: ' . BASE_URL . '/cabang');
            exit;
        }
    }

    public function hapus($id)
    {
        if ($this->model('CabangModel')->deleteDataCabang($id) > 0) {
            Flasher::setFlash('Berhasil', 'Dihapus', 'success', 'Cabang');
            header('Location: ' . BASE_URL . '/cabang');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger', 'Cabang');
            header('Location: ' . BASE_URL . '/cabang');
            exit;
        }
    }

    public function getEdit()
    {
        echo json_encode($this->model('CabangModel')->getDetailCabang($_POST['id']));
    }

    public function edit()
    {
        if ($this->model('CabangModel')->editDataCabang($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Diubah', 'success', 'Cabang');
            header('Location: ' . BASE_URL . '/cabang');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Diubah', 'danger', 'Cabang');
            header('Location: ' . BASE_URL . '/cabang');
            exit;
        }
    }
}
