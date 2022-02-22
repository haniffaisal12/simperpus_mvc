<?php

class Pengarang extends Controller
{
    public function index()
    {
        $data = [
            'title' => "Daftar Pengarang"
        ];
        $this->view('templates/header', $data);
        $this->view('pengarang/index');
        $this->view('templates/footer');
    }
}
