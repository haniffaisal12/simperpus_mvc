<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Dashboard",
            'halaman' => "dashboard",
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $cariBuku = $this->model('BukuModel')->cariDataBuku();
        $data = [
            'title' => "Dashboard",
            'halaman' => "dashboard",
            'dataBuku' => $cariBuku,
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/footer');
    }
}
