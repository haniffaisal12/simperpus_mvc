<?php

class Dashboard extends Controller
{
    public function index()
    {
        if (isset($_POST['judul'])) {
            $hasilPencarian = $this->model('BukuModel')->cariBukuByJudul($_POST['judul']);
        }

        $data = [
            'title' => "Dashboard",
            'halaman' => "dashboard",
            'cari' => $hasilPencarian
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}
