<?php

class Cabang extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Daftar Cabang",
            'halaman' => "cabang"
        ];
        $this->view('templates/header', $data);
        $this->view('templates/menu', $data);
        $this->view('cabang/index');
        $this->view('templates/footer');
    }
}
