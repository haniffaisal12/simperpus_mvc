<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Dashboard",
            'halaman' => "dashboard"
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }
}
