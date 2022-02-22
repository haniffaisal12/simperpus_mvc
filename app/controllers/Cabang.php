<?php

class Cabang extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Daftar Cabang"
        ];
        $this->view('templates/header', $data);
        $this->view('cabang/index');
        $this->view('templates/footer');
    }
}
