<?php

class Pengarang extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Daftar Pengarang",
            'halaman' => "pengarang"
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('pengarang/index');
        $this->view('templates/footer');
    }
}
